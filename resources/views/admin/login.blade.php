<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librora Admin — Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #0a0a0a; color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; display: flex; align-items: center; justify-content: center; min-height: 100vh; }
        .login-card { background: #111; border: 1px solid #222; border-radius: 16px; padding: 40px; width: 100%; max-width: 400px; }
        .brand { font-size: 24px; font-weight: 700; margin-bottom: 8px; }
        .subtitle { color: #888; font-size: 14px; margin-bottom: 30px; }
        .form-control { background: #1a1a1a; border: 1px solid #333; color: #fff; padding: 12px; border-radius: 10px; }
        .form-control:focus { background: #1a1a1a; border-color: #555; color: #fff; box-shadow: none; }
        .btn-login { background: #fff; color: #000; border: none; padding: 12px; border-radius: 10px; font-weight: 600; width: 100%; font-size: 15px; }
        .btn-login:hover { background: #e0e0e0; }
        .alert-danger { background: #2e1a1a; border-color: #ff3b30; color: #ff3b30; border-radius: 10px; }
        label { color: #888; font-size: 13px; margin-bottom: 6px; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="brand">📚 Librora</div>
        <div class="subtitle">Admin Panel — Sign in to continue</div>

        @if($errors->any())
            <div class="alert alert-danger mb-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter admin password" autofocus required>
            </div>
            <button type="submit" class="btn-login">Sign In</button>
        </form>
    </div>
</body>
</html>
