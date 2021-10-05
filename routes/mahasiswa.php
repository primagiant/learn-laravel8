<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa\MahasiswaController;

Route::get('/dashboard', [MahasiswaController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/mhs-portofolio', [MahasiswaController::class, 'portofolio'])
    ->middleware(['auth'])
    ->name('mhs-portofolio');

Route::get('/mhs-kegiatan', [MahasiswaController::class, 'kegiatan'])
    ->middleware(['auth'])
    ->name('mhs-kegiatan');
