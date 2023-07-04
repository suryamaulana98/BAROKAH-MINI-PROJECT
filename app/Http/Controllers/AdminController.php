<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Hariansiswa;
use App\Models\Izin;
use App\Models\Kontak;
use App\Models\Laporanjurnal;
use App\Models\Laporanketua;
use App\Models\Notifikasi;
use App\Models\Pengumuman;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        $jumlahSiswaMagang = User::where('role', 'ketua')->orWhere('role', 'siswa')->count();
        $jumlahPermintaanIzin = Izin::where('status', 'menunggu')->count();
        $jumlahIzinDisetujui = Izin::where('status', 'disetujui')->count();
        $jumlahIzinDitolak = Izin::where('status', 'ditolak')->count();
        $notifikasi = Notifikasi::where('baca', null)->get();
        return view('admin.dashboard_admin', compact('jumlahSiswaMagang', 'jumlahPermintaanIzin', 'jumlahIzinDisetujui', 'jumlahIzinDitolak', 'notifikasi'));
    }
    function listsiswa() {
        $users = User::where('role', 'ketua')->orWhere('role', 'siswa')->get();
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        return view('admin.list_siswa', compact('users', 'sekolah', 'notifikasi'));
    }
    function siswatampilkanberdasarkansekolah($sekolah) {
        $notifikasi = Notifikasi::all();
        $users = User::where([
            ['role', '=', 'siswa'],
            ['sekolah_id', '=', $sekolah],
        ])->orWhere([
            ['role', '=', 'ketua'],
            ['sekolah_id', '=', $sekolah],
        ])->get();
        $sekolah = Sekolah::all();
        // dd($sekolah);
        return view('admin.list_siswa', compact('users', 'sekolah', 'notifikasi'));
    }
    function izinsiswa() {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        $izins = Izin::orderBy('status', 'DESC')->get();
        return view('admin.laporan_izin', compact('sekolah', 'izins', 'notifikasi'));
    }
    function laporanketua() {
        $laporanketuas = Laporanketua::all();
        $notifikasi = Notifikasi::all();
        return view('admin.laporan_ketua', compact('laporanketuas', 'notifikasi'));
    }
    function laporanhariansiswa() {
        $notifikasi = Notifikasi::all();
        $hariansiswas = Hariansiswa::paginate(1);
        return view('admin.laporan_harian_siswa', compact('hariansiswas', 'notifikasi'));
    }
    function feedback() {
        $feedbacks = Feedback::paginate(8);
        $notifikasi = Notifikasi::all();
        return view('admin.halaman_feedback', compact('feedbacks', 'notifikasi'));
    }
    function pengumuman() {
        $pengumumans = Pengumuman::all();
        $notifikasi = Notifikasi::all();
        return view('admin.halaman_pengumuman', compact('pengumumans', 'notifikasi'));
    }
    function kontak() {
        $kontak = Kontak::first();
        $notifikasi = Notifikasi::all();
        return view('admin.kontak', compact('kontak', 'notifikasi'));
    }
    function absen() {
        $notifikasi = Notifikasi::all();
        return view('admin.absen', compact('notifikasi'));
    }
    function jurnal() {
        $laporanjurnals = Laporanjurnal::all();
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        return view('admin.jurnal', compact('laporanjurnals', 'sekolah', 'notifikasi'));
    }
    function guru() {
        $gurus = User::where('role', 'guru')->get();
        $notifikasi = Notifikasi::all();
        return view('admin.guru', compact('gurus', 'notifikasi'));
    }
}
