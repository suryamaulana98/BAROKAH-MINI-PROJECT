<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembimbingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware('checkLogin')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard_admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    //pembimbing
    Route::middleware('role:pembimbing')->group(function () {
        Route::get('/dashboard_pembimbing', [PembimbingController::class, 'index'])->name('pembimbing.dashboard');
    });

    //guru
    Route::middleware('role:guru')->group(function () {
        Route::get('/dashboard_guru', [GuruController::class, 'index'])->name('guru.dashboard');
    });

    //ketua
    Route::middleware('role:ketua')->group(function () {
        Route::get('/dashboard_ketua', [KetuaController::class, 'index'])->name('ketua.dashboard');
    });

    //siswa
    Route::middleware('role:siswa')->group(function () {
        Route::get('/dashboard_siswa', [SiswaController::class, 'index'])->name('siswa.dashboard');
    });
});


