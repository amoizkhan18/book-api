<?php
namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\Models\AppSetting;
use App\Models\Book;
use App\Models\Audiobook;
use App\Models\DeviceToken;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserActivityController extends Controller
{
    public function updateActivity(Request $request)
    {
        $request->validate([
            'fcm_token'       => 'required|string',
            'last_book_title' => 'required|string',
            'last_book_type'  => 'required|in:epub,audio',
            'last_book_url'   => 'required|string',
            'last_book_cover' => 'nullable|string',
            'last_progress'   => 'required|integer|min:0|max:100',
            'genres'          => 'nullable|array',
        ]);

        UserActivity::updateOrCreate(
            ['fcm_token' => $request->fcm_token],
            [
                'last_book_title' => $request->last_book_title,
                'last_book_type'  => $request->last_book_type,
                'last_book_url'   => $request->last_book_url,
                'last_book_cover' => $request->last_book_cover,
                'last_progress'   => $request->last_progress,
                'favorite_genres' => $request->genres ?? [],
                'last_active_at'  => Carbon::now(),
            ]
        );

        return response()->json(['success' => true]);
    }

    public function getPendingContinueReminders()
    {
        $cutoff = Carbon::now()->subHours(24);

        $users = UserActivity::where('last_active_at', '<=', $cutoff)
            ->whereNotNull('last_book_title')
            ->whereNotNull('fcm_token')
            ->where('last_progress', '>', 0)
            ->where('last_progress', '<', 100)
            ->select('fcm_token', 'last_book_title', 'last_book_type', 'last_progress')
            ->get();

        return response()->json($users);
    }

    public function setDailyPick(Request $request)
    {
        $request->validate([
            'type'    => 'required|in:book,audio',
            'book_id' => 'required|integer',
        ]);

        if ($request->type === 'book') {
            $book = Book::find($request->book_id);
        } else {
            $book = Audiobook::find($request->book_id);
        }

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        AppSetting::set('daily_pick_book_id',  $request->book_id);
        AppSetting::set('daily_pick_book_type', $request->type);

        return response()->json([
            'success' => true,
            'message' => "Daily pick set to: {$book->title}",
            'book'    => $book,
        ]);
    }

    public function getDailyPick()
    {
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
            return response()->json(['message' => 'No book found'], 404);
        }

        return response()->json([
            'id'         => $book->id,
            'title'      => $book->title,
            'author'     => $book->author,
            'bookdesc'   => $book->bookdesc,
            'cover'      => $book->imageurl,
            'bookurl'    => $book->bookurl,
            'audiolinks' => $bookType === 'audio' ? $book->audiolinks : null,
            'downurl'    => $bookType === 'book'  ? $book->downurl    : null,
            'genres'     => $book->genres,
            'type'       => $bookType,
        ]);
    }

    public function sendNewContentNotification(Request $request)
    {
        $request->validate([
            'type'    => 'required|in:book,audio',
            'book_id' => 'required|integer',
        ]);

        if ($request->type === 'book') {
            $book = Book::find($request->book_id);
        } else {
            $book = Audiobook::find($request->book_id);
        }

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $genres = is_array($book->genres)
            ? ($book->genres[0] ?? 'your favorite category')
            : ($book->genres ?? 'your favorite category');

        $title = $request->type === 'audio'
            ? '🎧 New Audiobook Added'
            : '📚 New Book Added';

        $body = "New in {$genres}: {$book->title} by {$book->author}";

        try {
            // ✅ $messaging properly defined here
            $messaging = app(\Kreait\Firebase\Contract\Messaging::class);

            $message = \Kreait\Firebase\Messaging\CloudMessage::withTarget('topic', 'all_users')
                ->withNotification(\Kreait\Firebase\Messaging\Notification::create($title, $body))
                ->withData([
                    'type'     => 'new_content',
                    'bookId'   => (string) $book->id,
                    'bookType' => $request->type,
                    'genre'    => $request->genre ?? '',
                ])
                ->withAndroidConfig(
                    \Kreait\Firebase\Messaging\AndroidConfig::fromArray([
                        'notification' => [
                            'channel_id' => 'new_content',
                            'image'      => !empty($book->imageurl) ? $book->imageurl : '',
                        ],
                    ])
                );

            $messaging->send($message);

            return response()->json([
                'success' => true,
                'message' => "Notification sent for: {$book->title}",
                'notification' => [
                    'title' => $title,
                    'body'  => $body,
                ],
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    public function sendSegmented(Request $request)
    {
        $request->validate([
            'segment'   => 'required|in:all_users,active_7_days,audiobook_users,book_users,inactive_users',
            'title'     => 'required|string',
            'body'      => 'required|string',
            'image'     => 'nullable|string',
            'book_id'   => 'nullable|integer',
            'book_type' => 'nullable|in:book,audio',
            'genre'     => 'nullable|string',
        ]);

        $segment = $request->segment;
        $tokens  = [];

        if ($segment === 'all_users') {
            $tokens = DeviceToken::pluck('fcm_token')->toArray();

        } elseif ($segment === 'active_7_days') {
            $cutoff = Carbon::now()->subDays(7);
            $tokens = DeviceToken::where('last_active_at', '>=', $cutoff)
                ->pluck('fcm_token')->toArray();

        } elseif ($segment === 'inactive_users') {
            $cutoff = Carbon::now()->subDays(7);
            $tokens = DeviceToken::where('last_active_at', '<=', $cutoff)
                ->orWhereNull('last_active_at')
                ->pluck('fcm_token')->toArray();

        } elseif ($segment === 'audiobook_users') {
            $activityTokens = UserActivity::where('last_book_type', 'audio')
                ->pluck('fcm_token')->toArray();
            $tokens = DeviceToken::whereIn('fcm_token', $activityTokens)
                ->pluck('fcm_token')->toArray();
            if (empty($tokens)) {
                $tokens = DeviceToken::pluck('fcm_token')->toArray();
            }

        } elseif ($segment === 'book_users') {
            $activityTokens = UserActivity::where('last_book_type', 'epub')
                ->pluck('fcm_token')->toArray();
            $tokens = DeviceToken::whereIn('fcm_token', $activityTokens)
                ->pluck('fcm_token')->toArray();
            if (empty($tokens)) {
                $tokens = DeviceToken::pluck('fcm_token')->toArray();
            }
        }

        if (empty($tokens)) {
            return response()->json([
                'success' => false,
                'message' => 'No users found in this segment',
            ], 404);
        }

        $messaging = app(\Kreait\Firebase\Contract\Messaging::class);
        $sent      = 0;
        $failed    = 0;

        $androidConfig = [
            'notification' => [
                'channel_id' => 'new_content',
                'image'      => !empty($request->image) ? $request->image : '',
            ],
        ];

        $chunks = array_chunk($tokens, 500);

        foreach ($chunks as $chunk) {
            $messages = array_map(function($token) use ($request, $androidConfig) {
                return \Kreait\Firebase\Messaging\CloudMessage::withTarget('token', $token)
                    ->withNotification(
                        \Kreait\Firebase\Messaging\Notification::create(
                            $request->title,
                            $request->body
                        )
                    )
                    ->withData([
                        'type'     => ($request->genre ? 'category' : 'segmented'),
                        'bookId'   => (string) ($request->book_id ?? ''),
                        'bookType' => $request->book_type ?? 'book',
                        'genre'    => $request->genre ?? '',
                    ])
                    ->withAndroidConfig(
                        \Kreait\Firebase\Messaging\AndroidConfig::fromArray($androidConfig)
                    );
            }, $chunk);

            foreach ($messages as $message) {
                try {
                    $messaging->send($message);
                    $sent++;
                } catch (\Exception $e) {
                    $failed++;
                    \Log::error('Segmented notification failed: ' . $e->getMessage());
                }
            }
        }

        return response()->json([
            'success' => true,
            'segment' => $segment,
            'total'   => count($tokens),
            'sent'    => $sent,
            'failed'  => $failed,
            'message' => "Notification sent to {$sent} users in segment: {$segment}",
        ]);
    }
}
