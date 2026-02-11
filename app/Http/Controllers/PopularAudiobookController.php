<?php

namespace App\Http\Controllers;

use App\Models\PopularAudiobook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopularAudiobookController extends Controller
{
    /**
     * Get all popular audiobooks or a specific one by ID
     * GET /api/popular-audiobooks/{id?}
     */
    public function show($id = null)
    {
        try {
            if ($id) {
                // Get single popular audiobook
                $audiobook = PopularAudiobook::active()->find($id);
                
                if (!$audiobook) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Popular audiobook not found'
                    ], 404);
                }
                
                return response()->json($audiobook);
            }
            
            // Get all active popular audiobooks ordered
            $audiobooks = PopularAudiobook::active()->ordered()->get();
            
            return response()->json($audiobooks);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error fetching popular audiobooks',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a new popular audiobook
     * POST /api/popular-audiobooks/store
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'bookdesc' => 'required|string',
            'imageurl' => 'required|url',
            'audiolinks' => 'required|array',
            'audiolinks.*' => 'url',
            'genres' => 'required|array',
            'genres.*' => 'string',
            'color' => 'nullable|string|regex:/^#[0-9A-Fa-f]{6}$/',
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
            $audiobook = PopularAudiobook::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Popular audiobook created successfully',
                'data' => $audiobook
            ], 201);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating popular audiobook',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update a popular audiobook
     * POST /api/popular-audiobooks/update/{id}
     */
    public function update(Request $request, $id)
    {
        $audiobook = PopularAudiobook::find($id);

        if (!$audiobook) {
            return response()->json([
                'success' => false,
                'message' => 'Popular audiobook not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'bookdesc' => 'sometimes|required|string',
            'imageurl' => 'sometimes|required|url',
            'audiolinks' => 'sometimes|required|array',
            'audiolinks.*' => 'url',
            'genres' => 'sometimes|required|array',
            'genres.*' => 'string',
            'color' => 'nullable|string|regex:/^#[0-9A-Fa-f]{6}$/',
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
            $audiobook->update($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Popular audiobook updated successfully',
                'data' => $audiobook
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating popular audiobook',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Delete a popular audiobook
     * POST /api/popular-audiobooks/delete/{id}
     */
    public function destroy($id)
    {
        $audiobook = PopularAudiobook::find($id);

        if (!$audiobook) {
            return response()->json([
                'success' => false,
                'message' => 'Popular audiobook not found'
            ], 404);
        }

        try {
            $audiobook->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Popular audiobook deleted successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting popular audiobook',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Toggle active status
     * POST /api/popular-audiobooks/toggle/{id}
     */
    public function toggleActive($id)
    {
        $audiobook = PopularAudiobook::find($id);

        if (!$audiobook) {
            return response()->json([
                'success' => false,
                'message' => 'Popular audiobook not found'
            ], 404);
        }

        try {
            $audiobook->is_active = !$audiobook->is_active;
            $audiobook->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Audiobook status updated successfully',
                'data' => $audiobook
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error toggling audiobook status',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update order of multiple audiobooks
     * POST /api/popular-audiobooks/reorder
     */
    public function updateOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'audiobooks' => 'required|array',
            'audiobooks.*.id' => 'required|exists:popular_audiobooks,id',
            'audiobooks.*.order' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            foreach ($request->audiobooks as $audiobookData) {
                PopularAudiobook::where('id', $audiobookData['id'])
                    ->update(['order' => $audiobookData['order']]);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Audiobook order updated successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating audiobook order',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
