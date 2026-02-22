<?php

namespace App\Http\Controllers;

use App\Models\Audiobook;
use Illuminate\Http\Request;

class AudioBookController extends Controller
{
    /**
     * Get audiobooks by genre with daily seeded shuffle (unique per genre) + pagination
     * GET /api/audiobooks/genres/{genre}?page=1&limit=10
     */
    public function audiobooksByGenre($genre, Request $request)
    {
        try {
            $page  = max(1, (int) $request->query('page', 1));
            $limit = min(50, max(1, (int) $request->query('limit', 10)));

            // Seed is unique per genre AND per day
            // crc32 converts genre string to a unique number
            // abs() ensures positive value for RAND()
            $seed = abs((int) date('Ymd') + crc32($genre));

            $total      = Audiobook::where('genres', 'LIKE', '%' . $genre . '%')->count();
            $totalPages = $total > 0 ? (int) ceil($total / $limit) : 1;

            // Clamp page to valid range
            $page = min($page, $totalPages);

            $audiobooks = Audiobook::where('genres', 'LIKE', '%' . $genre . '%')
                ->orderByRaw("RAND($seed)")
                ->skip(($page - 1) * $limit)
                ->take($limit)
                ->get()
                ->map(function ($audiobook) {
                    return [
                        'bookid'     => $audiobook->id,
                        'title'      => $audiobook->title,
                        'author'     => $audiobook->author,
                        'bookdesc'   => $audiobook->bookdesc,
                        'imageurl'   => $audiobook->imageurl,
                        'audiolinks' => $audiobook->audiolinks,
                        'genres'     => $audiobook->genres,
                        'bookurl'    => $audiobook->bookurl,
                    ];
                });

            return response()->json([
                'data'        => $audiobooks,
                'page'        => $page,
                'limit'       => $limit,
                'total'       => $total,
                'total_pages' => $totalPages,
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Get a single audiobook or all audiobooks
     * GET /api/audiobook
     * GET /api/audiobook/{id}
     */
    public function getAudiobook($id = null)
    {
        try {
            if ($id) {
                $audiobook = Audiobook::find($id);

                if (!$audiobook) {
                    return response()->json(['message' => 'Audiobook not found'], 404);
                }

                return response()->json([
                    'bookid'     => $audiobook->id,
                    'title'      => $audiobook->title,
                    'author'     => $audiobook->author,
                    'bookdesc'   => $audiobook->bookdesc,
                    'imageurl'   => $audiobook->imageurl,
                    'audiolinks' => $audiobook->audiolinks,
                    'genres'     => $audiobook->genres,
                    'bookurl'    => $audiobook->bookurl,
                ]);
            }

            // All audiobooks — paginated to avoid memory issues with 4000 records
            $page  = max(1, (int) request()->query('page', 1));
            $limit = min(50, max(1, (int) request()->query('limit', 10)));
            $total = Audiobook::count();

            $audiobooks = Audiobook::skip(($page - 1) * $limit)
                ->take($limit)
                ->get()
                ->map(function ($audiobook) {
                    return [
                        'bookid'     => $audiobook->id,
                        'title'      => $audiobook->title,
                        'author'     => $audiobook->author,
                        'bookdesc'   => $audiobook->bookdesc,
                        'imageurl'   => $audiobook->imageurl,
                        'audiolinks' => $audiobook->audiolinks,
                        'genres'     => $audiobook->genres,
                        'bookurl'    => $audiobook->bookurl,
                    ];
                });

            return response()->json([
                'data'        => $audiobooks,
                'page'        => $page,
                'limit'       => $limit,
                'total'       => $total,
                'total_pages' => (int) ceil($total / $limit),
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
