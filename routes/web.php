<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Portofolio Routes - Main Pages
Route::get('/', function () {
    return view('portofolio.index');
});

Route::get('/about', function () {
    return view('portofolio.about');
});

Route::get('/projects', [ProjectController::class, 'projects']);

// Example route - Show name parameter
Route::get('/tampilkan-nama/{nama}', [ProjectController::class, 'tampilkanNama']);