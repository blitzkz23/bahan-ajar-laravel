<?php

namespace App\Http\Controllers;

use App\Models\ProgramRehabilitasi;
use Illuminate\Http\Request;

class ProgramRehabilitasiController extends Controller
{
    public function index()
    {
        $programs = ProgramRehabilitasi::all();
        return view('program-rehabilitasi.index', compact('programs'));
    }

    public function create()
    {
        return view('program-rehabilitasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        ProgramRehabilitasi::create($request->all());

        return redirect()->route('program-rehabilitasi.index')
            ->with('success', 'Program rehabilitasi berhasil ditambahkan.');
    }

    public function edit(ProgramRehabilitasi $programRehabilitasi)
    {
        return view('program-rehabilitasi.edit', compact('programRehabilitasi'));
    }

    public function update(Request $request, ProgramRehabilitasi $programRehabilitasi)
    {
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $programRehabilitasi->update($request->all());

        return redirect()->route('program-rehabilitasi.index')
            ->with('success', 'Program rehabilitasi berhasil diperbarui.');
    }

    public function destroy(ProgramRehabilitasi $programRehabilitasi)
    {
        $programRehabilitasi->delete();

        return redirect()->route('program-rehabilitasi.index')
            ->with('success', 'Program rehabilitasi berhasil dihapus.');
    }
} 