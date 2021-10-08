<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PA\PAController;

Route::group(['middleware' => ['auth', 'role:pa']], function () {
    Route::get('/pa-mahasiswa', [PAController::class, 'mahasiswa'])
        ->name('pa-mahasiswa');
});