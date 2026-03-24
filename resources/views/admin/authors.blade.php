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

{{-- Add Form --}}
<div class="card mb-4 d-none" id="addForm">
    <div class="card-header">➕ Add New Author</div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.authors.store') }}">
            @csrf
            <input type="hidden" name="type" value="{{ $type }}">
            <div class="row g-3">
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">Display Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="William Shakespeare" required>
                </div>
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">DB Name * (must match books table)</label>
                    <input type="text" name="db_name" class="form-control" placeholder="Shakespeare, William, 1564-1616" required>
                </div>
                <div class="col-md-6">
                    <label style="color:#888;font-size:13px">Image URL</label>
                    <input type="text" name="image" class="form-control" placeholder="https://...">
                </div>
                <div class="col-md-3">
                    <label style="color:#888;font-size:13px">Color</label>
                    <input type="text" name="color" class="form-control" value="#1A1A1A" placeholder="#1A1A1A">
                </div>
                <div class="col-md-3">
                    <label style="color:#888;font-size:13px">Order</label>
                    <input type="number" name="display_order" class="form-control" value="99">
                </div>
                <div class="col-12">
                    <label style="color:#888;font-size:13px">Description</label>
                    <textarea name="description" class="form-control" rows="2"></textarea>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="addActive" checked>
                        <label class="form-check-label" for="addActive" style="color:#888">Active</label>
                    </div>
                </div>
            </div>
            <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">Save</button>
                <button type="button" class="btn" style="background:#1a1a1a;color:#888;border:1px solid #333" onclick="toggleAddForm()">Cancel</button>
            </div>
        </form>
    </div>
</div>

{{-- Authors Table --}}
<div class="card">
    <div class="card-header">{{ $title }} — {{ $authors->count() }} total</div>
    <div class="card-body p-0">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>DB Name</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($authors as $author)
                <tr>
                    <td>
                        <img src="{{ $author->image }}" style="width:40px;height:40px;border-radius:50%;object-fit:cover"
                            onerror="this.src='https://via.placeholder.com/40/1a1a1a/888?text=?'">
                    </td>
                    <td>{{ $author->name }}</td>
                    <td style="font-size:12px;color:#888;font-family:monospace">{{ Str::limit($author->db_name, 30) }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.authors.toggle', $author->id) }}" style="display:inline">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <button type="submit" class="btn btn-sm" style="padding:3px 10px;font-size:12px;
                                background:{{ $author->is_active ? '#30d158' : '#333' }};
                                color:{{ $author->is_active ? '#000' : '#888' }};border:none;border-radius:20px">
                                {{ $author->is_active ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td style="color:#888">{{ $author->display_order }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm" style="background:#1a1a1a;color:#fff;border:1px solid #333;font-size:12px"
                                onclick="openEdit({{ $author->id }}, '{{ addslashes($author->name) }}', '{{ addslashes($author->db_name) }}', '{{ addslashes($author->image ?? '') }}', '{{ addslashes($author->description ?? '') }}', '{{ addslashes($author->color ?? '#1A1A1A') }}', {{ $author->display_order }}, {{ $author->is_active ? 'true' : 'false' }})">
                                ✏️ Edit
                            </button>
                            <form method="POST" action="{{ route('admin.authors.delete', $author->id) }}"
                                onsubmit="return confirm('Delete {{ addslashes($author->name) }}?')">
                                @csrf
                                <input type="hidden" name="type" value="{{ $type }}">
                                <button type="submit" class="btn btn-sm btn-danger" style="font-size:12px">🗑️</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center" style="color:#888;padding:40px">No authors found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background:#111;border:1px solid #222">
            <div class="modal-header" style="border-color:#222">
                <h5 class="modal-title text-white">✏️ Edit Author</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" id="editForm">
                @csrf
                <input type="hidden" name="type" value="{{ $type }}">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label style="color:#888;font-size:13px">Display Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label style="color:#888;font-size:13px">DB Name</label>
                            <input type="text" name="db_name" id="edit_db_name" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label style="color:#888;font-size:13px">Image URL</label>
                            <input type="text" name="image" id="edit_image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label style="color:#888;font-size:13px">Color</label>
                            <input type="text" name="color" id="edit_color" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label style="color:#888;font-size:13px">Order</label>
                            <input type="number" name="display_order" id="edit_order" class="form-control">
                        </div>
                        <div class="col-12">
                            <label style="color:#888;font-size:13px">Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" name="is_active" class="form-check-input" id="edit_active">
                                <label class="form-check-label" for="edit_active" style="color:#888">Active</label>
                            </div>
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
    document.getElementById('addForm').classList.toggle('d-none');
}

function openEdit(id, name, db_name, image, description, color, order, isActive) {
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_db_name').value = db_name;
    document.getElementById('edit_image').value = image;
    document.getElementById('edit_description').value = description;
    document.getElementById('edit_color').value = color;
    document.getElementById('edit_order').value = order;
    document.getElementById('edit_active').checked = isActive;
    document.getElementById('editForm').action = '/admin/authors/update/' + id;
    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>
@endsection
