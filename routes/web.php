<?php

use App\Http\Controllers\KepalaKeluargaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kepala-keluarga', KepalaKeluargaController::class);

