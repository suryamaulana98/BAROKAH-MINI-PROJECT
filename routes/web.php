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
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/listsiswa', [AdminController::class, 'listsiswa'])->name('admin.listsiswa');
        Route::get('/admin/izinsiswa', [AdminController::class, 'izinsiswa'])->name('admin.izinsiswa');
        Route::get('/admin/laporan/ketua', [AdminController::class, 'laporanketua'])->name('admin.laporanketua');
        Route::get('/admin/laporan/harian-siswa', [AdminController::class, 'laporanhariansiswa'])->name('admin.laporanhariansiswa');
        Route::get('/admin/laporan/harian-siswa', [AdminController::class, 'laporanhariansiswa'])->name('admin.laporanhariansiswa');
        Route::get('/admin/riwayatizin', [AdminController::class, 'riwayatizin'])->name('admin.riwayatizin');
        Route::get('/admin/feedback', [AdminController::class, 'feedback'])->name('admin.feedback');
        Route::get('/admin/pegumuman', [AdminController::class, 'pengumuman'])->name('admin.pegumuman');
        Route::get('/admin/kontak', [AdminController::class, 'kontak'])->name('admin.kontak');
        Route::get('/admin/absen', [AdminController::class, 'absen'])->name('admin.absen');
        Route::get('/admin/laporan/jurnal', [AdminController::class, 'jurnal'])->name('admin.jurnal');
    });

    //pembimbing
    Route::middleware('role:pembimbing')->group(function () {
        Route::get('/dashboard_pembimbing', [PembimbingController::class, 'index'])->name('pembimbing.dashboard');
        Route::get('/pembimbing/listsiswa',[PembimbingController::class, 'listsiswa'])->name('pembimbing.listsiswa');
        Route::get('/pembimbing/izinsiswa',[PembimbingController::class, 'izinsiswa'])->name('pembimbing.izinsiswa');
        Route::get('/pembimbing/laporanketua',[PembimbingController::class, 'laporanketua'])->name('pembimbing.laporanketua');
        Route::get('/pembimbing/laporanhariansiswa',[PembimbingController::class, 'laporanhariansiswa'])->name('pembimbing.laporanhariansiswa');
        Route::get('/pembimbing/laporanjurnalsiswa',[PembimbingController::class, 'laporanjurnalsiswa'])->name('pembimbing.laporanjurnalsiswa');
        Route::get('/pembimbing/riwayatsiswa',[PembimbingController::class, 'riwayatsiswa'])->name('pembimbing.riwayatsiswa');
        Route::get('/pembimbing/feedback',[PembimbingController::class, 'feedback'])->name('pembimbing.feedback');
        Route::get('/pembimbing/report',[PembimbingController::class, 'report'])->name('pembimbing.report');
        Route::get('/pembimbing/pengumpulanjurnal',[PembimbingController::class, 'pengumpulanjurnal'])->name('pembimbing.pengumpulanjurnal');
        Route::get('/pembimbing/laporanabsensiswa',[PembimbingController::class, 'laporanabsensiswa'])->name('pembimbing.laporanabsensiswa');
    });

    //guru
    Route::middleware('role:guru')->group(function () {
        Route::get('/guru/dashboard', [GuruController::class, 'index'])->name('guru.dashboard');
        Route::get('/guru/listsiswa', [GuruController::class, 'listsiswa'])->name('guru.listsiswa');
        Route::get('/guru/laporan/harian-siswa', [GuruController::class, 'laporanhariansiswa'])->name('guru.laporanhariansiswa');
        Route::get('/guru/laporan/jurnal-siswa', [GuruController::class, 'laporanjurnalsiswa'])->name('guru.laporanjurnalsiswa');
        Route::get('/guru/riwayatizin', [GuruController::class, 'riwayatizin'])->name('guru.riwayatizin');
        Route::get('/guru/absen', [GuruController::class, 'absen'])->name('guru.absen');
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


