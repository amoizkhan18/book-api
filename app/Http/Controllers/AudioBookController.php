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
                        'audiolinks' => $audiobook->audiolinks, // Let the accessor handle it
                        'genres' => $audiobook->genres, // Let the accessor handle it
                    ];
                });

            return response()->json($audiobooks);
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
                    'bookid' => $audiobook->id,
                    'title' => $audiobook->title,
                    'author' => $audiobook->author,
                    'bookdesc' => $audiobook->bookdesc,
                    'imageurl' => $audiobook->imageurl,
                    'audiolinks' => $audiobook->audiolinks,
                    'genres' => $audiobook->genres,
                    'bookurl' => $audiobook->bookurl,
                ]);
            }

            // Get all audiobooks
            $audiobooks = Audiobook::all()->map(function ($audiobook) {
                return [
                    'bookid' => $audiobook->id,
                    'title' => $audiobook->title,
                    'author' => $audiobook->author,
                    'bookdesc' => $audiobook->bookdesc,
                    'imageurl' => $audiobook->imageurl,
                    'audiolinks' => $audiobook->audiolinks,
                    'genres' => $audiobook->genres,
                ];
            });

            return response()->json($audiobooks);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
