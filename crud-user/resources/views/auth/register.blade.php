<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="input-group">
            <label for="name">Nama</label>
            <input type="text" name="name" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn">Daftar</button>
    </form>

    <p class="text-center">Sudah punya akun? <a href="{{ url('/login') }}">Login</a></p>
</div>

</body>
</html>
