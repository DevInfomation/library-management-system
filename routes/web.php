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

Route::get('/dashboard', function() {
    $user = Auth::user();
    return view('dashboard', ['user' => $user, 'books' => Book::all()]);
})->name('dashboard');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/header', function() {
    $user = Auth::user();
    return view('partials.header', ['user' => $user]);
});

Route::get('/book-creation', function() {
    $user = Auth::user();
    return view('book_creation', ['user' => $user]);
});

Route::post('/register', [RegisterController::class, 'getCredentials'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/book-creation', [BookController::class, 'store'])->name('book_creation.submit');