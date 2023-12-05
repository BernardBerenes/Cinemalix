<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('Dashboard');
})->name('dashboard');

Route::get('/support', function() {
    return view('Additional.Contact_Support');
})->name('contactSupport');

Route::get('/film/create', [FilmController::class, 'createFilmView'])->name('createFilmView');
Route::post('/film/create', [FilmController::class, 'createFilm'])->name('createFilm');

Route::get('/genre', [GenreController::class, 'showGenreView'])->name('showGenreView');
Route::get('/genre/create', [GenreController::class, 'createGenreView'])->name('createGenreView');
Route::post('/genre/create', [GenreController::class, 'createGenre'])->name('createGenre');

Route::middleware('admin')->group(function() {
});

Route::middleware('guest')->group(function() {
    Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/forgot-password', [AuthController::class, 'forgotPasswordView'])->name('forgotPasswordView');
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(['auth', 'verified']);
