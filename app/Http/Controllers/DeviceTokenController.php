<?php

namespace App\Http\Controllers;

use App\Models\DeviceToken;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class DeviceTokenController extends Controller
{
    private function getMessaging()
    {
        $factory = (new Factory)->withServiceAccount(base_path('firebase-service-account.json'));
        return $factory->createMessaging();
    }

    // Register or update device token
    public function register(Request $request)
    {
        try {
            $request->validate([
                'fcm_token' => 'required|string',
            ]);

            $token = DeviceToken::updateOrCreate(
                ['fcm_token' => $request->fcm_token],
                [
                    'device_id'       => $request->device_id,
                    'device_model'    => $request->device_model,
                    'android_version' => $request->android_version,
                    'app_version'     => $request->app_version,
                    'last_active_at'  => now(),
                ]
            );

            return response()->json([
                'message' => 'Token registered successfully',
                'token'   => $token,
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Get all tokens
    public function getAllTokens()
    {
        try {
            $tokens = DeviceToken::select('fcm_token', 'device_model', 'last_active_at')
                ->orderBy('last_active_at', 'desc')
                ->get();

            return response()->json($tokens);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Get tokens active in last 7 days
    public function getActiveTokens()
    {
        try {
            $tokens = DeviceToken::select('fcm_token')
                ->where('last_active_at', '>=', now()->subDays(7))
                ->get()
                ->pluck('fcm_token');

            return response()->json($tokens);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Send to specific device
    public function sendToDevice(Request $request)
    {
        try {
            $request->validate([
                'fcm_token' => 'required|string',
                'title'     => 'required|string',
                'message'   => 'required|string',
                'image'     => 'nullable|string',
                'deep_link' => 'nullable|string',
            ]);

            $messaging = $this->getMessaging();

            $notification = Notification::create($request->title, $request->message);

            $message = CloudMessage::withTarget('token', $request->fcm_token)
                ->withNotification($notification)
                ->withData([
                    'deep_link' => $request->deep_link ?? '',
                    'image'     => $request->image ?? '',
                ]);

            if ($request->image) {
                $message = $message->withAndroidConfig([
                    'notification' => ['image' => $request->image],
                ]);
            }

            $messaging->send($message);

            return response()->json(['message' => 'Notification sent successfully']);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Send to all devices
    public function sendToAll(Request $request)
    {
        try {
            $request->validate([
                'title'     => 'required|string',
                'message'   => 'required|string',
                'image'     => 'nullable|string',
                'deep_link' => 'nullable|string',
            ]);

            $tokens = DeviceToken::pluck('fcm_token')->toArray();

            if (empty($tokens)) {
                return response()->json(['message' => 'No devices registered'], 200);
            }

            $messaging = $this->getMessaging();
            $notification = Notification::create($request->title, $request->message);

            $messages = [];
            foreach ($tokens as $token) {
                $msg = CloudMessage::withTarget('token', $token)
                    ->withNotification($notification)
                    ->withData([
                        'deep_link' => $request->deep_link ?? '',
                        'image'     => $request->image ?? '',
                    ]);
                $messages[] = $msg;
            }

            $report = $messaging->sendAll($messages);

            return response()->json([
                'message'        => 'Notifications sent',
                'total_sent'     => $report->successes()->count(),
                'total_failed'   => $report->failures()->count(),
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Send to multiple selected devices
    public function sendToMultiple(Request $request)
    {
        try {
            $request->validate([
                'fcm_tokens' => 'required|array',
                'title'      => 'required|string',
                'message'    => 'required|string',
                'image'      => 'nullable|string',
                'deep_link'  => 'nullable|string',
            ]);

            $messaging = $this->getMessaging();
            $notification = Notification::create($request->title, $request->message);

            $messages = [];
            foreach ($request->fcm_tokens as $token) {
                $msg = CloudMessage::withTarget('token', $token)
                    ->withNotification($notification)
                    ->withData([
                        'deep_link' => $request->deep_link ?? '',
                        'image'     => $request->image ?? '',
                    ]);
                $messages[] = $msg;
            }

            $report = $messaging->sendAll($messages);

            return response()->json([
                'message'      => 'Notifications sent',
                'total_sent'   => $report->successes()->count(),
                'total_failed' => $report->failures()->count(),
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Send to active users (last 7 days)
    public function sendToActive(Request $request)
    {
        try {
            $request->validate([
                'title'     => 'required|string',
                'message'   => 'required|string',
                'image'     => 'nullable|string',
                'deep_link' => 'nullable|string',
            ]);

            $tokens = DeviceToken::select('fcm_token')
                ->where('last_active_at', '>=', now()->subDays(7))
                ->pluck('fcm_token')
                ->toArray();

            if (empty($tokens)) {
                return response()->json(['message' => 'No active devices found'], 200);
            }

            $messaging = $this->getMessaging();
            $notification = Notification::create($request->title, $request->message);

            $messages = [];
            foreach ($tokens as $token) {
                $msg = CloudMessage::withTarget('token', $token)
                    ->withNotification($notification)
                    ->withData([
                        'deep_link' => $request->deep_link ?? '',
                        'image'     => $request->image ?? '',
                    ]);
                $messages[] = $msg;
            }

            $report = $messaging->sendAll($messages);

            return response()->json([
                'message'      => 'Notifications sent to active users',
                'total_sent'   => $report->successes()->count(),
                'total_failed' => $report->failures()->count(),
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

