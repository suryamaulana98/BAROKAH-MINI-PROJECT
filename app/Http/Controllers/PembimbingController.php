<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    function index() {



        return view('pembimbing.dashboard_pembimbing');
    }
    function listsiswa(){
        return view('pembimbing.list_siswapembimbing');
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
