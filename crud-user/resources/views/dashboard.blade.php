{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card Total Panti -->
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
                    <i class="fas fa-check"></i> Aktif
                </span>
            </p>
        </div>

        <!-- Card Total Penerima -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Total Penerima Manfaat</h3>
                <span class="p-2 bg-green-100 rounded-full">
                    <i class="fas fa-users text-green-600"></i>
                </span>
            </div>
            <p class="mt-4 flex items-center">
                <span class="text-2xl font-bold text-gray-800">{{ $totalPenerima }}</span>
                <span class="ml-2 text-sm font-medium text-green-500">
                    <i class="fas fa-user-check"></i> Terdaftar
                </span>
            </p>
        </div>

        <!-- Card Total Users -->
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-medium text-gray-500">Total Pengguna</h3>
                <span class="p-2 bg-purple-100 rounded-full">
                    <i class="fas fa-user-shield text-purple-600"></i>
                </span>
            </div>
            <p class="mt-4 flex items-center">
                <span class="text-2xl font-bold text-gray-800">{{ $totalUsers }}</span>
                <span class="ml-2 text-sm font-medium text-green-500">
                    <i class="fas fa-check-circle"></i> Aktif
                </span>
            </p>
        </div>
    </div>

    <!-- Tabel Penerima Manfaat Terbaru -->
    <div class="mt-8">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Penerima Manfaat Terbaru</h2>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NIK</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Panti</th>                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recentPenerima as $penerima)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $penerima->nama }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $penerima->nik }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ optional($penerima->pantiSosial)->nama ?? 'Data Panti tidak ditemukan' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                Belum ada data penerima manfaat
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
