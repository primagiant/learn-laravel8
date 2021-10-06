<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin-portofolio', [AdminController::class, 'portofolio'])
        ->name('admin-portofolio');

    Route::get('/admin-user', [AdminController::class, 'user'])
        ->name('admin-user');

    Route::get('/admin-kegiatan', [AdminController::class, 'kegiatan'])
        ->name('admin-kegiatan');
});
