<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeviceToken;
use App\Models\UserActivity;
use App\Models\TrendingBook;
use App\Models\PopularBook;
use App\Models\TrendingAudiobook;
use App\Models\PopularAudiobook;
use App\Models\Author;
use App\Models\AudiobookAuthor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    private $adminPassword = 'librora@admin2026';

    // ─── Login ───────────────────────────────────────────────────────────────

    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate(['password' => 'required']);

        if ($request->password === $this->adminPassword) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['password' => 'Incorrect password']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    // ─── Dashboard ───────────────────────────────────────────────────────────

    public function dashboard()
    {
        $totalDevices  = DeviceToken::count();
        $activeDevices = DeviceToken::where('last_active_at', '>=', Carbon::now()->subDays(7))->count();
        $totalActivity = UserActivity::count();
        $recentActivity = UserActivity::orderBy('last_active_at', 'desc')->limit(5)->get();

        return view('admin.dashboard', compact(
            'totalDevices', 'activeDevices', 'totalActivity', 'recentActivity'
        ));
    }

    // ─── Notifications ───────────────────────────────────────────────────────

    public function notifications()
    {
        $devices = DeviceToken::orderBy('last_active_at', 'desc')->get();
        return view('admin.notifications', compact('devices'));
    }

    public function sendNotification(Request $request)
    {
        $type = $request->notification_type;
        $baseUrl = 'http://api.librorabookofficial.win/api';

        try {
            switch ($type) {
                case 'all':
                    $response = Http::post("{$baseUrl}/devices/notify/all", [
                        'title'   => $request->title,
                        'message' => $request->message,
                        'image'   => $request->image ?? '',
                        'deep_link' => '',
                    ]);
                    break;

                case 'active':
                    $response = Http::post("{$baseUrl}/devices/notify/active", [
                        'title'   => $request->title,
                        'message' => $request->message,
                        'image'   => $request->image ?? '',
                        'deep_link' => '',
                    ]);
                    break;

                case 'device':
                    $response = Http::post("{$baseUrl}/devices/notify/device", [
                        'fcm_token' => $request->fcm_token,
                        'title'     => $request->title,
                        'message'   => $request->message,
                        'image'     => $request->image ?? '',
                        'deep_link' => '',
                    ]);
                    break;

                case 'segmented':
                    $response = Http::post("{$baseUrl}/notifications/send-segmented", [
                        'segment'   => $request->segment,
                        'title'     => $request->title,
                        'body'      => $request->message,
                        'image'     => $request->image ?? '',
                        'book_type' => $request->book_type ?? 'book',
                        'genre'     => $request->genre ?? '',
                        'book_id'   => $request->book_id ?? null,
                    ]);
                    break;

                case 'daily_pick':
                    $response = Http::post("{$baseUrl}/notifications/set-daily-pick", [
                        'type'    => $request->book_type,
                        'book_id' => $request->book_id,
                    ]);
                    break;

                case 'new_content':
                    $response = Http::post("{$baseUrl}/notifications/new-content", [
                        'type'    => $request->book_type,
                        'book_id' => $request->book_id,
                    ]);
                    break;
            }

            return back()->with('success', 'Notification sent successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send notification: ' . $e->getMessage());
        }
    }

    // ─── Devices ─────────────────────────────────────────────────────────────

    public function devices()
    {
        $devices = DeviceToken::orderBy('last_active_at', 'desc')->get();
        return view('admin.devices', compact('devices'));
    }

    // ─── Content Management ──────────────────────────────────────────────────

    public function trending()
    {
        $books = TrendingBook::orderBy('order')->get();
        return view('admin.content', [
            'title' => 'Trending Books',
            'items' => $books,
            'type'  => 'trending',
        ]);
    }

    public function popular()
    {
        $books = PopularBook::orderBy('order')->get();
        return view('admin.content', [
            'title' => 'Popular Books',
            'items' => $books,
            'type'  => 'popular',
        ]);
    }

    public function trendingAudiobooks()
    {
        $books = TrendingAudiobook::orderBy('order')->get();
        return view('admin.content', [
            'title' => 'Trending Audiobooks',
            'items' => $books,
            'type'  => 'trending-audiobooks',
        ]);
    }

    public function popularAudiobooks()
    {
        $books = PopularAudiobook::orderBy('order')->get();
        return view('admin.content', [
            'title' => 'Popular Audiobooks',
            'items' => $books,
            'type'  => 'popular-audiobooks',
        ]);
    }

    public function authors()
    {
        $authors = Author::orderBy('display_order')->get();
        return view('admin.authors', [
            'title'   => 'Book Authors',
            'authors' => $authors,
            'type'    => 'authors',
        ]);
    }

    public function audiobookAuthors()
    {
        $authors = AudiobookAuthor::orderBy('display_order')->get();
        return view('admin.authors', [
            'title'   => 'Audiobook Authors',
            'authors' => $authors,
            'type'    => 'audiobook-authors',
        ]);
    }
}
