<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

// Show Landing/Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');


// Show User Registration Form
Route::get('/register', [UserController::class, 'create'])->name('register');

// Create New User
Route::post('/users', [UserController::class, 'store'])->name('create-user');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->name('logout');