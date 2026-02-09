<?php

namespace App\Http\Controllers;

use App\Models\TrendingBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrendingBookController extends Controller
{
    /**
     * Get all trending books or a specific one by ID
     * GET /api/trending/{id?}
     */
    public function show($id = null)
    {
        try {
            if ($id) {
                // Get single trending book
                $book = TrendingBook::active()->find($id);
                
                if (!$book) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Trending book not found'
                    ], 404);
                }
                
                return response()->json($book);
            }
            
            // Get all active trending books ordered
            $books = TrendingBook::active()->ordered()->get();
            
            return response()->json($books);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error fetching trending books',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a new trending book
     * POST /api/trending/store
     */
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

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $book = TrendingBook::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Trending book created successfully',
                'data' => $book
            ], 201);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating trending book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update a trending book
     * POST /api/trending/update/{id}
     */
    public function update(Request $request, $id)
    {
        $book = TrendingBook::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Trending book not found'
            ], 404);
        }

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

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $book->update($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Trending book updated successfully',
                'data' => $book
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating trending book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Delete a trending book
     * POST /api/trending/delete/{id}
     */
    public function destroy($id)
    {
        $book = TrendingBook::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Trending book not found'
            ], 404);
        }

        try {
            $book->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Trending book deleted successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting trending book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Toggle active status
     * POST /api/trending/toggle/{id}
     */
    public function toggleActive($id)
    {
        $book = TrendingBook::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Trending book not found'
            ], 404);
        }

        try {
            $book->is_active = !$book->is_active;
            $book->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Book status updated successfully',
                'data' => $book
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error toggling book status',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update order of multiple books
     * POST /api/trending/reorder
     */
    public function updateOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'books' => 'required|array',
            'books.*.id' => 'required|exists:trending_books,id',
            'books.*.order' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            foreach ($request->books as $bookData) {
                TrendingBook::where('id', $bookData['id'])
                    ->update(['order' => $bookData['order']]);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Book order updated successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating book order',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}