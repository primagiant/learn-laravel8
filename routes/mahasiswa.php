<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::group(['middleware' => ['auth', 'role:mahasiswa']], function () {
    Route::get('/mhs-portofolio', [MahasiswaController::class, 'portofolio'])
        ->name('mhs-portofolio');

    Route::get('/mhs-kegiatan', [MahasiswaController::class, 'kegiatan'])
        ->name('mhs-kegiatan');
});
