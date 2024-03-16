<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKepalaKeluargaRequest;
use App\Http\Requests\UpdateKepalaKeluargaRequest;
use App\Models\KepalaKeluarga;

class KepalaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKepalaKeluargaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KepalaKeluarga $kepalaKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepalaKeluarga $kepalaKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKepalaKeluargaRequest $request, KepalaKeluarga $kepalaKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaKeluarga $kepalaKeluarga)
    {
        //
    }
}
