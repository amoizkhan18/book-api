<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;

/**
 * @OA\Info(
 *     title="Librora API",
 *     version="1.0.0",
 *     description="Librora Book & Audiobook App — Full API Documentation",
 *     @OA\Contact(email="admin@librorabookofficial.win")
 * )
 * @OA\Server(
 *     url="http://api.librorabookofficial.win",
 *     description="Production Server"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Cache duration in seconds (30 minutes)
    protected int $cacheTTL = 1800;

    /**
     * Get cached response or generate and cache it
     */
    protected function cachedResponse(string $key, callable $callback)
    {
        return Cache::remember($key, $this->cacheTTL, $callback);
    }

    /**
     * Clear specific cache keys
     */
    protected function clearCache(array $keys)
    {
        foreach ($keys as $key) {
            Cache::forget($key);
        }
    }
}
