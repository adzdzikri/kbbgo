<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\UmkmController;

/*
|--------------------------------------------------------------------------
| Web Routes - KBB GO!
|--------------------------------------------------------------------------
|
| Rute web untuk platform pariwisata dan UMKM Kabupaten Bandung Barat.
|
*/

// Halaman Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// CRUD Resource Routes: Destinasi Wisata
Route::resource('destinasi', DestinasiController::class);

// CRUD Resource Routes: UMKM
Route::resource('umkm', UmkmController::class);
