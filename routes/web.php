<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JatahCutiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuanCutiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('divisi', DivisiController::class);
    Route::resource('jatah_cuti', JatahCutiController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('pengajuan_cuti', PengajuanCutiController::class)->except(['store']);
    // Approval and Rejection routes
    Route::put('/pengajuan_cuti/{pengajuan_cuti}/approve', [PengajuanCutiController::class, 'approve'])->name('pengajuan_cuti.approve');
    Route::put('/pengajuan_cuti/{pengajuan_cuti}/reject', [PengajuanCutiController::class, 'reject'])->name('pengajuan_cuti.reject');
});

// Pegawai routes
Route::middleware(['auth', 'role:pegawai'])->group(function () {
    Route::get('/admin/home', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('/pengajuan_cuti/create', [PengajuanCutiController::class, 'create'])->name('pengajuan_cuti.create');
    Route::post('/pengajuan_cuti', [PengajuanCutiController::class, 'store'])->name('pengajuan_cuti.store');
    Route::get('/admin/jatah_cuti', [JatahCutiController::class, 'showJatahCutiPegawai'])->name('admin.jatah_cuti');
});

// Authentication routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';


// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\DivisiController;
// use App\Http\Controllers\JatahCutiController;
// use App\Http\Controllers\PegawaiController;
// use App\Http\Controllers\PengajuanCutiController;
// use App\Http\Controllers\Auth\AuthenticatedSessionController;
// use App\Http\Controllers\Auth\RegisteredUserController;

// // Landing page
// Route::get('/', function () {
//     return view('landing');
// })->name('landing');

// // Admin routes
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::resource('divisi', DivisiController::class);
//     Route::resource('jatah_cuti', JatahCutiController::class);
//     Route::resource('pegawai', PegawaiController::class);
//     Route::get('/pengajuan_cuti', [PengajuanCutiController::class, 'indexAdmin'])->name('pengajuan_cuti.indexAdmin');
//     // Approval and Rejection routes
//     Route::put('/pengajuan_cuti/{pengajuan_cuti}/approve', [PengajuanCutiController::class, 'approve'])->name('pengajuan_cuti.approve');
//     Route::put('/pengajuan_cuti/{pengajuan_cuti}/reject', [PengajuanCutiController::class, 'reject'])->name('pengajuan_cuti.reject');
// });

// // Pegawai routes
// Route::middleware(['auth', 'role:pegawai'])->group(function () {
//     Route::get('/admin/home', [PengajuanCutiController::class, 'indexPegawai'])->name('admin.home');
//     Route::get('/pengajuan_cuti/create', [PengajuanCutiController::class, 'create'])->name('pengajuan_cuti.create');
//     Route::post('/pengajuan_cuti', [PengajuanCutiController::class, 'store'])->name('pengajuan_cuti.store');
// });

// // Authentication routes
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('/login', [AuthenticatedSessionController::class, 'store']);
// Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store']);
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// require __DIR__.'/auth.php';
