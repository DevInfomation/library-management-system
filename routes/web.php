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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/header', function() {
    $user = Auth::user();
    return view('partials.header', ['user' => $user]);
});

Route::post('/register', [RegisterController::class, 'getCredentials'])->name('register.submit');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');