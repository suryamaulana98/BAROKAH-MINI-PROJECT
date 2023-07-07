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
use App\Models\Siswa;
use App\Models\Statistik;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        $statistik = Statistik::orderBy('id', 'DESC')->limit(12)->get();
        $dataTanggal = [];
        $dataSakit = [];
        $dataAcarakeluarga = [];
        $dataDarurat = [];
        foreach ($statistik as $s) {
            array_push($dataTanggal, $s->tanggal);
            array_push($dataAcarakeluarga, $s->jumlah_acara_keluarga);
            array_push($dataSakit, $s->jumlah_sakit);
            array_push($dataDarurat, $s->jumlah_darurat);
        }
        // $tanggal = Carbon::parse('2023-04-03')->format('M Y');
        // dd($dataTanggal, $dataSakit, $dataAcarakeluarga, $dataDarurat);
        $jumlahSiswaMagang = User::where('role', 'ketua')->orWhere('role', 'siswa')->count();
        $jumlahPermintaanIzin = Izin::where('status', 'menunggu')->count();
        $jumlahIzinDisetujui = Izin::where('status', 'disetujui')->count();
        $jumlahIzinDitolak = Izin::where('status', 'ditolak')->count();
        $notifikasi = Notifikasi::where('baca', null)->get();
        return view('admin.dashboard_admin', compact('jumlahSiswaMagang', 'jumlahPermintaanIzin', 'jumlahIzinDisetujui', 'jumlahIzinDitolak', 'notifikasi', 'dataTanggal', 'dataAcarakeluarga', 'dataSakit', 'dataDarurat'));
    }
    function listsiswa(Request $request) {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        $izins = Izin::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            // dd($keyword);
            $users = User::where([['role', 'ketua'], ['name', 'LIKE', '%'.$keyword.'%']])->orWhere([['role', 'siswa'], ['name', 'LIKE', '%'.$keyword.'%']])->get();
            $users->append(['cari' => $keyword]);
            // session(['cari' => $keyword]);
            return view('admin.list_siswa', compact('users', 'sekolah', 'notifikasi'));

        }
        $users = User::where('role', 'ketua')->orWhere('role', 'siswa')->get();
        return view('admin.list_siswa', compact('users', 'sekolah', 'notifikasi'));
    }
    function siswatampilkanberdasarkansekolah(Request $request,$sekolah) {
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            // dd($keyword);
            $users = User::where([['role', 'ketua'], ['name', 'LIKE', '%'.$keyword.'%'], ['sekolah_id', $sekolah]])->orWhere([['role', 'siswa'], ['name', 'LIKE', '%'.$keyword.'%'],['sekolah_id', $sekolah]])->get();
            $users->append(['cari' => $keyword]);
            // session(['cari' => $keyword]);
            $sekolah = Sekolah::all();
            return view('admin.list_siswa', compact('users', 'sekolah', 'notifikasi'));
        }
        $users = User::where([
            ['role', '=', 'siswa'],
            ['sekolah_id', '=', $sekolah],
        ])->orWhere([
            ['role', '=', 'ketua'],
            ['sekolah_id', '=', $sekolah],
        ])->get();
        // dd($sekolah);
        $sekolah = Sekolah::all();
        return view('admin.list_siswa', compact('users', 'sekolah', 'notifikasi'));
    }
    function izinsiswa(Request $request) {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $izins = Izin::whereHas('user', function ($query) use ($keyword)   {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->orderBy('status', 'DESC')->get();
           return view('admin.laporan_izin', compact('sekolah', 'izins', 'notifikasi'));
        }
        $izins = Izin::orderBy('status', 'DESC')->get();
        return view('admin.laporan_izin', compact('sekolah', 'izins', 'notifikasi'));
    }
    function laporanketua(Request $request) {
        $notifikasi = Notifikasi::all();

        if ($request->has('cari')) {
            $keyword = $request->cari;
            $laporanketuas = Laporanketua::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
            return view('admin.laporan_ketua', compact('laporanketuas', 'notifikasi'));

        }
        $laporanketuas = Laporanketua::all();
        return view('admin.laporan_ketua', compact('laporanketuas', 'notifikasi'));
    }
    function laporanhariansiswa(Request $request) {
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $hariansiswas = Hariansiswa::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->latest()->get();
            return view('admin.laporan_harian_siswa', compact('hariansiswas', 'notifikasi'));
        }
        $hariansiswas = Hariansiswa::latest()->get();
        return view('admin.laporan_harian_siswa', compact('hariansiswas', 'notifikasi'));
    }
    function feedback(Request $request) {
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $feedbacks = Feedback::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
            return view('admin.halaman_feedback', compact('feedbacks', 'notifikasi'));
        }
        $feedbacks = Feedback::paginate(8);
        return view('admin.halaman_feedback', compact('feedbacks', 'notifikasi'));
    }
    function pengumuman(Request $request) {
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $pengumumans = Pengumuman::where('judul_pengumuman', 'LIKE', '%'.$keyword.'%')->get();
            return view('admin.halaman_pengumuman', compact('pengumumans', 'notifikasi'));
        }
        $pengumumans = Pengumuman::all();
        return view('admin.halaman_pengumuman', compact('pengumumans', 'notifikasi'));
    }
    function kontak() {
        $kontak = Kontak::first();
        $notifikasi = Notifikasi::all();
        return view('admin.kontak', compact('kontak', 'notifikasi'));
    }
    function absen() {
        $notifikasi = Notifikasi::all();
        $sekolah = Sekolah::all();
        $siswas = User::where('role', 'ketua')->orWhere('role', 'ketua')->get();
        return view('admin.absen', compact('notifikasi', 'sekolah', 'siswas'));
    }
    function jurnal(Request $request) {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $laporanjurnals = Laporanjurnal::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
            return view('admin.jurnal', compact('laporanjurnals', 'sekolah', 'notifikasi'));

        }
        $laporanjurnals = Laporanjurnal::all();
        return view('admin.jurnal', compact('laporanjurnals', 'sekolah', 'notifikasi'));
    }
    function guru(Request $request) {
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            // dd($keyword);
            $gurus = User::where([['role', 'guru'], ['name', 'LIKE', '%'.$keyword.'%']])->get();
            $gurus->append(['cari' => $keyword]);
            return view('admin.guru', compact('gurus', 'notifikasi'));
        }
        $gurus = User::where('role', 'guru')->get();
        return view('admin.guru', compact('gurus', 'notifikasi'));
    }
}
