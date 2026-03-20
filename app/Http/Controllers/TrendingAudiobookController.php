<?php

namespace App\Http\Controllers;

use App\Models\TrendingAudiobook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrendingAudiobookController extends Controller
{
    public function show($id = null)
    {
        try {
            if ($id) {
                $audiobook = TrendingAudiobook::active()->find($id);
                if (!$audiobook) return response()->json(['success' => false, 'message' => 'Trending audiobook not found'], 404);
                return response()->json($audiobook);
            }

            $audiobooks = $this->cachedResponse('trending_audiobooks', function () {
                return TrendingAudiobook::active()->ordered()->get();
            });

            return response()->json($audiobooks);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error fetching trending audiobooks', 'error' => $e->getMessage()], 500);
        }
    }

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

        if ($validator->fails()) return response()->json(['success' => false, 'errors' => $validator->errors()], 422);

        try {
            $audiobook = TrendingAudiobook::create($request->all());
            $this->clearCache(['trending_audiobooks']);
            return response()->json(['success' => true, 'message' => 'Trending audiobook created successfully', 'data' => $audiobook], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error creating trending audiobook', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $audiobook = TrendingAudiobook::find($id);
        if (!$audiobook) return response()->json(['success' => false, 'message' => 'Trending audiobook not found'], 404);

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

        if ($validator->fails()) return response()->json(['success' => false, 'errors' => $validator->errors()], 422);

        try {
            $audiobook->update($request->all());
            $this->clearCache(['trending_audiobooks']);
            return response()->json(['success' => true, 'message' => 'Trending audiobook updated successfully', 'data' => $audiobook]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating trending audiobook', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $audiobook = TrendingAudiobook::find($id);
        if (!$audiobook) return response()->json(['success' => false, 'message' => 'Trending audiobook not found'], 404);

        try {
            $audiobook->delete();
            $this->clearCache(['trending_audiobooks']);
            return response()->json(['success' => true, 'message' => 'Trending audiobook deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error deleting trending audiobook', 'error' => $e->getMessage()], 500);
        }
    }

    public function toggleActive($id)
    {
        $audiobook = TrendingAudiobook::find($id);
        if (!$audiobook) return response()->json(['success' => false, 'message' => 'Trending audiobook not found'], 404);

        try {
            $audiobook->is_active = !$audiobook->is_active;
            $audiobook->save();
            $this->clearCache(['trending_audiobooks']);
            return response()->json(['success' => true, 'message' => 'Audiobook status updated successfully', 'data' => $audiobook]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error toggling audiobook status', 'error' => $e->getMessage()], 500);
        }
    }

    public function updateOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'audiobooks' => 'required|array',
            'audiobooks.*.id' => 'required|exists:trending_audiobooks,id',
            'audiobooks.*.order' => 'required|integer',
        ]);

        if ($validator->fails()) return response()->json(['success' => false, 'errors' => $validator->errors()], 422);

        try {
            foreach ($request->audiobooks as $audiobookData) {
                TrendingAudiobook::where('id', $audiobookData['id'])->update(['order' => $audiobookData['order']]);
            }
            $this->clearCache(['trending_audiobooks']);
            return response()->json(['success' => true, 'message' => 'Audiobook order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating audiobook order', 'error' => $e->getMessage()], 500);
        }
    }
}
