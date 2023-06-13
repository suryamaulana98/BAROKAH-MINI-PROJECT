<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('admin.dashboard_admin');
    }
    function listsiswa() {
        return view('admin.list_siswa');
    }
    function izinsiswa() {
        return view('admin.laporan_izin');
    }
    function laporanketua() {
        return view('admin.laporan_ketua');
    }
    function laporanhariansiswa() {
        return view('admin.laporan_harian_siswa');
    }
    function riwayatizin() {
        return view('admin.riwayat_izin');
    }
    function feedback() {
        return view('admin.halaman_feedback');
    }
    function pengumuman() {
        return view('admin.halaman_pengumuman');
    }
    function kontak() {
        return view('admin.kontak');
    }
    function absen() {
        return view('admin.absen');
    }
}
