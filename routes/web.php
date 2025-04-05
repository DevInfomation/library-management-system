<?php

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    $user = Auth::user();
    return view('welcome', ['user' => $user]);
})->name('home');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/search', function() {
        return view ('pages.search');
    });

    Route::get('/header', function() {
        return view('partials.header');
    });

    Route::get('/book-creation', function() {
        return view('book_creation');
    });

    Route::get('/search/', [BookController::class, 'search'])->name('search');
});

Route::get('/register', function() {
    return view('register');
})->name('register');



Route::post('/register', [RegisterController::class, 'getCredentials'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/book-creation', [BookController::class, 'store'])->name('book_creation.submit');