<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class KetuaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        return view('ketua.dashboard_ketua', compact('kontak', 'pengumumans'));
    }

    function lihatLaporanHarian() {
        return view('ketua.laporan_harian');
    }

    function tambahJadwalPiket(){
        
        return view('ketua.dashboard');
    }

}
