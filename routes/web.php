<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => ['auth']], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Kegiatan
    Route::get('/kegiatan', [KegiatanController::class, 'index'])
        ->name('kegiatan');

    // Portofolio
    Route::get('/portofolio', [PortofolioController::class, 'index'])
        ->name('portofolio');

    Route::get('/add-portofolio', [PortofolioController::class, 'create'])
        ->name('add-portofolio');

    Route::post('/add-portofolio', [PortofolioController::class, 'store'])
        ->name('add-portofolio');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/pa.php';
require __DIR__ . '/mahasiswa.php';
