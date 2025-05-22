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

// Rute resource untuk semua modul
Route::resource('materi', App\Http\Controllers\MateriController::class);
Route::resource('prodi', App\Http\Controllers\ProdiController::class);
Route::resource('fakultas', App\Http\Controllers\FakultasController::class);
Route::resource('mhs', App\Http\Controllers\MhsController::class);
Route::resource('dosen', App\Http\Controllers\DosenController::class);
