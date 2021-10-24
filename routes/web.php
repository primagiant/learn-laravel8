<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
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
});

require __DIR__ . '/auth.php';
require __DIR__ . '/pa.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/mahasiswa.php';
