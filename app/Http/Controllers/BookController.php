<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\NewBook;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(Request $request, $id = null)
    {
        if (!$id) {
            $books = Book::all();
            return response()->json($books);
        }

        $book = Book::find($id);
        if (!$book) return response()->json(['message' => 'Book not found'], 404);

        return response()->json([
            'id'       => $book->id,
            'title'    => $book->title,
            'author'   => $book->author,
            'bookdesc' => $book->bookdesc,
            'imageurl' => $book->imageurl,
            'bookurl'  => $book->bookurl,
            'downurl'  => $book->downurl,
            'genres'   => $book->getRawOriginal('genres'),
        ]);
    }

    public function showgenres(Request $request, $genres = null)
    {
        if (!$genres) {
            return response()->json(Book::all());
        }

        // ✅ Cache per genre — key like "books_genre_romance"
        $cacheKey = 'books_genre_' . strtolower($genres);
        $books = $this->cachedResponse($cacheKey, function () use ($genres) {
            return Book::where('Genres', 'LIKE', '%' . $genres . '%')->get();
        });

        if ($books->isEmpty()) return response()->json(['message' => 'Books not found'], 404);
        return response()->json($books);
    }

    public function searchBooks($search = null)
    {
        if (!$search) return response()->json(['message' => 'No search query provided']);

        $bookResults = Book::where('title', 'like', '%' . $search . '%')->get();
        $newBookResults = NewBook::where('title', 'like', '%' . $search . '%')->get();
        $mergedResults = $bookResults->merge($newBookResults);

        if ($mergedResults->isEmpty()) return response()->json(['message' => 'No results found for "' . $search . '"']);
        return response()->json($mergedResults);
    }
}
