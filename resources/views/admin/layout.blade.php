<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librora Admin — @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #0a0a0a; color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; }
        .sidebar { background: #111; min-height: 100vh; height: 100vh; overflow-y: auto; width: 250px; position: fixed; top: 0; left: 0; padding: 20px 0; border-right: 1px solid #222; }
        .sidebar .brand { padding: 10px 20px 30px; font-size: 20px; font-weight: 700; color: #fff; border-bottom: 1px solid #222; margin-bottom: 10px; }
        .sidebar .brand span { color: #888; font-size: 12px; display: block; font-weight: 400; margin-top: 2px; }
        .sidebar a { display: flex; align-items: center; gap: 10px; padding: 12px 20px; color: #888; text-decoration: none; font-size: 14px; transition: all 0.2s; }
        .sidebar a:hover, .sidebar a.active { color: #fff; background: #1a1a1a; }
        .sidebar a i { font-size: 16px; width: 20px; }
        .sidebar .section-label { padding: 20px 20px 6px; font-size: 11px; color: #444; text-transform: uppercase; letter-spacing: 1px; }
        .main { margin-left: 250px; padding: 30px; }
        .card { background: #111; border: 1px solid #222; border-radius: 12px; }
        .card-header { background: #1a1a1a; border-bottom: 1px solid #222; padding: 15px 20px; font-weight: 600; }
        .stat-card { background: #111; border: 1px solid #222; border-radius: 12px; padding: 20px; }
        .stat-card .number { font-size: 36px; font-weight: 700; color: #fff; }
        .stat-card .label { color: #888; font-size: 13px; margin-top: 4px; }
        .btn-primary { background: #fff; color: #000; border: none; font-weight: 600; }
        .btn-primary:hover { background: #e0e0e0; color: #000; }
        .btn-danger { background: #ff3b30; border: none; }
        .btn-success { background: #30d158; border: none; color: #000; }
        .form-control, .form-select { background: #1a1a1a; border: 1px solid #333; color: #fff; }
        .form-control:focus, .form-select:focus { background: #1a1a1a; border-color: #555; color: #fff; box-shadow: none; }
        .form-select option { background: #1a1a1a; }
        .table { color: #fff; }
        .table th { color: #888; font-weight: 500; font-size: 12px; text-transform: uppercase; border-color: #222; }
        .table td { border-color: #1a1a1a; vertical-align: middle; }
        .badge-active { background: #30d158; color: #000; padding: 4px 10px; border-radius: 20px; font-size: 12px; }
        .badge-inactive { background: #333; color: #888; padding: 4px 10px; border-radius: 20px; font-size: 12px; }
        .alert-success { background: #1a2e1a; border-color: #30d158; color: #30d158; }
        .alert-danger { background: #2e1a1a; border-color: #ff3b30; color: #ff3b30; }
        .page-title { font-size: 28px; font-weight: 700; margin-bottom: 6px; }
        .page-subtitle { color: #888; font-size: 14px; margin-bottom: 25px; }
        ::-webkit-scrollbar { width: 6px; } 
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            📚 Librora
            <span>Admin Panel</span>
        </div>

        <div class="section-label">Overview</div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid"></i> Dashboard
        </a>

        <div class="section-label">Notifications</div>
        <a href="{{ route('admin.notifications') }}" class="{{ request()->routeIs('admin.notifications') ? 'active' : '' }}">
            <i class="bi bi-bell"></i> Send Notifications
        </a>

        <div class="section-label">Devices</div>
        <a href="{{ route('admin.devices') }}" class="{{ request()->routeIs('admin.devices') ? 'active' : '' }}">
            <i class="bi bi-phone"></i> Registered Devices
        </a>

        <div class="section-label">Content</div>
        <a href="{{ route('admin.trending') }}" class="{{ request()->routeIs('admin.trending') ? 'active' : '' }}">
            <i class="bi bi-fire"></i> Trending Books
        </a>
        <a href="{{ route('admin.popular') }}" class="{{ request()->routeIs('admin.popular') ? 'active' : '' }}">
            <i class="bi bi-star"></i> Popular Books
        </a>
        <a href="{{ route('admin.trending.audiobooks') }}" class="{{ request()->routeIs('admin.trending.audiobooks') ? 'active' : '' }}">
            <i class="bi bi-headphones"></i> Trending Audiobooks
        </a>
        <a href="{{ route('admin.popular.audiobooks') }}" class="{{ request()->routeIs('admin.popular.audiobooks') ? 'active' : '' }}">
            <i class="bi bi-headphones"></i> Popular Audiobooks
        </a>

        <div class="section-label">Authors</div>
        <a href="{{ route('admin.authors') }}" class="{{ request()->routeIs('admin.authors') ? 'active' : '' }}">
            <i class="bi bi-person"></i> Book Authors
        </a>
        <a href="{{ route('admin.audiobook.authors') }}" class="{{ request()->routeIs('admin.audiobook.authors') ? 'active' : '' }}">
            <i class="bi bi-person"></i> Audiobook Authors
        </a>

        <div class="section-label">Account</div>
        <a href="{{ route('admin.logout') }}">
            <i class="bi bi-box-arrow-left"></i> Logout
        </a>
    </div>

    <div class="main">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ✅ {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                ❌ {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
