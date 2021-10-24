<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingAkademikController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:pa']], function () {
    // Pembimbing akademik
    Route::get('/detail-pa', [PembimbingAkademikController::class, 'show'])
        ->name('detail-pa');

    Route::get('/edit-pa/{id}', [PembimbingAkademikController::class, 'edit'])
        ->name('edit-pa');

    Route::put('/edit-pa/{id}', [PembimbingAkademikController::class, 'update'])
        ->name('edit-pa');

    // Mahasiswa
    Route::get('/pa-mahasiswa', [MahasiswaController::class, 'index'])
        ->name('pa-mahasiswa');

    Route::get('/pa-add-mahasiswa', [MahasiswaController::class, 'create'])
        ->name('pa-add-mahasiswa');

    Route::post('/pa-add-mahasiswa', [MahasiswaController::class, 'store'])
        ->name('pa-add-mahasiswa');
});
