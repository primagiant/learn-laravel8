<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::group(['middleware' => ['auth', 'role:admin']], function () {

    // Hanya Admin Yang dapat Membuat User Baru
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->name('register');

    Route::get('/admin-portofolio', [AdminController::class, 'portofolio'])
        ->name('admin-portofolio');

    Route::get('/admin-user', [AdminController::class, 'user'])
        ->name('admin-user');

    Route::get('/admin-kegiatan', [AdminController::class, 'kegiatan'])
        ->name('admin-kegiatan');
});
