<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function index()
    {
        $bantuans = Bantuan::all();
        return view('bantuan.index', compact('bantuans'));
    }

    public function create()
    {
        return view('bantuan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_bantuan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Bantuan::create($validated);

        return redirect()
            ->route('bantuan.index')
            ->with('success', 'Data bantuan berhasil ditambahkan');
    }

    public function edit(Bantuan $bantuan)
    {
        return view('bantuan.edit', compact('bantuan'));
    }

    public function update(Request $request, Bantuan $bantuan)
    {
        $validated = $request->validate([
            'jenis_bantuan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $bantuan->update($validated);

        return redirect()
            ->route('bantuan.index')
            ->with('success', 'Data bantuan berhasil diperbarui');
    }

    public function destroy(Bantuan $bantuan)
    {
        $bantuan->delete();

        return redirect()
            ->route('bantuan.index')
            ->with('success', 'Data bantuan berhasil dihapus');
    }
} 