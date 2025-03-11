<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <div class="sidebar">
        <h4>Dashboard</h4>
        <a href="#">🏠 Home</a>
        <a href="#">⚙️ Settings</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-danger">🚪 Logout</button>
</form>

    </div>
    <div class="main-content">
        <h2>Welcome, {{ $user->name }}!</h2>
        <p>This is your minimalist dashboard.</p>
    </div>
</body>
</html>
