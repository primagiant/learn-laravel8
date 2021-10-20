<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingAkademikController;
use App\Http\Controllers\ProdiController;

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    // Mahasiswa
    Route::get('/admin-mahasiswa', [MahasiswaController::class, 'index'])
        ->name('admin-mahasiswa');

    Route::get('/add-mahasiswa', [MahasiswaController::class, 'create'])
        ->name('add-mahasiswa');

    Route::post('/add-mahasiswa', [MahasiswaController::class, 'store'])
        ->name('add-mahasiswa');

    Route::get('/detail-mahasiswa/{id}', [MahasiswaController::class, 'show'])
        ->name('detail-mahasiswa');

    Route::get('/edit-mahasiswa/{id}', [MahasiswaController::class, 'edit'])
        ->name('edit-mahasiswa');

    Route::put('/edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])
        ->name('edit-mahasiswa');

    Route::delete('/delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])
        ->name('delete-mahasiswa');

    // Pembimbing Akademik
    Route::get('/admin-pa', [PembimbingAkademikController::class, 'index'])
        ->name('admin-pa');

    Route::get('/add-pa', [PembimbingAkademikController::class, 'create'])
        ->name('add-pa');

    Route::post('/add-pa', [PembimbingAkademikController::class, 'store'])
        ->name('add-pa');

    Route::get('/detail-pa/{id}', [PembimbingAkademikController::class, 'show'])
        ->name('detail-pa');

    Route::get('/edit-pa/{id}', [PembimbingAkademikController::class, 'edit'])
        ->name('edit-pa');

    Route::put('/edit-pa/{id}', [PembimbingAkademikController::class, 'update'])
        ->name('edit-pa');

    Route::delete('/delete-pa/{id}', [PembimbingAkademikController::class, 'destroy'])
        ->name('delete-pa');

    // Kegiatan
    Route::get('/admin-kegiatan', [KegiatanController::class, 'index'])
        ->name('admin-kegiatan');

    // fakultas
    Route::get('/admin-fakultas', [FakultasController::class, 'index'])
        ->name('admin-fakultas');

    Route::get('/add-fakultas', [FakultasController::class, 'create'])
        ->name('add-fakultas');

    Route::post('/add-fakultas', [FakultasController::class, 'store'])
        ->name('add-fakultas');

    Route::get('/edit-fakultas/{id}', [FakultasController::class, 'edit'])
        ->name('edit-fakultas');

    Route::put('/edit-fakultas/{id}', [FakultasController::class, 'update'])
        ->name('edit-fakultas');

    Route::delete('/delete-fakultas/{id}', [FakultasController::class, 'destroy'])
        ->name('delete-fakultas');

    // Prodi
    Route::get('/admin-prodi', [ProdiController::class, 'index'])
        ->name('admin-prodi');

    Route::get('/add-prodi', [ProdiController::class, 'create'])
        ->name('add-prodi');

    Route::post('/add-prodi', [ProdiController::class, 'store'])
        ->name('add-prodi');

    Route::get('/edit-prodi/{id}', [ProdiController::class, 'edit'])
        ->name('edit-prodi');

    Route::put('/edit-prodi/{id}', [ProdiController::class, 'update'])
        ->name('edit-prodi');

    Route::delete('/delete-prodi/{id}', [ProdiController::class, 'destroy'])
        ->name('delete-prodi');

    // angkatan
    Route::get('/admin-angkatan', [AngkatanController::class, 'index'])
        ->name('admin-angkatan');

    Route::get('/add-angkatan', [AngkatanController::class, 'create'])
        ->name('add-angkatan');

    Route::post('/add-angkatan', [AngkatanController::class, 'store'])
        ->name('add-angkatan');

    Route::get('/edit-angkatan/{id}', [AngkatanController::class, 'edit'])
        ->name('edit-angkatan');

    Route::put('/edit-angkatan/{id}', [AngkatanController::class, 'update'])
        ->name('edit-angkatan');

    Route::delete('/delete-angkatan/{id}', [AngkatanController::class, 'destroy'])
        ->name('delete-angkatan');
});
