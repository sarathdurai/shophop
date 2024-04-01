<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::get('/check-migration', [UserController::class, 'checkmigration'])->name('check-migration');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');
