<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [customAuthController::class,'login']);
Route::get('/registration', [customAuthController::class,'registration']);
Route::post('/register-user', [customAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [customAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [customAuthController::class, 'dashboard']);
Route::get('/logins', [customAuthController::class,'logins']);
Route::get('/alumni-list', [customAuthController::class, 'alumniList']);
Route::get('/events', [customAuthController::class, 'events']);
Route::get('/profile', [customAuthController::class, 'profile']);
Route::get('/gallery', [customAuthController::class, 'gallery']);