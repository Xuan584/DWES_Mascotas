<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Lista todas las mascotas
Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');

// Muestra formulario para crear una mascota
Route::get('/mascotas/create', [MascotaController::class, 'create'])->name('mascotas.create');
