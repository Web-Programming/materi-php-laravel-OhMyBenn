<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function() {
    return view(view :'profil');
});

Route::get('/berita/{id}',function($id) {
    return view('berita', ['id' => $id]);
});

Route::get("/total/{bil1}/{bil2?}/{bil3?}", function($bil1, $bil2, $bil3 = 0) {
    return view('hasil', [
        'total' => $bil1 + $bil2 + $bil3,
        'bil1' => $bil1,
        'bil2' => $bil2,
        'bil3' => $bil3
    ]);
})

?>// Rute resource untuk semua modul
Route::resource('materi', App\Http\Controllers\MateriController::class);
Route::resource('prodi', App\Http\Controllers\ProdiController::class);
Route::resource('fakultas', App\Http\Controllers\FakultasController::class);
Route::resource('mhs', App\Http\Controllers\MhsController::class);
Route::resource('dosen', App\Http\Controllers\DosenController::class);
