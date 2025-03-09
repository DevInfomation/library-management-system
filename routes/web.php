<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('dashboard', ['user' => $user]);
})->name('dashboard');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/header', function() {
    $user = Auth::user();
    return view('partials.header', ['user' => $user]);
});

Route::post('/register', [RegisterController::class, 'getCredentials'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');