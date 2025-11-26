<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EditController;
use App\Http\Controllers\Admin\BidangController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Admin\TambahController;

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// Auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// User dashboard
Route::get('/', [UserDashboardController::class, 'index'])->name('user.dashboard');

// Admin routes (hanya bisa diakses jika sudah login)
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/edit', [AdminDashboardController::class, 'edit'])->name('admin.dashboard.edit');
    Route::get('/tentang', [AdminDashboardController::class, 'tentang'])->name('tentang');

    // Magang
    Route::get('/admin/magang/create', [TambahController::class, 'create'])->name('admin.magang.create');
    Route::post('/admin/magang/store', [TambahController::class, 'store'])->name('admin.magang.store');

    // Edit data
    Route::get('/admin/edit', [EditController::class, 'index'])->name('admin.edit.index'); // halaman daftar mahasiswa
    Route::get('/admin/edit/{id}', [EditController::class, 'edit'])->name('admin.edit.form'); // form edit
    Route::put('/admin/edit/{id}', [EditController::class, 'update'])->name('admin.edit.update'); // simpan perubahan
    
    // Bidang
    Route::get('/admin/sekretariat', [BidangController::class, 'sekretariat'])->name('admin.sekretariat');
    Route::get('/admin/persandian', [BidangController::class, 'persandian'])->name('admin.persandian');
    Route::get('/admin/pikp', [BidangController::class, 'pikp'])->name('admin.pikp');
    Route::get('/admin/tik', [BidangController::class, 'tik'])->name('admin.tik');
    Route::get('/admin/statistik', [BidangController::class, 'statistik'])->name('admin.statistik');



    //Profil
    Route::get('/admin/magang/profil/{id}', [\App\Http\Controllers\Admin\ProfilMahasiswaController::class, 'show']
    )->name('admin.profil.mahasiswa');
});
