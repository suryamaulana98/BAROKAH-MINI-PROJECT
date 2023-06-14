<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KetuaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware('checkLogin')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard_admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/listsiswa', [AdminController::class, 'listsiswa'])->name('admin.listsiswa');
        Route::get('/admin/izinsiswa', [AdminController::class, 'izinsiswa'])->name('admin.izinsiswa');
        Route::get('/admin/laporan/ketua', [AdminController::class, 'laporanketua'])->name('admin.laporanketua');
        Route::get('/admin/laporan/harian-siswa', [AdminController::class, 'laporanhariansiswa'])->name('admin.laporanhariansiswa');
        Route::get('/admin/riwayatizin', [AdminController::class, 'riwayatizin'])->name('admin.riwayatizin');
        Route::get('/admin/feedback', [AdminController::class, 'feedback'])->name('admin.feedback');
        Route::get('/admin/pegumuman', [AdminController::class, 'pengumuman'])->name('admin.pegumuman');
        Route::get('/admin/kontak', [AdminController::class, 'kontak'])->name('admin.kontak');
        Route::get('/admin/absen', [AdminController::class, 'absen'])->name('admin.absen');
    });

    //pembimbing
    Route::middleware('role:pembimbing')->group(function () {
        Route::get('/dashboard_pembimbing', [PembimbingController::class, 'index'])->name('pembimbing.dashboard');
        Route::get('/pembimbing/listsiswa',[PembimbingController::class, 'listsiswa'])->name('pembimbing.listsiswa');
        Route::get('/pembimbing/izinsiswa',[PembimbingController::class, 'izinsiswa'])->name('pembimbing.izinsiswa');
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


