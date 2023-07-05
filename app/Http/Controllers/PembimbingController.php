<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Laporanjurnal;
use App\Models\User;
use App\Models\Report;
use App\Models\Sekolah;
use App\Models\Notifikasi;
use App\Models\Laporanketua;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    function index() {



        return view('pembimbing.dashboard_pembimbing');
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
    function laporanjurnalsiswa(){
        $jurnal = Laporanjurnal::all();
        return view('pembimbing.laporan_jurnal', compact('jurnal'));
    }
    function riwayatsiswa(){
        return view('pembimbing.riwayat_siswa');
    }
    function feedback(){
        return view('pembimbing.feedback');
    }
    function report(){
        $report = Report::all();
        return view('pembimbing.report', compact('report'));
    }
  
    function pengumpulanjurnal(){
        return view('pembimbing.pengumpulan_jurnal');
    }
    function laporanabsensiswa(){
        return view('pembimbing.laporan_absen');
    }
}
