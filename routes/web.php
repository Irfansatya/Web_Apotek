<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('homepage');
})->name('home');

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::resource('pelanggan' , PelangganController::class)->middleware('auth','admin');


Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginform'])->name('login');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
