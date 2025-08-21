<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangController;

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('index');
});

// Dashbard
Route::get('/', [BidangController::class, 'index'
]);