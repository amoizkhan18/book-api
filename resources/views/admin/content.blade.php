@extends('admin.layout')
@section('title', $title)
@section('content')

<div class="d-flex justify-content-between align-items-center mb-2">
    <div>
        <div class="page-title">{{ $title }}</div>
        <div class="page-subtitle">Manage {{ strtolower($title) }} shown in the app</div>
    </div>
    <button class="btn btn-primary px-4" onclick="toggleAddForm()">+ Add New</button>
</div>

{{-- ✅ Add New Form --}}
<div class="card mb-4 d-none" id="addForm">
    <div class="card-header">➕ Add New Item</div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.content.store') }}">
            @csrf
            <input type="hidden" name="type" value="{{ $type }}">
            <div class="row g-3">
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">Title *</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">Author *</label>
                    <input type="text" name="author" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">Image URL</label>
                    <input type="text" name="imageurl" class="form-control" placeholder="https://...">
                </div>
                <div class="col-md-6">
                    @if(in_array($type, ['trending-audiobooks', 'popular-audiobooks']))
                        <label style="color:#888;font-size:13px">Audio Links (comma separated)</label>
                        <input type="text" name="audiolinks" class="form-control" placeholder="https://audio1.mp3, https://audio2.mp3">
                    @else
                        <label style="color:#888;font-size:13px">Book URL</label>
                        <input type="text" name="bookurl" class="form-control" placeholder="https://...">
                    @endif
                </div>
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">Genres (comma separated)</label>
                    <input type="text" name="genres" class="form-control" placeholder="Romance, Fantasy, Mystery">
                </div>
                <div class="col-md-3">
                    <label style="color:#888;font-size:13px">Order</label>
                    <input type="number" name="order" class="form-control" value="99">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="addActive" checked>
                        <label class="form-check-label" for="addActive" style="color:#888">Active</label>
                    </div>
                </div>
                <div class="col-12">
                    <label style="color:#888;font-size:13px">Description</label>
                    <textarea name="bookdesc" class="form-control" rows="2"></textarea>
                </div>
            </div>
            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">Save</button>
                <button type="button" class="btn" style="background:#1a1a1a;color:#888;border:1px solid #333" onclick="toggleAddForm()">Cancel</button>
            </div>
        </form>
    </div>
</div>

{{-- ✅ Items Table --}}
<div class="card">
    <div class="card-header">{{ $title }} — {{ $items->count() }} items</div>
    <div class="card-body p-0">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                <tr id="row-{{ $item->id }}">
                    <td>
                        <img src="{{ $item->imageurl }}" style="width:40px;height:55px;border-radius:6px;object-fit:cover"
                            onerror="this.src='https://via.placeholder.com/40x55/1a1a1a/888?text=?'">
                    </td>
                    <td style="font-size:13px">{{ Str::limit($item->title, 35) }}</td>
                    <td style="font-size:13px;color:#888">{{ Str::limit($item->author, 25) }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.content.toggle', $item->id) }}" style="display:inline">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <button type="submit" class="btn btn-sm" style="padding:3px 10px;font-size:12px;
                                background:{{ $item->is_active ? '#30d158' : '#333' }};
                                color:{{ $item->is_active ? '#000' : '#888' }};border:none;border-radius:20px">
                                {{ $item->is_active ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td style="color:#888">{{ $item->order }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm" style="background:#1a1a1a;color:#fff;border:1px solid #333;font-size:12px"
                                onclick="openEdit({{ $item->id }}, '{{ addslashes($item->title) }}', '{{ addslashes($item->author) }}', '{{ addslashes($item->imageurl) }}', '{{ addslashes($item->bookurl ?? '') }}', '{{ addslashes(implode(', ', is_array($item->genres) ? $item->genres : json_decode($item->genres ?? '[]', true) ?? [])) }}' , '{{ $item->order }}', {{ $item->is_active ? 'true' : 'false' }}, '{{ addslashes($item->bookdesc ?? '') }}', '{{ addslashes(is_array($item->audiolinks ?? null) ? implode(', ', $item->audiolinks) : '') }}')">
                                ✏️ Edit
                            </button>
                            <form method="POST" action="{{ route('admin.content.delete', $item->id) }}"
                                onsubmit="return confirm('Delete {{ addslashes($item->title) }}?')">
                                @csrf
                                <input type="hidden" name="type" value="{{ $type }}">
                                <button type="submit" class="btn btn-sm btn-danger" style="font-size:12px">🗑️</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center" style="color:#888;padding:40px">No items found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- ✅ Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background:#111;border:1px solid #222">
            <div class="modal-header" style="border-color:#222">
                <h5 class="modal-title text-white">✏️ Edit Item</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" id="editForm">
                @csrf
                <input type="hidden" name="type" value="{{ $type }}">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label style="color:#888;font-size:13px">Title</label>
                            <input type="text" name="title" id="edit_title" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label style="color:#888;font-size:13px">Author</label>
                            <input type="text" name="author" id="edit_author" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label style="color:#888;font-size:13px">Image URL</label>
                            <input type="text" name="imageurl" id="edit_imageurl" class="form-control">
                        </div>
                        <div class="col-md-6">
                            @if(in_array($type, ['trending-audiobooks', 'popular-audiobooks']))
                                <label style="color:#888;font-size:13px">Audio Links (comma separated)</label>
                                <input type="text" name="audiolinks" id="edit_audiolinks" class="form-control">
                            @else
                                <label style="color:#888;font-size:13px">Book URL</label>
                                <input type="text" name="bookurl" id="edit_bookurl" class="form-control">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label style="color:#888;font-size:13px">Genres (comma separated)</label>
                            <input type="text" name="genres" id="edit_genres" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label style="color:#888;font-size:13px">Order</label>
                            <input type="number" name="order" id="edit_order" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <div class="form-check">
                                <input type="checkbox" name="is_active" class="form-check-input" id="edit_active">
                                <label class="form-check-label" for="edit_active" style="color:#888">Active</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label style="color:#888;font-size:13px">Description</label>
                            <textarea name="bookdesc" id="edit_bookdesc" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-color:#222">
                    <button type="button" class="btn" style="background:#1a1a1a;color:#888;border:1px solid #333" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
function toggleAddForm() {
    const form = document.getElementById('addForm');
    form.classList.toggle('d-none');
}

function openEdit(id, title, author, imageurl, bookurl, genres, order, isActive, bookdesc, audiolinks) {
    document.getElementById('edit_title').value = title;
    document.getElementById('edit_author').value = author;
    document.getElementById('edit_imageurl').value = imageurl;
    document.getElementById('edit_order').value = order;
    document.getElementById('edit_active').checked = isActive;
    document.getElementById('edit_bookdesc').value = bookdesc;
    document.getElementById('edit_genres').value = genres;

    const bookurlField = document.getElementById('edit_bookurl');
    const audiolinksField = document.getElementById('edit_audiolinks');
    if (bookurlField) bookurlField.value = bookurl;
    if (audiolinksField) audiolinksField.value = audiolinks;

    document.getElementById('editForm').action = '/admin/content/update/' + id;
    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>
@endsection
