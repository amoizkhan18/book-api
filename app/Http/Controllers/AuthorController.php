<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Get all authors or a specific author by ID
     * GET /api/authors
     * GET /api/authors/{id}
     */
    public function index($id = null)
    {
        try {
            if ($id) {
                $author = Author::where('is_active', true)->find($id);
                
                if (!$author) {
                    return response()->json(['message' => 'Author not found'], 404);
                }
                
                return response()->json($author);
            }

            // Get all active authors ordered by display_order
            $authors = Author::where('is_active', true)
                ->orderBy('display_order', 'asc')
                ->get();

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Get top N authors (default: 3)
     * GET /api/authors/top
     * GET /api/authors/top?limit=5
     */
    public function topAuthors(Request $request)
    {
        try {
            $limit = $request->query('limit', 3);
            
            $authors = Author::where('is_active', true)
                ->orderBy('display_order', 'asc')
                ->limit($limit)
                ->get();

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Get books by author name (SMART MATCHING)
     * GET /api/authors/{name}/books
     */
    public function getBooksByAuthor($name)
    {
        try {
            // Decode the author name from URL
            $authorName = urldecode($name);
            
            // Find author by display name (what user clicked)
            $author = Author::where('name', $authorName)
                ->where('is_active', true)
                ->first();

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            // Get books using the db_name field (matches books table)
            // Uses LIKE to handle different formats
            $books = Book::where('author', 'LIKE', "%{$author->db_name}%")
                ->get()
                ->map(function ($book) {
                    // Ensure genres is an array
                    if (is_string($book->genres)) {
                        $book->genres = json_decode($book->genres, true) ?? [$book->genres];
                    }
                    return [
                        'bookid' => $book->bookid ?? "{$book->title}-{$book->author}",
                        'title' => $book->title,
                        'author' => $book->author,
                        'bookdesc' => $book->bookdesc,
                        'imageurl' => $book->imageurl,
                        'bookurl' => $book->bookurl,
                        'genres' => $book->genres,
                        'totalpages' => $book->totalpages ?? null,
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
                'books' => $books,
                'total_books' => $books->count()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a new author (Admin)
     * POST /api/authors/store
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

            $author = Author::create($validated);

            return response()->json([
                'message' => 'Author created successfully',
                'author' => $author
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Update an author (Admin)
     * POST /api/authors/update/{id}
     */
    public function update(Request $request, $id)
    {
        try {
            $author = Author::find($id);

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
                'message' => 'Author updated successfully',
                'author' => $author
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Delete an author (Admin)
     * POST /api/authors/delete/{id}
     */
    public function destroy($id)
    {
        try {
            $author = Author::find($id);

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            $author->delete();

            return response()->json(['message' => 'Author deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Toggle author active status (Admin)
     * POST /api/authors/toggle/{id}
     */
    public function toggleActive($id)
    {
        try {
            $author = Author::find($id);

            if (!$author) {
                return response()->json(['message' => 'Author not found'], 404);
            }

            $author->is_active = !$author->is_active;
            $author->save();

            return response()->json([
                'message' => 'Author status updated',
                'author' => $author
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Reorder authors (Admin)
     * POST /api/authors/reorder
     * Body: [{"id": 1, "display_order": 1}, {"id": 2, "display_order": 2}]
     */
    public function updateOrder(Request $request)
    {
        try {
            $orders = $request->all();

            foreach ($orders as $item) {
                Author::where('id', $item['id'])
                    ->update(['display_order' => $item['display_order']]);
            }

            return response()->json(['message' => 'Order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
