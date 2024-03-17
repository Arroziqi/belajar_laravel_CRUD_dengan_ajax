<?php

namespace App\Http\Controllers;

use App\Models\KepalaKeluarga;
use Illuminate\Http\Request;

class KepalaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = KepalaKeluarga::all();
        return view('index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->action([KepalaKeluargaController::class, 'index']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        KepalaKeluarga::create($validated);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KepalaKeluarga $kepalaKeluarga)
    {
        return view('kepala_keluarga.show', compact('kepalaKeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepalaKeluarga $kepalaKeluarga)
    {
        return view('kepala_keluarga.edit', compact('kepalaKeluarga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KepalaKeluarga $kepalaKeluarga)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $kepalaKeluarga->update($validated);
        return redirect()->action([KepalaKeluargaController::class, 'index'])->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaKeluarga $kepalaKeluarga)
    {
        $kepalaKeluarga->delete();
        return redirect()->action([KepalaKeluargaController::class, 'index'])->with('success', 'Data berhasil dihapus');
    }
}
