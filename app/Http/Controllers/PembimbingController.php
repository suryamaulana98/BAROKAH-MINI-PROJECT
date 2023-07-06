<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\User;
use App\Models\Report;
use App\Models\Sekolah;
use App\Models\Feedback;
use App\Models\Statistik;
use App\Models\Notifikasi;
use App\Models\Laporanketua;
use Illuminate\Http\Request;
use App\Models\Laporanjurnal;

class PembimbingController extends Controller
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
        return view('pembimbing.dashboard_pembimbing', compact('jumlahSiswaMagang', 'jumlahPermintaanIzin', 'jumlahIzinDisetujui', 'jumlahIzinDitolak', 'notifikasi', 'dataTanggal', 'dataAcarakeluarga', 'dataSakit', 'dataDarurat'));
    }
    function listsiswa(Request $request){
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            // dd($keyword);
            $users = User::where([['role', 'ketua'], ['name', 'LIKE', '%'.$keyword.'%']])->orWhere([['role', 'siswa'], ['name', 'LIKE', '%'.$keyword.'%']])->get();
            $users->append(['cari' => $keyword]);
            // session(['cari' => $keyword]);
            return view('pembimbing.list_siswapembimbing', compact('users', 'sekolah', 'notifikasi'));

        }
        $users = User::where('role', 'ketua')->orWhere('role', 'siswa')->get();
        return view('pembimbing.list_siswapembimbing', compact('users', 'sekolah', 'notifikasi'));
    }
    function siswatampilkanberdasarkansekolahpembimbing($sekolah) {
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
        return view('pembimbing.list_siswapembimbing', compact('users', 'sekolah', 'notifikasi'));
    }

    function siswatampilkanberdasarkansekolahjurnal($sekolah) {
        $notifikasi = Notifikasi::all();
        $jurnal = Laporanjurnal::whereHas('user', function ($query) use ($sekolah) {
            $query->where('sekolah_id', $sekolah);
        })->get();
        $users = User::where([
            ['role', '=', 'siswa'],
            ['sekolah_id', '=', $sekolah],
        ])->orWhere([
            ['role', '=', 'ketua'],
            ['sekolah_id', '=', $sekolah],
        ])->get();
        $sekolah = Sekolah::all();
        // dd($sekolah);
        return view('pembimbing.laporan_jurnal', compact('users', 'jurnal', 'sekolah', 'notifikasi'));
    }

    function izinsiswa(Request $request){
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $izins = Izin::whereHas('user', function ($query) use ($keyword)   {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->orderBy('status', 'DESC')->get();
           return view('pembimbing.izin_siswa', compact('sekolah', 'izins', 'notifikasi'));
        }
        $izins = Izin::orderBy('status', 'DESC')->get();
        return view('pembimbing.izin_siswa', compact('sekolah', 'izins', 'notifikasi'));
    }
    function laporanketua(Request $request){
        $users = User::all();
        $notifikasi = Notifikasi::all();
        $laporan = Laporanketua::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $laporan = Laporanketua::whereHas('user', function ($query) use ($keyword)   {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
           return view('pembimbing.laporan_ketua', compact( 'laporan', 'notifikasi'));
        }
        return view('pembimbing.laporan_ketua', compact('laporan','users','notifikasi'));
    }
    function laporanhariansiswa(){
        
        return view('pembimbing.laporan_harian');
    }
    function laporanjurnalsiswa(Request $request){
        $users = User::all();   
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        $jurnal = Laporanjurnal::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $jurnal = Laporanjurnal::whereHas('user', function ($query) use ($keyword)   {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
           return view('pembimbing.laporan_jurnal', compact('jurnal','sekolah','notifikasi','users'));
        }
        return view('pembimbing.laporan_jurnal', compact('jurnal','sekolah','notifikasi','users'));
    }
    function riwayatsiswa(Request $request){
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $izins = Izin::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'. $keyword .'%');
            })->where('status', 'disetujui')->get();
           return view('pembimbing.riwayat_siswa', compact('izins', 'notifikasi', 'sekolah'));
        }
        $izins = Izin::where('status', 'disetujui')->paginate(5);
        return view('pembimbing.riwayat_siswa', compact('izins', 'notifikasi', 'sekolah')); return view('pembimbing.riwayat_siswa');
    }

    function feedback(Request $request){
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $feedbacks = Feedback::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
            return view('pembimbing.feedback', compact('feedbacks', 'notifikasi'));
        }
        $feedbacks = Feedback::paginate(8);
        return view('pembimbing.feedback', compact('feedbacks', 'notifikasi'));
    }
    function report(Request $request){
        $report = Report::all();
        $users = User::all();   
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $report = Report::whereHas('user', function ($query) use ($keyword)   {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->get();
           return view('pembimbing.report', compact('report','sekolah','notifikasi','users'));
        }
        return view('pembimbing.report', compact('report','sekolah','notifikasi','users'));
    }
  
    function pengumpulanjurnal(){
        return view('pembimbing.pengumpulan_jurnal');
    }
    function laporanabsensiswa(){
        return view('pembimbing.laporan_absen');
    }
}
