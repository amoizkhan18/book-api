<?php

namespace App\Http\Controllers;

use App\Models\AudiobookAuthor;
use App\Models\Audiobook;
use Illuminate\Http\Request;

class AudiobookAuthorController extends Controller
{
    public function index($id = null)
    {
        try {
            if ($id) {
                $author = AudiobookAuthor::where('is_active', true)->find($id);
                if (!$author) return response()->json(['message' => 'Author not found'], 404);
                return response()->json($author);
            }

            $authors = $this->cachedResponse('audiobook_authors_all', function () {
                return AudiobookAuthor::where('is_active', true)->orderBy('display_order', 'asc')->get();
            });

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function topAuthors(Request $request)
    {
        try {
            $limit = $request->query('limit', 3);
            $cacheKey = 'audiobook_authors_top_' . $limit;

            $authors = $this->cachedResponse($cacheKey, function () use ($limit) {
                return AudiobookAuthor::where('is_active', true)->orderBy('display_order', 'asc')->limit($limit)->get();
            });

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getAudiobooksByAuthor($name)
    {
        try {
            $authorName = urldecode($name);
            $cacheKey = 'audiobook_author_books_' . md5($authorName);

            $result = $this->cachedResponse($cacheKey, function () use ($authorName) {
                $author = AudiobookAuthor::where('name', $authorName)->where('is_active', true)->first();
                if (!$author) return null;

                $dbName = trim($author->db_name);
                $audiobooks = Audiobook::where('author', 'LIKE', '%' . $dbName . '%')->get()->map(function ($audiobook) {
                    if (is_string($audiobook->genres)) {
                        $audiobook->genres = json_decode($audiobook->genres, true) ?? [$audiobook->genres];
                    }
                    if (is_string($audiobook->audiolinks)) {
                        preg_match_all('/https?:\/\/[^\s",]+/', $audiobook->audiolinks, $matches);
                        $audiobook->audiolinks = $matches[0] ?? [];
                    }
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

                return [
                    'author' => ['id' => $author->id, 'name' => $author->name, 'image' => $author->image, 'description' => $author->description, 'color' => $author->color],
                    'audiobooks' => $audiobooks,
                    'total_audiobooks' => $audiobooks->count(),
                    'total_pages' => 1,
                ];
            });

            if (!$result) return response()->json(['message' => 'Author not found'], 404);
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

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
            $this->clearCache(['audiobook_authors_all', 'audiobook_authors_top_3', 'audiobook_authors_top_7']);
            return response()->json(['message' => 'Audiobook author created successfully', 'author' => $author], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $author = AudiobookAuthor::find($id);
            if (!$author) return response()->json(['message' => 'Author not found'], 404);
            $validated = $request->validate([
                'name' => 'sometimes|string|max:255',
                'db_name' => 'sometimes|string|max:255',
                'image' => 'nullable|string',
                'description' => 'nullable|string',
                'color' => 'nullable|string|max:20',
                'display_order' => 'nullable|integer',
            ]);
            $author->update($validated);
            $this->clearCache(['audiobook_authors_all', 'audiobook_authors_top_3', 'audiobook_authors_top_7']);
            return response()->json(['message' => 'Audiobook author updated successfully', 'author' => $author]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $author = AudiobookAuthor::find($id);
            if (!$author) return response()->json(['message' => 'Author not found'], 404);
            $author->delete();
            $this->clearCache(['audiobook_authors_all', 'audiobook_authors_top_3', 'audiobook_authors_top_7']);
            return response()->json(['message' => 'Audiobook author deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function toggleActive($id)
    {
        try {
            $author = AudiobookAuthor::find($id);
            if (!$author) return response()->json(['message' => 'Author not found'], 404);
            $author->is_active = !$author->is_active;
            $author->save();
            $this->clearCache(['audiobook_authors_all', 'audiobook_authors_top_3', 'audiobook_authors_top_7']);
            return response()->json(['message' => 'Audiobook author status updated', 'author' => $author]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateOrder(Request $request)
    {
        try {
            foreach ($request->all() as $item) {
                AudiobookAuthor::where('id', $item['id'])->update(['display_order' => $item['display_order']]);
            }
            $this->clearCache(['audiobook_authors_all', 'audiobook_authors_top_3', 'audiobook_authors_top_7']);
            return response()->json(['message' => 'Order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
