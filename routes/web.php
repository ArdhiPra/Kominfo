<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;


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
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});
