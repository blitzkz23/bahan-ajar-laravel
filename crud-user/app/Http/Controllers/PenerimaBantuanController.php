<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBantuan;
use App\Models\PenerimaManfaat;
use App\Models\Bantuan;
use Illuminate\Http\Request;

class PenerimaBantuanController extends Controller
{
    public function index()
    {
        $penerimaBantuans = PenerimaBantuan::with(['penerimaManfaat', 'bantuan'])->get();
        return view('penerima-bantuan.index', compact('penerimaBantuans'));
    }

    public function create()
    {
        $penerimaManfaats = PenerimaManfaat::all();
        $bantuans = Bantuan::all();
        return view('penerima-bantuan.create', compact('penerimaManfaats', 'bantuans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penerima_manfaat_id' => 'required|exists:penerima_manfaats,id',
            'bantuan_id' => 'required|exists:bantuans,id',
            'tanggal_terima' => 'required|date',
        ]);

        PenerimaBantuan::create($request->all());

        return redirect()->route('penerima-bantuan.index')
            ->with('success', 'Data penerima bantuan berhasil ditambahkan.');
    }

    public function edit(PenerimaBantuan $penerimaBantuan)
    {
        $penerimaManfaats = PenerimaManfaat::all();
        $bantuans = Bantuan::all();
        return view('penerima-bantuan.edit', compact('penerimaBantuan', 'penerimaManfaats', 'bantuans'));
    }

    public function update(Request $request, PenerimaBantuan $penerimaBantuan)
    {
        $request->validate([
            'penerima_manfaat_id' => 'required|exists:penerima_manfaats,id',
            'bantuan_id' => 'required|exists:bantuans,id',
            'tanggal_terima' => 'required|date',
        ]);

        $penerimaBantuan->update($request->all());

        return redirect()->route('penerima-bantuan.index')
            ->with('success', 'Data penerima bantuan berhasil diperbarui.');
    }

    public function destroy(PenerimaBantuan $penerimaBantuan)
    {
        $penerimaBantuan->delete();

        return redirect()->route('penerima-bantuan.index')
            ->with('success', 'Data penerima bantuan berhasil dihapus.');
    }
} 