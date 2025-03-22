@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Penerima Manfaat</h2>
        <a href="{{ route('penerima-manfaat.index') }}" 
           class="px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500">
            <ul class="list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penerima-manfaat.update', $penerimaManfaat->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="space-y-2">
            <label for="nama" class="block text-sm font-medium text-gray-700">
                Nama Lengkap <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="nama" 
                   name="nama" 
                   value="{{ old('nama', $penerimaManfaat->nama) }}"
                   required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="nik" class="block text-sm font-medium text-gray-700">
                NIK <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="nik" 
                   name="nik" 
                   value="{{ old('nik', $penerimaManfaat->nik) }}"
                   required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="space-y-2">
            <label for="alamat" class="block text-sm font-medium text-gray-700">
                Alamat <span class="text-red-500">*</span>
            </label>
            <textarea id="alamat" 
                      name="alamat" 
                      rows="3"
                      required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('alamat', $penerimaManfaat->alamat) }}</textarea>
        </div>

        <div class="space-y-2">
            <label for="panti_id" class="block text-sm font-medium text-gray-700">
                Panti Sosial <span class="text-red-500">*</span>
            </label>
            <select id="panti_id" 
                    name="panti_id" 
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Pilih Panti Sosial</option>
                @foreach($pantis as $panti)
                    <option value="{{ $panti->id }}" {{ old('panti_id', $penerimaManfaat->panti_id) == $panti->id ? 'selected' : '' }}>
                        {{ $panti->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end space-x-3">
            <button type="reset" 
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                Reset
            </button>
            <button type="submit" 
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
