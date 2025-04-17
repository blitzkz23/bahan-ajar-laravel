<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\PenerimaManfaat;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::with('penerimaManfaat')->get();
        return view('laporan.index', compact('laporans'));
    }

    public function create()
    {
        $penerimaManfaats = PenerimaManfaat::all();
        return view('laporan.create', compact('penerimaManfaats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penerima_manfaat_id' => 'required|exists:penerima_manfaats,id',
            'isi_laporan' => 'required|string',
        ]);

        Laporan::create($request->all());

        return redirect()->route('laporan.index')
            ->with('success', 'Laporan berhasil ditambahkan.');
    }

    public function edit(Laporan $laporan)
    {
        $penerimaManfaats = PenerimaManfaat::all();
        return view('laporan.edit', compact('laporan', 'penerimaManfaats'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'penerima_manfaat_id' => 'required|exists:penerima_manfaats,id',
            'isi_laporan' => 'required|string',
        ]);

        $laporan->update($request->all());

        return redirect()->route('laporan.index')
            ->with('success', 'Laporan berhasil diperbarui.');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('laporan.index')
            ->with('success', 'Laporan berhasil dihapus.');
    }
} 