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

    // fakultas
    Route::get('/admin-fakultas', [AdminController::class, 'fakultas'])
        ->name('admin-fakultas');

    Route::get('/add-fakultas', [AdminController::class, 'addFakultas'])
        ->name('add-fakultas');

    Route::post('/add-fakultas', [AdminController::class, 'saveFakultas'])
        ->name('add-fakultas');

    Route::get('/edit-fakultas', [AdminController::class, 'editFakultas'])
        ->name('edit-fakultas');

    Route::put('/edit-fakultas', [AdminController::class, 'updateFakultas'])
        ->name('edit-fakultas');

    Route::delete('/delete-fakultas', [AdminController::class, 'destroyFakultas'])
        ->name('delete-fakultas');

    // Prodi
    Route::get('/admin-prodi', [AdminController::class, 'prodi'])
        ->name('admin-prodi');

    Route::get('/add-prodi', [AdminController::class, 'addProdi'])
        ->name('add-prodi');

    Route::post('/add-prodi', [AdminController::class, 'saveProdi'])
        ->name('add-prodi');

    Route::get('/edit-prodi', [AdminController::class, 'editProdi'])
        ->name('edit-prodi');

    Route::put('/edit-prodi', [AdminController::class, 'updateProdi'])
        ->name('edit-prodi');

    Route::delete('/delete-prodi', [AdminController::class, 'destroyProdi'])
        ->name('delete-prodi');

    // angkatan
    Route::get('/admin-angkatan', [AdminController::class, 'angkatan'])
        ->name('admin-angkatan');

    Route::get('/add-angkatan', [AdminController::class, 'addAngkatan'])
        ->name('add-angkatan');

    Route::post('/add-angkatan', [AdminController::class, 'saveAngkatan'])
        ->name('add-angkatan');

    Route::get('/edit-angkatan', [AdminController::class, 'editAngkatan'])
        ->name('edit-angkatan');

    Route::put('/edit-angkatan', [AdminController::class, 'updateAngkatan'])
        ->name('edit-angkatan');

    Route::delete('/delete-angkatan', [AdminController::class, 'destroyAngkatan'])
        ->name('delete-angkatan');
});
