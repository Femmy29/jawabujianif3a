<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');  
})->name('app.blade.php');


Route::resource('anggota', AnggotaController::class);
Route::resource('buku', BukuController::class);Route::resource('peminjaman', PeminjamanController::class);
Route::resource('peminjaman', PeminjamanController::class);