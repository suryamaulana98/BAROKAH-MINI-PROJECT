<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminsiswaController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\izinPembimbingController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KetuaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LaporanharianController;
use App\Http\Controllers\LaporanjurnalController;
use App\Http\Controllers\LaporanketuaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\pengumpulanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\reportPembimbing;
use App\Http\Controllers\RiwayatizinController;
use App\Http\Controllers\RiwayatizinpembimbingController;
use App\Http\Controllers\SiswaController;
use App\Models\Laporanjurnal;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware('checkLogin')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    //admin
    Route::middleware('role:admin')->prefix('/admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/listsiswa', [AdminController::class, 'listsiswa'])->name('listsiswa');
        Route::get('/izinsiswa', [AdminController::class, 'izinsiswa'])->name('izinsiswa');
        Route::get('/laporan/ketua', [AdminController::class, 'laporanketua'])->name('laporanketua');
        Route::get('/laporan/harian-siswa', [AdminController::class, 'laporanhariansiswa'])->name('laporanhariansiswa');
        Route::get('/riwayatizin', [RiwayatizinController::class, 'index'])->name('riwayatizin');
        Route::get('/feedback', [AdminController::class, 'feedback'])->name('feedback');
        Route::get('/pengumuman', [AdminController::class, 'pengumuman'])->name('pegumuman');
        Route::get('/kontak', [AdminController::class, 'kontak'])->name('kontak');
        Route::get('/absen', [AdminController::class, 'absen'])->name('absen');
        Route::get('/laporan/jurnal', [AdminController::class, 'jurnal'])->name('jurnal');
        Route::get('/laporan/jurnal/{sekolah_id}', [LaporanjurnalController::class, 'adminfiltersekolah'])->name('jurnal.filtersekolah');
        Route::get('/guru', [AdminController::class, 'guru'])->name('guru.index');
        Route::post('/guru', [GuruController::class, 'create'])->name('guru.create');
        Route::delete('/guru', [GuruController::class, 'delete'])->name('guru.delete');

        Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
        Route::post('/pengumuman', [PengumumanController::class, 'pengumumanStore'])->name('pengumuman.store');
        Route::delete('/pengumuman/{pengumuman}', [PengumumanController::class, 'hapusPengumuman'])->name('pengumuman.hapus');
        Route::put('/pengumuman/update/{pengumuman}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::post('/listsiswa', [SiswaController::class, 'create'])->name('siswa.create');
        Route::delete('/siswa/{user}', [AdminsiswaController::class, 'delete'])->name('siswa.delete');
        Route::put('/siswa/update', [AdminsiswaController::class, 'update'])->name('siswa.update');
        Route::get('/listsiswa/{sekolah}', [AdminController::class, 'siswatampilkanberdasarkansekolah'])->name('siswa.tampilkanberdasarkansekolah');
        Route::put('/guru', [GuruController::class, 'update'])->name('guru.update');
        Route::post('/izin/terima/{id}', [IzinController::class, 'terimaizin'])->name('izin.terima');
        Route::post('/izin/tolak/{id}', [IzinController::class, 'tolakizin'])->name('izin.tolak');
        Route::get('/riwayatizin/{sekolah_id}', [RiwayatizinController::class, 'filtersekolah'])->name('riwayat.filtersekolah');

        Route::get('/izinsiswa/{sekolah_id}', [IzinController::class, 'tampilkanberdasarkansekolah'])->name('izin.tampilkanberdasarkansekolah');
    });
    Route::get('/notifikasi/{notifikasi}', [NotifikasiController::class, 'ceknotif'])->name('notif');
    Route::get('/notifikasi', [NotifikasiController::class, 'sudahdibaca'])->name('sudahdibaca');

    Route::post('/jurnal/siswa', [JurnalController::class, 'store'])->name('jurnal.siswa.store');

    //pembimbing
    Route::middleware('role:pembimbing')->group(function () {
        Route::get('/pembimbing/dashboard', [PembimbingController::class, 'index'])->name('pembimbing.dashboard');
        Route::get('/pembimbing/listsiswa',[PembimbingController::class, 'listsiswa'])->name('pembimbing.listsiswa');
        Route::get('/pembimbing/izinsiswa',[PembimbingController::class, 'izinsiswa'])->name('pembimbing.izinsiswa');
        Route::post('/izin/terima/{id}', [izinPembimbingController::class, 'terimaizin'])->name('izin.terimaPembimbing');
        Route::post('/izin/tolak/{id}', [izinPembimbingController::class, 'tolakizin'])->name('izin.tolakPembimbing');
        Route::get('/izin/{sekolah_id}', [izinPembimbingController::class, 'tampilkanberdasarkansekolah'])->name('izin.tampilkanberdasarkansekolahpembimbing');
        Route::get('/pembimbing/laporanketua',[PembimbingController::class, 'laporanketua'])->name('pembimbing.laporanketua');
        Route::get('/pembimbing/laporanhariansiswa',[PembimbingController::class, 'laporanhariansiswa'])->name('pembimbing.laporanhariansiswa');
        Route::get('/pembimbing/laporanjurnalsiswa',[PembimbingController::class, 'laporanjurnalsiswa'])->name('pembimbing.laporanjurnalsiswa');
        Route::get('/pembimbing/riwayatsiswa',[RiwayatizinpembimbingController::class, 'index'])->name('pembimbing.riwayatsiswa');
        Route::get('/pembimbing/feedback',[PembimbingController::class, 'feedback'])->name('pembimbing.feedback');
        Route::get('/pembimbing/report',[PembimbingController::class, 'report'])->name('pembimbing.report');
        Route::get('/pembimbing/pengumpulanjurnal',[PembimbingController::class, 'pengumpulanjurnal'])->name('pembimbing.pengumpulanjurnal');
        Route::get('/pembimbing/laporanabsensiswa',[PembimbingController::class, 'laporanabsensiswa'])->name('pembimbing.laporanabsensiswa');
        Route::delete('/pembimbing/report/hapus/{user}', [reportPembimbing::class, 'hapusReport'])->name('pembimbing.report.hapus');
        Route::post('/pembimbing/balasReport', [reportPembimbing::class, 'balas'])->name('pembimbing.balasReport');
        Route::get('/listsiswa/{sekolah}', [PembimbingController::class, 'siswatampilkanberdasarkansekolahpembimbing'])->name('siswa.tampilkanberdasarkansekolahpembimbing');
        Route::get('/laporanJurnal/{sekolah}', [PembimbingController::class, 'siswatampilkanberdasarkansekolahjurnal'])->name('siswa.tampilkanberdasarkansekolahjurnal');
        Route::delete('/pembimbing/laporanJurnal/delete/{user}', [LaporanjurnalController::class, 'delete'])->name('pembimbing.laporanJurnal.delete');
        Route::get('/riwayatizin/{sekolah_id}', [RiwayatizinpembimbingController::class, 'filtersekolah'])->name('riwayat.filtersekolahpembimbing');
    });

    //guru
    Route::middleware('role:guru')->group(function () {
        Route::get('/guru/dashboard', [GuruController::class, 'index'])->name('guru.dashboard');
        Route::get('/guru/listsiswa', [GuruController::class, 'listsiswa'])->name('guru.listsiswa');
        Route::get('/guru/laporan/harian-siswa', [GuruController::class, 'laporanhariansiswa'])->name('guru.laporanhariansiswa');
        Route::get('/guru/laporan/jurnal', [GuruController::class, 'jurnal'])->name('guru.jurnal');
        Route::get('/guru/riwayatizin', [GuruController::class, 'riwayatizin'])->name('guru.riwayatizin');
        Route::get('/guru/absen', [GuruController::class, 'absen'])->name('guru.absen');
    });

    //ketua
    Route::middleware('role:ketua')->group(function () {
        Route::get('/ketua/dashboard', [KetuaController::class, 'index'])->name('ketua.dashboard');
        Route::get('/peraturan', [PeraturanController::class, 'index'])->name('ketua.peraturan.index');
        Route::get('ketua/laporanHarian', [KetuaController::class, 'lihatLaporanHarian'])->name('ketua.laporanHarian');
        Route::get('ketua/laporanHarian/{sekolah_id}', [KetuaController::class, 'lihatLaporanHarianfiltersekolah'])->name('ketua.laporanHarian.filtersekolah');
        Route::post('/peraturan/tambahPeraturan', [PeraturanController::class, 'tambahPeraturan'])->name('ketua.peratuan.tambahPeraturan');
        Route::put('/peraturan/editPeraturan/{id}', [PeraturanController::class, 'editPeraturan'])->name('ketua.peratuan.editPeraturan');
        Route::delete('/delete-peratuan/{id}', [PeraturanController::class, 'hapusPeraturan'])->name('ketua.peraturan.hapusPeratuan');
        Route::post('/ketua/tambahJadwalPiket', [KetuaController::class, 'tambahJadwalPiket'])->name('ketua.tambahJadwalPiket');
        Route::post('/ketua/buatReport', [reportPembimbing::class, 'buatReport'])->name('ketua.buatReport');
        Route::post('/ketua/buatLaporanKetua', [LaporanketuaController::class, 'create'])->name('ketua.buatLaporanKetua');
        Route::post('/ketua/buatJurnal', [LaporanjurnalController::class, 'create'])->name('ketua.buatJurnal');
        Route::post('/harian/kirim', [LaporanharianController::class, 'kirimlaporanharian'])->name('ketua.harian.kirim');
    });
    Route::post('/izin/store', [IzinController::class, 'store'])->name('izin.store');

    // Pengumuman
    Route::get('/pengumuman/ketua/{pengumuman}', [PengumumanController::class,'lihatPengumuman'])->name('pengumuman.detail');
    Route::get('/pengumuman/{pengumuman}', [PengumumanController::class,'lihatPengumumansiswa'])->name('pengumuman.detailsiswa');

    Route::post('/feedback/kirim', [FeedbackController::class, 'kirim'])->name('feedback.kirim');
    Route::delete('/feedback/hapus/{feedback}', [FeedbackController::class, 'hapus'])->name('feedback.hapus');
    Route::post('/feedback/balas', [FeedbackController::class, 'balas'])->name('feedback.balas');

    // Pengumpulan jurnal
    Route::get('/ketua/pengumpulanJurnal', [pengumpulanController::class,'pengumpulanJurnal'])->name('ketua.pengumpulan');

    //siswa
    Route::middleware('role:siswa')->prefix('/siswa')->name('siswa.')->group(function () {
        Route::get('/dashboard', [SiswaController::class, 'index'])->name('dashboard');
    });

});


