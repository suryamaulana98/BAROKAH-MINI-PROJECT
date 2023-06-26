<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class RiwayatIzin extends Controller
{
    function index() {
        $sekolah = Sekolah::all();
        $izins = Izin::where('status', 'disetujui')->paginate(5);
        return view('admin.riwayat_izin', compact('izins'));
    }

    function filtersekolah($sekolah) {
        $izins = Izin::whereHas('user', function ($query) use ($sekolah) {
            $query->where('sekolah_id', $sekolah);
        })->paginate(5);
        return view('admin.riwayat_izin', compact('izins'));
    }
}
