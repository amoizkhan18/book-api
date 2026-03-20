<?php

namespace App\Http\Controllers;

use App\Models\PopularBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopularBookController extends Controller
{
    public function show($id = null)
    {
        try {
            if ($id) {
                $book = PopularBook::active()->find($id);
                if (!$book) return response()->json(['success' => false, 'message' => 'Popular book not found'], 404);
                return response()->json($book);
            }

            $books = $this->cachedResponse('popular_books', function () {
                return PopularBook::active()->ordered()->get();
            });

            return response()->json($books);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error fetching popular books', 'error' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'bookdesc' => 'required|string',
            'imageurl' => 'required|url',
            'bookurl' => 'required|url',
            'genres' => 'required|array',
            'genres.*' => 'string',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) return response()->json(['success' => false, 'errors' => $validator->errors()], 422);

        try {
            $book = PopularBook::create($request->all());
            $this->clearCache(['popular_books']);
            return response()->json(['success' => true, 'message' => 'Popular book created successfully', 'data' => $book], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error creating popular book', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $book = PopularBook::find($id);
        if (!$book) return response()->json(['success' => false, 'message' => 'Popular book not found'], 404);

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'bookdesc' => 'sometimes|required|string',
            'imageurl' => 'sometimes|required|url',
            'bookurl' => 'sometimes|required|url',
            'genres' => 'sometimes|required|array',
            'genres.*' => 'string',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) return response()->json(['success' => false, 'errors' => $validator->errors()], 422);

        try {
            $book->update($request->all());
            $this->clearCache(['popular_books']);
            return response()->json(['success' => true, 'message' => 'Popular book updated successfully', 'data' => $book]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating popular book', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $book = PopularBook::find($id);
        if (!$book) return response()->json(['success' => false, 'message' => 'Popular book not found'], 404);

        try {
            $book->delete();
            $this->clearCache(['popular_books']);
            return response()->json(['success' => true, 'message' => 'Popular book deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error deleting popular book', 'error' => $e->getMessage()], 500);
        }
    }

    public function toggleActive($id)
    {
        $book = PopularBook::find($id);
        if (!$book) return response()->json(['success' => false, 'message' => 'Popular book not found'], 404);

        try {
            $book->is_active = !$book->is_active;
            $book->save();
            $this->clearCache(['popular_books']);
            return response()->json(['success' => true, 'message' => 'Book status updated successfully', 'data' => $book]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error toggling book status', 'error' => $e->getMessage()], 500);
        }
    }

    public function updateOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'books' => 'required|array',
            'books.*.id' => 'required|exists:popular_books,id',
            'books.*.order' => 'required|integer',
        ]);

        if ($validator->fails()) return response()->json(['success' => false, 'errors' => $validator->errors()], 422);

        try {
            foreach ($request->books as $bookData) {
                PopularBook::where('id', $bookData['id'])->update(['order' => $bookData['order']]);
            }
            $this->clearCache(['popular_books']);
            return response()->json(['success' => true, 'message' => 'Book order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating book order', 'error' => $e->getMessage()], 500);
        }
    }
}
