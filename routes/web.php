<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

// Move into controller
Route::get('/', [MoviesController::class, 'index']);
Route::get('movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');
