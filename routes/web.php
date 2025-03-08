<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [DaftaranController::class, 'index']);

Route::post('/kirim', [DaftaranController::class, 'kirim']);

Route::get('/lomba', [DaftaranController::class, 'lomba']);