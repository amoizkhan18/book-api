<?php

namespace App\Http\Controllers;

use App\Models\Audiobook;
use Illuminate\Http\Request;

class AudioBookController extends Controller
{
    public function audiobooksByGenre($genre, Request $request)
    {
        try {
            $page  = max(1, (int) $request->query('page', 1));
            $limit = min(50, max(1, (int) $request->query('limit', 10)));
            $seed  = abs((int) date('Ymd') + crc32($genre));

            // ✅ Cache per genre+page+limit
            $cacheKey = 'audiobooks_genre_' . strtolower($genre) . '_page_' . $page . '_limit_' . $limit;

            $result = $this->cachedResponse($cacheKey, function () use ($genre, $page, $limit, $seed) {
                $total      = Audiobook::where('genres', 'LIKE', '%' . $genre . '%')->count();
                $totalPages = $total > 0 ? (int) ceil($total / $limit) : 1;
                $page       = min($page, $totalPages);

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

                return [
                    'data'        => $audiobooks,
                    'page'        => $page,
                    'limit'       => $limit,
                    'total'       => $total,
                    'total_pages' => $totalPages,
                ];
            });

            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getAudiobook($id = null)
    {
        try {
            if ($id) {
                $audiobook = Audiobook::find($id);
                if (!$audiobook) return response()->json(['message' => 'Audiobook not found'], 404);

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

            $page  = max(1, (int) request()->query('page', 1));
            $limit = min(50, max(1, (int) request()->query('limit', 10)));
            $total = Audiobook::count();

            $audiobooks = Audiobook::skip(($page - 1) * $limit)->take($limit)->get()->map(function ($audiobook) {
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
