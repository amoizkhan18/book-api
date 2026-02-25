<?php

namespace App\Http\Controllers;

use App\Models\AudiobookAuthor;
use App\Models\Audiobook;
use Illuminate\Http\Request;

class AudiobookAuthorController extends Controller
{
    /**
     * Get all audiobook authors or a specific author by ID
     * GET /api/audiobook-authors
     * GET /api/audiobook-authors/{id}
     */
    public function index($id = null)
    {
        try {
            if ($id) {
                $author = AudiobookAuthor::where('is_active', true)->find($id);
                
                if (!$author) {
                    return response()->json(['message' => 'Author not found'], 404);
                }
                
                return response()->json($author);
            }

            // Get all active authors ordered by display_order
            $authors = AudiobookAuthor::where('is_active', true)
                ->orderBy('display_order', 'asc')
                ->get();

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Get top N audiobook authors (default: 3)
     * GET /api/audiobook-authors/top
     * GET /api/audiobook-authors/top?limit=5
     */
    public function topAuthors(Request $request)
    {
        try {
            $limit = $request->query('limit', 3);
            
            $authors = AudiobookAuthor::where('is_active', true)
                ->orderBy('display_order', 'asc')
                ->limit($limit)
                ->get();

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Get audiobooks by author name (SMART MATCHING)
     * GET /api/audiobook-authors/{name}/audiobooks
     */
    public function getAudiobooksByAuthor($name)
    {
        try {
            // Decode the author name from URL
            $authorName = urldecode($name);
            
            // Find author by display name (what user clicked)
            $author = AudiobookAuthor::where('name', $authorName)
                ->where('is_active', true)
                ->first();

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            // Get audiobooks using the db_name field (matches audiobooks table)
            // Uses LIKE to handle different formats
	$audiobooks = Audiobook::where('author', 'LIKE', $author->db_name . '%')
            
                ->get()
                ->map(function ($audiobook) {
                    // Ensure genres and audiolinks are arrays
                    if (is_string($audiobook->genres)) {
                        $audiobook->genres = json_decode($audiobook->genres, true) ?? [$audiobook->genres];
                    }
                    if (is_string($audiobook->audiolinks)) {
                        $audiobook->audiolinks = json_decode($audiobook->audiolinks, true) ?? [];
                    }
                    return [
                        'bookid' => $audiobook->id ?? "{$audiobook->title}-{$audiobook->author}",
                        'title' => $audiobook->title,
                        'author' => $audiobook->author,
                        'bookdesc' => $audiobook->bookdesc,
                        'imageurl' => $audiobook->imageurl,
                        'audiolinks' => $audiobook->audiolinks,
                        'genres' => $audiobook->genres,
                    ];
                });

            return response()->json([
                'author' => [
                    'id' => $author->id,
                    'name' => $author->name,
                    'image' => $author->image,
                    'description' => $author->description,
                    'color' => $author->color,
                ],
                'audiobooks' => $audiobooks,
                'total_audiobooks' => $audiobooks->count()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a new audiobook author (Admin)
     * POST /api/audiobook-authors/store
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'db_name' => 'required|string|max:255',
                'image' => 'nullable|string',
                'description' => 'nullable|string',
                'color' => 'nullable|string|max:20',
                'display_order' => 'nullable|integer',
            ]);

            $author = AudiobookAuthor::create($validated);

            return response()->json([
                'message' => 'Audiobook author created successfully',
                'author' => $author
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update an audiobook author (Admin)
     * POST /api/audiobook-authors/update/{id}
     */
    public function update(Request $request, $id)
    {
        try {
            $author = AudiobookAuthor::find($id);

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            $validated = $request->validate([
                'name' => 'sometimes|string|max:255',
                'db_name' => 'sometimes|string|max:255',
                'image' => 'nullable|string',
                'description' => 'nullable|string',
                'color' => 'nullable|string|max:20',
                'display_order' => 'nullable|integer',
            ]);

            $author->update($validated);

            return response()->json([
                'message' => 'Audiobook author updated successfully',
                'author' => $author
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Delete an audiobook author (Admin)
     * POST /api/audiobook-authors/delete/{id}
     */
    public function destroy($id)
    {
        try {
            $author = AudiobookAuthor::find($id);

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            $author->delete();

            return response()->json(['message' => 'Audiobook author deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Toggle audiobook author active status (Admin)
     * POST /api/audiobook-authors/toggle/{id}
     */
    public function toggleActive($id)
    {
        try {
            $author = AudiobookAuthor::find($id);

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            $author->is_active = !$author->is_active;
            $author->save();

            return response()->json([
                'message' => 'Audiobook author status updated',
                'author' => $author
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Reorder audiobook authors (Admin)
     * POST /api/audiobook-authors/reorder
     * Body: [{"id": 1, "display_order": 1}, {"id": 2, "display_order": 2}]
     */
    public function updateOrder(Request $request)
    {
        try {
            $orders = $request->all();

            foreach ($orders as $item) {
                AudiobookAuthor::where('id', $item['id'])
                    ->update(['display_order' => $item['display_order']]);
            }

            return response()->json(['message' => 'Order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
