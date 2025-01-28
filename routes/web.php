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

// Recibe el formulario y devuelve al usuario a la lista de mascotas
Route::post('/mascotas', [MascotaController::class, 'store'])->name('mascotas.store');
