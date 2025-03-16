{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="p-6 w-full">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card Panti Sosial -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Total Panti Sosial</h3>
                <span class="p-2 bg-blue-100 rounded-full">
                    <i class="fas fa-hospital text-blue-600"></i>
                </span>
            </div>
            <p class="mt-4 flex items-center">
                <span class="text-2xl font-bold text-gray-800">{{ $totalPanti ?? '0' }}</span>
                <span class="ml-2 text-sm font-medium text-green-500">
                    <i class="fas fa-arrow-up"></i> Aktif
                </span>
            </p>
        </div>

        <!-- Card Penerima Manfaat -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Total Penerima Manfaat</h3>
                <span class="p-2 bg-green-100 rounded-full">
                    <i class="fas fa-users text-green-600"></i>
                </span>
            </div>
            <p class="mt-4 flex items-center">
                <span class="text-2xl font-bold text-gray-800">{{ $totalPenerima ?? '0' }}</span>
                <span class="ml-2 text-sm font-medium text-green-500">
                    <i class="fas fa-arrow-up"></i> Terdaftar
                </span>
            </p>
        </div>

        <!-- Card Pengguna -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Total Pengguna</h3>
                <span class="p-2 bg-purple-100 rounded-full">
                    <i class="fas fa-user text-purple-600"></i>
                </span>
            </div>
            <p class="mt-4 flex items-center">
                <span class="text-2xl font-bold text-gray-800">{{ $totalUsers ?? '0' }}</span>
                <span class="ml-2 text-sm font-medium text-green-500">
                    <i class="fas fa-arrow-up"></i> Aktif
                </span>
            </p>
        </div>

        <!-- Card Aktivitas -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Aktivitas Terkini</h3>
                <span class="p-2 bg-yellow-100 rounded-full">
                    <i class="fas fa-chart-line text-yellow-600"></i>
                </span>
            </div>
            <p class="mt-4 flex items-center">
                <span class="text-2xl font-bold text-gray-800">{{ $totalAktivitas ?? '0' }}</span>
                <span class="ml-2 text-sm font-medium text-green-500">
                    <i class="fas fa-clock"></i> Hari ini
                </span>
            </p>
        </div>
    </div>
</div>
@endsection
