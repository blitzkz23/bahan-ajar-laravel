<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PantiSosial;

class PantiSosialController extends Controller
{
    public function index()
    {
        $pantis = PantiSosial::all();
        return view('panti.index', compact('pantis'));
    }

    public function create()
    {
        return view('panti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kontak' => 'nullable|string|max:20',
        ]);

        PantiSosial::create($request->all());

        return redirect()->route('panti.index')->with('success', 'Panti berhasil ditambahkan!');
    }
}
