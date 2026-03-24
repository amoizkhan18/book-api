@extends('admin.layout')
@section('title', 'Devices')
@section('content')

<div class="page-title">Registered Devices</div>
<div class="page-subtitle">All devices that have installed Librora — {{ $devices->count() }} total</div>

<div class="card">
    <div class="card-header">📱 Device List</div>
    <div class="card-body p-0">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Device Model</th>
                    <th>FCM Token</th>
                    <th>Last Active</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devices as $index => $device)
                <tr>
                    <td style="color:#888">{{ $index + 1 }}</td>
                    <td>{{ $device->device_model ?? 'Unknown' }}</td>
                    <td>
                        <span style="font-size:11px;color:#888;font-family:monospace">
                            {{ Str::limit($device->fcm_token, 40) }}
                        </span>
                        <button class="btn btn-sm ms-2" style="background:#1a1a1a;color:#888;border:1px solid #333;font-size:11px"
                            onclick="navigator.clipboard.writeText('{{ $device->fcm_token }}');this.innerText='Copied!'">
                            Copy
                        </button>
                    </td>
                    <td style="font-size:13px;color:#888">
                        {{ $device->last_active_at ? \Carbon\Carbon::parse($device->last_active_at)->diffForHumans() : 'Never' }}
                    </td>
                    <td>
                        @if($device->last_active_at && \Carbon\Carbon::parse($device->last_active_at)->gt(\Carbon\Carbon::now()->subDays(7)))
                            <span class="badge-active">Active</span>
                        @else
                            <span class="badge-inactive">Inactive</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
