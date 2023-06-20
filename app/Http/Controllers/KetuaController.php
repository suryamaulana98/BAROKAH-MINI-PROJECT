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

}
