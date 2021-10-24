<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PortofolioController;

Route::group(['middleware' => ['auth', 'role:mahasiswa']], function () {
    // Mahasiswa
    Route::get('/detail-mahasiswa', [MahasiswaController::class, 'show'])
        ->name('detail-mahasiswa');

    Route::get('/edit-mahasiswa', [MahasiswaController::class, 'edit'])
        ->name('edit-mahasiswa');

    Route::put('/edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])
        ->name('edit-mahasiswa');

    // Portofolio
    Route::get('/portofolio', [PortofolioController::class, 'index'])
        ->name('portofolio');

    Route::get('/add-portofolio', [PortofolioController::class, 'create'])
        ->name('add-portofolio');

    Route::post('/add-portofolio', [PortofolioController::class, 'store'])
        ->name('add-portofolio');

    Route::delete('/delete-portofolio/{id}', [PortofolioController::class, 'destroy'])
        ->name('delete-portofolio');
});
