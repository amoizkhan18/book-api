<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserActivity;
use App\Models\AppSetting;
use App\Models\Book;
use App\Models\Audiobook;
use Carbon\Carbon;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Kreait\Firebase\Messaging\AndroidConfig;

class SendSmartNotifications extends Command
{
    protected $signature   = 'notifications:send {type : continue_reminder or daily_pick}';
    protected $description = 'Send smart notifications to users';

    public function handle(Messaging $messaging)
    {
        $type = $this->argument('type');

        if ($type === 'continue_reminder') {
            $this->sendContinueReminders($messaging);
        } elseif ($type === 'daily_pick') {
            $this->sendDailyPick($messaging);
        } else {
            $this->error('Unknown type. Use: continue_reminder or daily_pick');
        }
    }

    private function sendContinueReminders(Messaging $messaging)
    {
        $this->info('Sending continue reminders...');

        $cutoff = Carbon::now()->subHours(24);

        $users = UserActivity::where('last_active_at', '<=', $cutoff)
            ->whereNotNull('last_book_title')
            ->whereNotNull('fcm_token')
            ->where('last_progress', '>', 0)
            ->where('last_progress', '<', 100)
            ->get();

        $this->info("Found {$users->count()} users to remind");

        if ($users->isEmpty()) {
            $this->info('No users to remind.');
            return;
        }

        $sent   = 0;
        $failed = 0;

        foreach ($users as $user) {
            try {
                $title = $user->last_book_type === 'audio'
                    ? '🎧 Continue your audiobook'
                    : '📖 Continue reading';

                $body = "{$user->last_book_title} – you stopped at {$user->last_progress}%";

                $message = CloudMessage::withTarget('token', $user->fcm_token)
                    ->withNotification(Notification::create($title, $body))
                    ->withData([
                        'type'     => 'continue_reminder',
                        'bookType' => $user->last_book_type,
                        'progress' => (string) $user->last_progress,
                    ])
                    ->withAndroidConfig(
                        AndroidConfig::fromArray([
                            'notification' => [
                                'channel_id' => 'continue_reminder',
                                'image'      => !empty($user->last_book_cover) ? $user->last_book_cover : '',
                            ],
                        ])
                    );

                $messaging->send($message);
                $sent++;
            } catch (\Exception $e) {
                $this->error("Failed for token {$user->fcm_token}: {$e->getMessage()}");
                $failed++;
            }
        }

        $this->info("✅ Continue reminders: {$sent} sent, {$failed} failed");
    }

    private function sendDailyPick(Messaging $messaging)
    {
        $this->info('Sending daily pick...');

        $bookId   = AppSetting::get('daily_pick_book_id');
        $bookType = AppSetting::get('daily_pick_book_type', 'book');
        $book     = null;

        if ($bookId) {
            $book = $bookType === 'audio'
                ? Audiobook::find($bookId)
                : Book::find($bookId);
            AppSetting::set('daily_pick_book_id',  null);
            AppSetting::set('daily_pick_book_type', null);
        }

        if (!$book) {
            $bookType = 'book';
            $book     = Book::inRandomOrder()->first();
        }

        if (!$book) {
            $this->error('No book found for daily pick');
            return;
        }

        $title = $bookType === 'audio'
            ? '🎧 Today\'s Free Audiobook'
            : '📚 Today\'s Free Book';

        $body = "{$book->title} by {$book->author}";

        $message = CloudMessage::withTarget('topic', 'all_users')
            ->withNotification(Notification::create($title, $body))
            ->withData([
                'type'     => 'daily_pick',
                'bookId'   => (string) $book->id,
                'bookType' => $bookType,
            ])
            ->withAndroidConfig(
                AndroidConfig::fromArray([
                    'notification' => [
                        'channel_id' => 'daily_pick',
                        'image'      => !empty($book->imageurl) ? $book->imageurl : '',
                    ],
                ])
            );

        $messaging->send($message);
        $this->info("✅ Daily pick sent: {$book->title}");
    }
}
