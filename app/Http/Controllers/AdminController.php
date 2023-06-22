<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Kontak;
use App\Models\Pengumuman;
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
        $feedbacks = Feedback::all();
        return view('admin.halaman_feedback', compact('feedbacks'));
    }
    function pengumuman() {
        $pengumumans = Pengumuman::all();
        return view('admin.halaman_pengumuman', compact('pengumumans'));
    }
    function kontak() {
        $kontak = Kontak::first();
        return view('admin.kontak', compact('kontak'));
    }
    function absen() {
        return view('admin.absen');
    }
    function jurnal() {
        return view('admin.jurnal');
    }
}
