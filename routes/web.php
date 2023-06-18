<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MovieController::class, 'index'])->name('movies');
Route::get('/{movie}', [MovieController::class, 'show'])->name('movie');
Route::post('/movie/create', [MovieController::class, 'store'])->name('movie.store');
Route::get('/movie/filter', [MovieController::class, 'filter'])->name('movie.filter');
