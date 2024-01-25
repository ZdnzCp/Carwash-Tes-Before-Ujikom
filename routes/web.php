<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PenguranganController;
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

Route::get('/',[UserController::class, 'login'])->name('login');
Route::post('/postlogin',[UserController::class, 'postlogin'])->name('postlogin');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[UserController::class, 'logout'])->name('logout');
    Route::get('/home',[UserController::class, 'home'])->name('home');
    Route::get('/pilih/{paket}',[UserController::class, 'pilih'])->name('pilih');
    Route::post('/postpilih',[UserController::class, 'postpilih'])->name('postpilih');
    Route::get('/report',[UserController::class, 'report'])->name('report');
    Route::get('/searchDate',[UserController::class, 'searchDate'])->name('searchDate');
    Route::get('/invoice/{carwash}',[UserController::class, 'printInvoice'])->name('printInvoice');
    Route::get('/exportPdf',[UserController::class, 'exportPdf'])->name('exportPdf');
    
});
