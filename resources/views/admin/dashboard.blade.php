@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')

<div class="page-title">Dashboard</div>
<div class="page-subtitle">Welcome back — here's what's happening with Librora</div>

<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="number">{{ $totalDevices }}</div>
            <div class="label">📱 Total Devices</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="number">{{ $activeDevices }}</div>
            <div class="label">✅ Active (7 days)</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="number">{{ $totalActivity }}</div>
            <div class="label">📊 Activity Records</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="number">5.0 ⭐</div>
            <div class="label">Play Store Rating</div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">⚡ Quick Actions</div>
            <div class="card-body p-3 d-flex flex-column gap-2">
                <a href="{{ route('admin.notifications') }}" class="btn btn-primary">📢 Send Notification</a>
                <a href="{{ route('admin.devices') }}" class="btn" style="background:#1a1a1a;color:#fff;border:1px solid #333">📱 View Devices</a>
                <a href="{{ route('admin.trending') }}" class="btn" style="background:#1a1a1a;color:#fff;border:1px solid #333">🔥 Manage Trending</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">🕐 Recent Activity</div>
            <div class="card-body p-0">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Book</th>
                            <th>Type</th>
                            <th>Last Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentActivity as $activity)
                        <tr>
                            <td style="font-size:13px">{{ Str::limit($activity->last_book_title, 25) }}</td>
                            <td><span class="badge" style="background:#1a1a1a;color:#888">{{ $activity->last_book_type }}</span></td>
                            <td style="font-size:12px;color:#888">{{ $activity->last_active_at ? \Carbon\Carbon::parse($activity->last_active_at)->diffForHumans() : '-' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
