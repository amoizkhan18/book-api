<?php

namespace App\Http\Controllers;

use App\Models\Audiobook;
use Illuminate\Http\Request;

class AudioBookController extends Controller
{
    /**
     * Get audiobooks by genre
     * GET /api/audiobooks/genres/{genre}
     */
    public function audiobooksByGenre($genre, Request $request)
    {
        try {
            $page = $request->query('page', 1);
            $limit = $request->query('limit', 10);
            
            $audiobooks = Audiobook::where('genres', 'LIKE', '%' . $genre . '%')
                ->skip(($page - 1) * $limit)
                ->take($limit)
                ->get()
                ->map(function ($audiobook) {
                    return [
                        'bookid' => $audiobook->id,
                        'title' => $audiobook->title,
                        'author' => $audiobook->author,
                        'bookdesc' => $audiobook->bookdesc,
                        'imageurl' => $audiobook->imageurl,
                        'audiolinks' => $this->sanitizeLinks($audiobook->audiolinks),
                        'genres' => $this->sanitizeGenres($audiobook->genres),
                    ];
                });

            return response()->json($audiobooks);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Sanitize audiolinks - handles both string and array input
     */
    private function sanitizeLinks($links)
    {
        // If it's already an array, return it
        if (is_array($links)) {
            return array_map(function ($link) {
                return trim($link, " \t\n\r\0\x0B\"\\");
            }, $links);
        }

        // If it's a JSON string, decode it
        if (is_string($links)) {
            $decoded = json_decode($links, true);
            if (is_array($decoded)) {
                return array_map(function ($link) {
                    return trim($link, " \t\n\r\0\x0B\"\\");
                }, $decoded);
            }

            // If it's a comma-separated string, explode it
            return array_map(function ($link) {
                return trim($link, " \t\n\r\0\x0B\"\\");
            }, explode(',', $links));
        }

        // Fallback: return empty array
        return [];
    }

    /**
     * Sanitize genres - handles both string and array input
     */
    private function sanitizeGenres($genres)
    {
        // If it's already an array, return it
        if (is_array($genres)) {
            return $genres;
        }

        // If it's a JSON string, decode it
        if (is_string($genres)) {
            $decoded = json_decode($genres, true);
            if (is_array($decoded)) {
                return $decoded;
            }

            // If it's a comma-separated string, explode it
            return array_map('trim', explode(',', $genres));
        }

        // Fallback: return array with single value
        return [$genres];
    }
}
