@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Penerima Bantuan Baru</h2>
    </div>

    @if($errors->any())
        <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('penerima-bantuan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="penerima_manfaat_id" class="block text-sm font-medium text-gray-700 mb-2">Penerima Manfaat</label>
                <select name="penerima_manfaat_id" 
                        id="penerima_manfaat_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <option value="">Pilih Penerima Manfaat</option>
                    @foreach($penerimaManfaats as $penerimaManfaat)
                        <option value="{{ $penerimaManfaat->id }}" {{ old('penerima_manfaat_id') == $penerimaManfaat->id ? 'selected' : '' }}>
                            {{ $penerimaManfaat->nama }}
                        </option>
                    @endforeach
                </select>
                @error('penerima_manfaat_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="bantuan_id" class="block text-sm font-medium text-gray-700 mb-2">Jenis Bantuan</label>
                <select name="bantuan_id" 
                        id="bantuan_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <option value="">Pilih Jenis Bantuan</option>
                    @foreach($bantuans as $bantuan)
                        <option value="{{ $bantuan->id }}" {{ old('bantuan_id') == $bantuan->id ? 'selected' : '' }}>
                            {{ $bantuan->jenis_bantuan }}
                        </option>
                    @endforeach
                </select>
                @error('bantuan_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tanggal_terima" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Terima</label>
                <input type="date" 
                       name="tanggal_terima" 
                       id="tanggal_terima" 
                       value="{{ old('tanggal_terima') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('tanggal_terima')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('penerima-bantuan.index') }}" 
                   class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Kembali
                </a>
                <button type="submit" 
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 