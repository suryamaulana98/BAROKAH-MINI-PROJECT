<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class RiwayatizinController extends Controller
{
    function index() {
        $sekolah = Sekolah::all();
        $izins = Izin::where('status', 'disetujui')->paginate(5);
        return view('admin.riwayat_izin', compact('izins', 'sekolah'));
    }

    function filtersekolah($sekolah_id) {
        $sekolah = Sekolah::all();
        $izins = Izin::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->paginate(5);
        return view('admin.riwayat_izin', compact('izins', 'sekolah'));
    }
}
