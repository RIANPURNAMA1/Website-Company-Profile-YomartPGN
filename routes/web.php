<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\Auth\AuthController;

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
    return view('frontend.app.Index');
});


Route::get('/register', [AuthController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// admin panel
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');