<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/tampilkan-nama/{nama}', [ProjectController::class, 'tampilkanNama']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);