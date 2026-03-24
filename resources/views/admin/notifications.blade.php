@extends('admin.layout')
@section('title', 'Send Notifications')
@section('content')

<div class="page-title">Send Notifications</div>
<div class="page-subtitle">Send push notifications to your Librora users</div>

<div class="row g-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">📢 Compose Notification</div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('admin.notifications.send') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" style="color:#888;font-size:13px">Notification Type</label>
                        <select name="notification_type" class="form-select" id="notifType" onchange="showFields(this.value)">
                            <option value="all">📢 Send to All Users</option>
                            <option value="active">✅ Send to Active Users (7 days)</option>
                            <option value="device">🎯 Send to Specific Device</option>
                            <option value="segmented">👥 Segmented Notification</option>
                            <option value="daily_pick">📚 Set Daily Pick</option>
                            <option value="new_content">🆕 New Content Notification</option>
                        </select>
                    </div>

                    {{-- FCM Token field --}}
                    <div class="mb-3 d-none" id="field_fcm">
                        <label class="form-label" style="color:#888;font-size:13px">FCM Token</label>
                        <select name="fcm_token" class="form-select">
                            <option value="">-- Select Device --</option>
                            @foreach($devices as $device)
                                <option value="{{ $device->fcm_token }}">{{ $device->device_model }} — {{ $device->last_active_at ? \Carbon\Carbon::parse($device->last_active_at)->diffForHumans() : 'Unknown' }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Segment field --}}
                    <div class="mb-3 d-none" id="field_segment">
                        <label class="form-label" style="color:#888;font-size:13px">Segment</label>
                        <select name="segment" class="form-select">
                            <option value="all_users">All Users</option>
                            <option value="active_7_days">Active Users (7 days)</option>
                            <option value="audiobook_users">Audiobook Users</option>
                            <option value="book_users">Book Users</option>
                            <option value="inactive_users">Inactive Users</option>
                        </select>
                    </div>

                    {{-- Genre field --}}
                    <div class="mb-3 d-none" id="field_genre">
                        <label class="form-label" style="color:#888;font-size:13px">Genre (optional — for genre-based targeting)</label>
                        <select name="genre" class="form-select">
                            <option value="">-- No Genre Filter --</option>
                            <option>Romance</option>
                            <option>Fantasy</option>
                            <option>Science fiction</option>
                            <option>Mystery</option>
                            <option>Thrillers</option>
                            <option>History</option>
                            <option>Philosophy</option>
                            <option>Biography</option>
                            <option>Children</option>
                            <option>Poetry</option>
                            <option>Short stories</option>
                            <option>Fairy tales</option>
                            <option>Dramas & plays</option>
                            <option>Social Sciences</option>
                        </select>
                    </div>

                    {{-- Book Type --}}
                    <div class="mb-3 d-none" id="field_book_type">
                        <label class="form-label" style="color:#888;font-size:13px">Content Type</label>
                        <select name="book_type" class="form-select">
                            <option value="book">📚 Book</option>
                            <option value="audio">🎧 Audiobook</option>
                        </select>
                    </div>

                    {{-- Book ID --}}
                    <div class="mb-3 d-none" id="field_book_id">
                        <label class="form-label" style="color:#888;font-size:13px">Book ID</label>
                        <input type="number" name="book_id" class="form-control" placeholder="Enter book ID">
                    </div>

                    {{-- Title --}}
                    <div class="mb-3" id="field_title">
                        <label class="form-label" style="color:#888;font-size:13px">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Notification title">
                    </div>

                    {{-- Message --}}
                    <div class="mb-3" id="field_message">
                        <label class="form-label" style="color:#888;font-size:13px">Message</label>
                        <textarea name="message" class="form-control" rows="3" placeholder="Notification message"></textarea>
                    </div>

                    {{-- Image --}}
                    <div class="mb-4" id="field_image">
                        <label class="form-label" style="color:#888;font-size:13px">Image URL (optional)</label>
                        <input type="text" name="image" class="form-control" placeholder="https://...">
                    </div>

                    <button type="submit" class="btn btn-primary px-4">Send Notification 🚀</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">💡 Quick Reference</div>
            <div class="card-body p-3" style="font-size:13px;color:#888;line-height:1.8">
                <strong style="color:#fff">All Users</strong><br>
                Sends to every installed device<br><br>
                <strong style="color:#fff">Active Users</strong><br>
                Only users active in last 7 days<br><br>
                <strong style="color:#fff">Specific Device</strong><br>
                Target one user by their device<br><br>
                <strong style="color:#fff">Segmented</strong><br>
                Target by genre, book type, or activity<br><br>
                <strong style="color:#fff">Daily Pick</strong><br>
                Sets tomorrow's featured book<br><br>
                <strong style="color:#fff">New Content</strong><br>
                Notifies all users of new book/audiobook
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
function showFields(type) {
    // Hide all optional fields
    document.getElementById('field_fcm').classList.add('d-none');
    document.getElementById('field_segment').classList.add('d-none');
    document.getElementById('field_genre').classList.add('d-none');
    document.getElementById('field_book_type').classList.add('d-none');
    document.getElementById('field_book_id').classList.add('d-none');
    document.getElementById('field_title').classList.remove('d-none');
    document.getElementById('field_message').classList.remove('d-none');
    document.getElementById('field_image').classList.remove('d-none');

    if (type === 'device') {
        document.getElementById('field_fcm').classList.remove('d-none');
    } else if (type === 'segmented') {
        document.getElementById('field_segment').classList.remove('d-none');
        document.getElementById('field_genre').classList.remove('d-none');
        document.getElementById('field_book_type').classList.remove('d-none');
    } else if (type === 'daily_pick' || type === 'new_content') {
        document.getElementById('field_book_type').classList.remove('d-none');
        document.getElementById('field_book_id').classList.remove('d-none');
        document.getElementById('field_title').classList.add('d-none');
        document.getElementById('field_message').classList.add('d-none');
        document.getElementById('field_image').classList.add('d-none');
    }
}
</script>
@endsection
