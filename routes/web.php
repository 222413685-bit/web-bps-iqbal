<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikasiController;

Route::get('/', [PublikasiController::class, 'home']);

Route::get('/publikasi', [PublikasiController::class, 'index']);

Route::get('/publikasi/create', [PublikasiController::class, 'create']);

Route::post('/publikasi', [PublikasiController::class, 'store']);

Route::get('/publikasi/{id}/edit', [PublikasiController::class, 'edit']);

Route::put('/publikasi/{id}', [PublikasiController::class, 'update']);

Route::delete('/publikasi/{id}', [PublikasiController::class, 'destroy']);

Route::get('/galeri', function () {
    return view('galeri');
});