<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        return view('siswa.dashboard_siswa', compact('kontak', 'pengumumans'));
    }
}
