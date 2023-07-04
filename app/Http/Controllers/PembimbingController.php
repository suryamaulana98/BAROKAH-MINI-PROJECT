<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\Sekolah;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    function index() {



        return view('pembimbing.dashboard_pembimbing');
    }
    function listsiswa(){
        $users = User::where('role', 'ketua')->orWhere('role', 'siswa')->get();
        $sekolah = Sekolah::all();
        return view('pembimbing.list_siswapembimbing', compact('users', 'sekolah'));
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
    function izinsiswa(){
        return view('pembimbing.izin_siswa');
    }
    function laporanketua(){
        return view('pembimbing.laporan_ketua');
    }
    function laporanhariansiswa(){
        return view('pembimbing.laporan_harian');
    }
    function laporanjurnalsiswa(){
        return view('pembimbing.laporan_jurnal');
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
