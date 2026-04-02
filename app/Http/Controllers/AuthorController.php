<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index($id = null)
    {
        try {
            if ($id) {
                $author = Author::where('is_active', true)->find($id);
                if (!$author) return response()->json(['message' => 'Author not found'], 404);
                return response()->json($author);
            }

            $authors = $this->cachedResponse('authors_all', function () {
                return Author::where('is_active', true)->orderBy('display_order', 'asc')->get();
            });

            return response()->json($authors);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

public function topAuthors(Request $request)
{
    try {
        $limit  = (int) $request->query('limit', 3);
        $offset = (int) $request->query('offset', 0);
        $cacheKey = 'authors_top_' . $limit . '_' . $offset;

        $authors = $this->cachedResponse($cacheKey, function () use ($limit, $offset) {
            return Author::where('is_active', true)
                ->orderBy('display_order', 'asc')
                ->limit($limit)
                ->offset($offset)
                ->get();
        });

        return response()->json($authors);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    public function getBooksByAuthor($name)
    {
        try {
            $authorName = urldecode($name);
            $cacheKey = 'author_books_' . md5($authorName);

            $result = $this->cachedResponse($cacheKey, function () use ($authorName) {
                $author = Author::where('name', $authorName)->where('is_active', true)->first();
                if (!$author) return null;

                $books = Book::where('author', 'LIKE', "%{$author->db_name}%")->get()->map(function ($book) {
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

                return [
                    'author' => ['id' => $author->id, 'name' => $author->name, 'image' => $author->image, 'description' => $author->description, 'color' => $author->color],
                    'books' => $books,
                    'total_books' => $books->count(),
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

            $author = Author::create($validated);
            $this->clearCache(['authors_all', 'authors_top_3', 'authors_top_7']);
            return response()->json(['message' => 'Author created successfully', 'author' => $author], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $author = Author::find($id);
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
            $this->clearCache(['authors_all', 'authors_top_3', 'authors_top_7']);
            return response()->json(['message' => 'Author updated successfully', 'author' => $author]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $author = Author::find($id);
            if (!$author) return response()->json(['message' => 'Author not found'], 404);
            $author->delete();
            $this->clearCache(['authors_all', 'authors_top_3', 'authors_top_7']);
            return response()->json(['message' => 'Author deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function toggleActive($id)
    {
        try {
            $author = Author::find($id);
            if (!$author) return response()->json(['message' => 'Author not found'], 404);
            $author->is_active = !$author->is_active;
            $author->save();
            $this->clearCache(['authors_all', 'authors_top_3', 'authors_top_7']);
            return response()->json(['message' => 'Author status updated', 'author' => $author]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updateOrder(Request $request)
    {
        try {
            foreach ($request->all() as $item) {
                Author::where('id', $item['id'])->update(['display_order' => $item['display_order']]);
            }
            $this->clearCache(['authors_all', 'authors_top_3', 'authors_top_7']);
            return response()->json(['message' => 'Order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
