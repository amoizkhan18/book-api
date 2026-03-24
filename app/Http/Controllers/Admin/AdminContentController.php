<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrendingBook;
use App\Models\PopularBook;
use App\Models\TrendingAudiobook;
use App\Models\PopularAudiobook;
use App\Models\Author;
use App\Models\AudiobookAuthor;

class AdminContentController extends Controller
{
    private function getModel(string $type)
    {
        return match($type) {
            'trending'           => new TrendingBook(),
            'popular'            => new PopularBook(),
            'trending-audiobooks' => new TrendingAudiobook(),
            'popular-audiobooks' => new PopularAudiobook(),
            default              => null,
        };
    }

    private function getRedirectRoute(string $type): string
    {
        return match($type) {
            'trending'            => 'admin.trending',
            'popular'             => 'admin.popular',
            'trending-audiobooks' => 'admin.trending.audiobooks',
            'popular-audiobooks'  => 'admin.popular.audiobooks',
            default               => 'admin.trending',
        };
    }

    // ✅ Store new item
    public function store(Request $request)
    {
        $type  = $request->type;
        $model = $this->getModel($type);

        if (!$model) return back()->with('error', 'Invalid type');

        try {
            $data = [
                'title'     => $request->title,
                'author'    => $request->author,
                'bookdesc'  => $request->bookdesc ?? '',
                'imageurl'  => $request->imageurl ?? '',
                'bookurl'   => $request->bookurl ?? '',
                'genres'    => $request->genres ? array_filter(array_map('trim', explode(',', $request->genres))) : [],
                'order'     => $request->order ?? 99,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ];

            if (in_array($type, ['trending-audiobooks', 'popular-audiobooks'])) {
                $data['audiolinks'] = $request->audiolinks ? array_filter(array_map('trim', explode(',', $request->audiolinks))) : [];
                unset($data['bookurl']);
            }

            $model->create($data);

            // Clear cache
            \Illuminate\Support\Facades\Cache::forget($type === 'trending' ? 'trending_books' :
                ($type === 'popular' ? 'popular_books' :
                ($type === 'trending-audiobooks' ? 'trending_audiobooks' : 'popular_audiobooks')));

            return redirect()->route($this->getRedirectRoute($type))->with('success', 'Item added successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Update item
    public function update(Request $request, $id)
    {
        $type  = $request->type;
        $model = $this->getModel($type);

        if (!$model) return back()->with('error', 'Invalid type');

        try {
            $item = $model->find($id);
            if (!$item) return back()->with('error', 'Item not found');

            $data = [
                'title'     => $request->title,
                'author'    => $request->author,
                'bookdesc'  => $request->bookdesc ?? '',
                'imageurl'  => $request->imageurl ?? '',
                'bookurl'   => $request->bookurl ?? '',
                'genres'    => $request->genres ? array_filter(array_map('trim', explode(',', $request->genres))) : [],
                'order'     => $request->order ?? $item->order,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ];

            if (in_array($type, ['trending-audiobooks', 'popular-audiobooks'])) {
                $data['audiolinks'] = $request->audiolinks ? array_filter(array_map('trim', explode(',', $request->audiolinks))) : [];
                unset($data['bookurl']);
            }

            $item->update($data);

            \Illuminate\Support\Facades\Cache::forget($type === 'trending' ? 'trending_books' :
                ($type === 'popular' ? 'popular_books' :
                ($type === 'trending-audiobooks' ? 'trending_audiobooks' : 'popular_audiobooks')));

            return redirect()->route($this->getRedirectRoute($type))->with('success', 'Item updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Delete item
    public function delete(Request $request, $id)
    {
        $type  = $request->type;
        $model = $this->getModel($type);

        if (!$model) return back()->with('error', 'Invalid type');

        try {
            $item = $model->find($id);
            if (!$item) return back()->with('error', 'Item not found');
            $item->delete();

            \Illuminate\Support\Facades\Cache::forget($type === 'trending' ? 'trending_books' :
                ($type === 'popular' ? 'popular_books' :
                ($type === 'trending-audiobooks' ? 'trending_audiobooks' : 'popular_audiobooks')));

            return redirect()->route($this->getRedirectRoute($type))->with('success', 'Item deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Toggle active
    public function toggle(Request $request, $id)
    {
        $type  = $request->type;
        $model = $this->getModel($type);

        if (!$model) return back()->with('error', 'Invalid type');

        try {
            $item = $model->find($id);
            if (!$item) return back()->with('error', 'Item not found');
            $item->is_active = !$item->is_active;
            $item->save();

            \Illuminate\Support\Facades\Cache::forget($type === 'trending' ? 'trending_books' :
                ($type === 'popular' ? 'popular_books' :
                ($type === 'trending-audiobooks' ? 'trending_audiobooks' : 'popular_audiobooks')));

            return redirect()->route($this->getRedirectRoute($type))->with('success', 'Status updated!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Reorder
    public function reorder(Request $request)
    {
        $type  = $request->type;
        $model = $this->getModel($type);

        if (!$model) return response()->json(['error' => 'Invalid type'], 400);

        try {
            foreach ($request->items as $item) {
                $model->where('id', $item['id'])->update(['order' => $item['order']]);
            }

            \Illuminate\Support\Facades\Cache::forget($type === 'trending' ? 'trending_books' :
                ($type === 'popular' ? 'popular_books' :
                ($type === 'trending-audiobooks' ? 'trending_audiobooks' : 'popular_audiobooks')));

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // ✅ Store Author
    public function storeAuthor(Request $request)
    {
        $type = $request->type;
        $model = $type === 'audiobook-authors' ? new AudiobookAuthor() : new Author();

        try {
            $model->create([
                'name'          => $request->name,
                'db_name'       => $request->db_name,
                'image'         => $request->image ?? '',
                'description'   => $request->description ?? '',
                'color'         => $request->color ?? '#1A1A1A',
                'display_order' => $request->display_order ?? 99,
                'is_active'     => $request->has('is_active') ? 1 : 0,
            ]);

            $this->clearAuthorCache($type);
            $route = $type === 'audiobook-authors' ? 'admin.audiobook.authors' : 'admin.authors';
            return redirect()->route($route)->with('success', 'Author added successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Update Author
    public function updateAuthor(Request $request, $id)
    {
        $type   = $request->type;
        $model  = $type === 'audiobook-authors' ? AudiobookAuthor::find($id) : Author::find($id);

        if (!$model) return back()->with('error', 'Author not found');

        try {
            $model->update([
                'name'          => $request->name,
                'db_name'       => $request->db_name,
                'image'         => $request->image ?? '',
                'description'   => $request->description ?? '',
                'color'         => $request->color ?? '#1A1A1A',
                'display_order' => $request->display_order ?? $model->display_order,
                'is_active'     => $request->has('is_active') ? 1 : 0,
            ]);

            $this->clearAuthorCache($type);
            $route = $type === 'audiobook-authors' ? 'admin.audiobook.authors' : 'admin.authors';
            return redirect()->route($route)->with('success', 'Author updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Delete Author
    public function deleteAuthor(Request $request, $id)
    {
        $type  = $request->type;
        $model = $type === 'audiobook-authors' ? AudiobookAuthor::find($id) : Author::find($id);

        if (!$model) return back()->with('error', 'Author not found');

        try {
            $model->delete();
            $this->clearAuthorCache($type);
            $route = $type === 'audiobook-authors' ? 'admin.audiobook.authors' : 'admin.authors';
            return redirect()->route($route)->with('success', 'Author deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ✅ Toggle Author
    public function toggleAuthor(Request $request, $id)
    {
        $type  = $request->type;
        $model = $type === 'audiobook-authors' ? AudiobookAuthor::find($id) : Author::find($id);

        if (!$model) return back()->with('error', 'Author not found');

        try {
            $model->is_active = !$model->is_active;
            $model->save();
            $this->clearAuthorCache($type);
            $route = $type === 'audiobook-authors' ? 'admin.audiobook.authors' : 'admin.authors';
            return redirect()->route($route)->with('success', 'Author status updated!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    private function clearAuthorCache(string $type)
    {
        if ($type === 'audiobook-authors') {
            \Illuminate\Support\Facades\Cache::forget('audiobook_authors_all');
            \Illuminate\Support\Facades\Cache::forget('audiobook_authors_top_3');
            \Illuminate\Support\Facades\Cache::forget('audiobook_authors_top_7');
        } else {
            \Illuminate\Support\Facades\Cache::forget('authors_all');
            \Illuminate\Support\Facades\Cache::forget('authors_top_3');
            \Illuminate\Support\Facades\Cache::forget('authors_top_7');
        }
    }
}
