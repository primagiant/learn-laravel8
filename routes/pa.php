<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingAkademikController;
use App\Http\Controllers\PortofolioController;
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

    Route::delete('/pa-delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])
        ->name('pa-delete-mahasiswa');

    // Portofolio
    Route::get('/show-mahasiswa-portofolio/{id}', [PortofolioController::class, 'show'])
        ->name('show-mahasiswa-portofolio');

    Route::get('/pa-validasi/{id}', [PortofolioController::class, 'validasi'])
        ->name('pa-validasi');

    Route::put('/pa-validasi/{id}', [PortofolioController::class, 'update'])
        ->name('pa-validasi');
});
