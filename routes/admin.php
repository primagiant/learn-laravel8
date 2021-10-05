<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Route::get('/dashboard', [AdminController::class, 'index'])
//     ->middleware(['auth'])
//     ->name('dashboard');

Route::get('/admin-portofolio', [AdminController::class, 'portofolio'])
    ->middleware(['auth'])
    ->name('admin-portofolio');

Route::get('/admin-user', [AdminController::class, 'user'])
    ->middleware(['auth'])
    ->name('admin-user');

Route::get('/admin-kegiatan', [AdminController::class, 'kegiatan'])
    ->middleware(['auth'])
    ->name('admin-kegiatan');
