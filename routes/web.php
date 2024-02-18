<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TambahbukuController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/home', [DashboardController::class, 'indexHome']);
Route::get('/dashboard', [DashboardController::class, 'indexHome']);

Route::resource("/dashboard/bookings", BookingController::class);

Route::get('/dashboard/collection', [CollectionController::class, 'index']);
Route::resource("/dashboard/books", BookController::class);

Route::get('/profil', [ProfilController::class, 'index'])->name('user-profile');
Route::get('/profil/edit', [ProfilController::class, 'edit']);
Route::post('/profil/update', [ProfilController::class, 'update']);

Route::get('/generate-pdf', [BookController::class, 'generatePdf']);