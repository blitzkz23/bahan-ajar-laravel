<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>

    <form action="{{ route('register') }}" method="POST" class="space-y-6">
        @csrf
        <div class="space-y-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" 
                   name="name" 
                   value="{{ old('name') }}" 
                   required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" 
                   name="password" 
                   required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
            <input type="password" 
                   name="password_confirmation" 
                   required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        @if ($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 p-4">
            <ul class="list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
            Daftar
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
        Sudah punya akun? 
        <a href="{{ url('/login') }}" class="text-blue-600 hover:text-blue-700 font-medium">Login</a>
    </p>
</div>

</body>
</html>
