<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'getCredentials'])->name('register.submit');