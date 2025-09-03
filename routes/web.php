<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;


Route::get('/index', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// Dashbard
Route::get('/', [BidangController::class, 'index'
]);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
});


// Admin Route
Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});