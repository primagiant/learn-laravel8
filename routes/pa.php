<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembimbingAkademikController;

Route::group(['middleware' => ['auth', 'role:pa']], function () {
    // Pembimbing akademik
    Route::get('/detail-pa/{id}', [PembimbingAkademikController::class, 'show'])
        ->name('detail-pa');

    Route::get('/edit-pa/{id}', [PembimbingAkademikController::class, 'edit'])
        ->name('edit-pa');

    Route::put('/edit-pa/{id}', [PembimbingAkademikController::class, 'update'])
        ->name('edit-pa');
});
