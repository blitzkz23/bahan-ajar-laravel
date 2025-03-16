<?php

namespace App\Http\Controllers;

use App\Models\PenerimaManfaat;
use App\Models\PantiSosial;
use Illuminate\Http\Request;

class PenerimaManfaatController extends Controller
{
    public function index()
    {
        $penerimas = PenerimaManfaat::with(['pantiSosial' => function($query) {
            $query->select('id', 'nama');
        }])->get();
        
        return view('penerima-manfaat.index', compact('penerimas'));
    }

    public function create()
    {
        $pantiSosials = PantiSosial::all();
        return view('penerima-manfaat.create', compact('pantiSosials'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penerima_manfaats',
            'alamat' => 'required',
            'panti_id' => 'required|exists:panti_sosials,id',
        ]);

        PenerimaManfaat::create($validated);

        return redirect()
            ->route('penerima-manfaat.index')
            ->with('success', 'Data penerima manfaat berhasil ditambahkan');
    }

    public function edit(PenerimaManfaat $penerimaManfaat)
    {
        $pantis = \App\Models\PantiSosial::all();
        return view('penerima-manfaat.edit', compact('penerimaManfaat', 'pantis'));
    }

    public function update(Request $request, PenerimaManfaat $penerimaManfaat)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penerima_manfaats,nik,' . $penerimaManfaat->id,
            'panti_id' => 'required|exists:pantis,id',
        ]);

        $penerimaManfaat->update($validated);

        return redirect()
            ->route('penerima-manfaat.index')
            ->with('success', 'Data penerima manfaat berhasil diperbarui');
    }

    public function destroy(PenerimaManfaat $penerimaManfaat)
    {
        $penerimaManfaat->delete();

        return redirect()
            ->route('penerima-manfaat.index')
            ->with('success', 'Data penerima manfaat berhasil dihapus');
    }
} 