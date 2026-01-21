<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Saat buka halaman utama ('/'), panggil ProjectController
Route::get('/', [ProjectController::class, 'index']);