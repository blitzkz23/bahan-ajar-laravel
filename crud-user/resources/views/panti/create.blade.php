@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Panti Sosial</h2>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500">
            <ul class="list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('panti.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="space-y-2">
            <label for="nama" 
                   class="block text-sm font-medium text-gray-700">
                Nama Panti
            </label>
            <input type="text" 
                   id="nama" 
                   name="nama" 
                   value="{{ old('nama') }}"
                   required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="alamat" 
                   class="block text-sm font-medium text-gray-700">
                Alamat
            </label>
            <textarea id="alamat" 
                      name="alamat" 
                      required
                      rows="3"
                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('alamat') }}</textarea>
        </div>

        <div class="space-y-2">
            <label for="kontak" 
                   class="block text-sm font-medium text-gray-700">
                Kontak
            </label>
            <input type="text" 
                   id="kontak" 
                   name="kontak"
                   value="{{ old('kontak') }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('panti.index') }}" 
               class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                Batal
            </a>
            <button type="submit" 
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
