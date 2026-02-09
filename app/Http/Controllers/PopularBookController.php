<?php

namespace App\Http\Controllers;

use App\Models\PopularBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopularBookController extends Controller
{
    /**
     * Get all popular books or a specific one by ID
     * GET /api/popular/{id?}
     */
    public function show($id = null)
    {
        try {
            if ($id) {
                // Get single popular book
                $book = PopularBook::active()->find($id);
                
                if (!$book) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Popular book not found'
                    ], 404);
                }
                
                return response()->json($book);
            }
            
            // Get all active popular books ordered
            $books = PopularBook::active()->ordered()->get();
            
            return response()->json($books);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error fetching popular books',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a new popular book
     * POST /api/popular/store
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
            $book = PopularBook::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Popular book created successfully',
                'data' => $book
            ], 201);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating popular book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update a popular book
     * POST /api/popular/update/{id}
     */
    public function update(Request $request, $id)
    {
        $book = PopularBook::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Popular book not found'
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
                'message' => 'Popular book updated successfully',
                'data' => $book
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating popular book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Delete a popular book
     * POST /api/popular/delete/{id}
     */
    public function destroy($id)
    {
        $book = PopularBook::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Popular book not found'
            ], 404);
        }

        try {
            $book->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Popular book deleted successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting popular book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Toggle active status
     * POST /api/popular/toggle/{id}
     */
    public function toggleActive($id)
    {
        $book = PopularBook::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Popular book not found'
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
     * POST /api/popular/reorder
     */
    public function updateOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'books' => 'required|array',
            'books.*.id' => 'required|exists:popular_books,id',
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
                PopularBook::where('id', $bookData['id'])
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
