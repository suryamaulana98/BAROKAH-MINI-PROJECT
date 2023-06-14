<?php

namespace App\Http\Controllers;

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
        return view('pembimbing.laporan_siswa');
    }
    function laporanjurnalsiswa(){
        return view('pembimbing.izin_siswa');
    }
    function riwayatsiswa(){
        return view('pembimbing.riwayat_siswa');
    }
    function feedback(){
        return view('pembimbing.feedback');
    }
    function report(){
        return view('pembimbing.report');
    }
    function cik(){
        return view('pembimbing.izin_siswa');
    }
}
