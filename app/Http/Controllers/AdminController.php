<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('admin.dashboard_admin');
    }
    function listsiswa() {
        $users = User::where('role', 'ketua')->orWhere('role', 'siswa')->get();
        $sekolah = Sekolah::all();
        return view('admin.list_siswa', compact('users', 'sekolah'));
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
    function guru() {
        $gurus = User::where('role', 'guru')->get();
        return view('admin.guru', compact('gurus'));
    }
}
