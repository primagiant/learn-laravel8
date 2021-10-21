<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::group(['middleware' => ['auth', 'role:mahasiswa']], function () {
    // Mahasiswa
    Route::get('/detail-mahasiswa', [MahasiswaController::class, 'show'])
        ->name('detail-mahasiswa');

    Route::get('/edit-mahasiswa', [MahasiswaController::class, 'edit'])
        ->name('edit-mahasiswa');

    Route::put('/edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])
        ->name('edit-mahasiswa');

    // Portofolio
    Route::get('/mhs-portofolio', [MahasiswaController::class, 'portofolio'])
        ->name('mhs-portofolio');

    // Kegiatan
    Route::get('/mhs-kegiatan', [MahasiswaController::class, 'kegiatan'])
        ->name('mhs-kegiatan');
});
