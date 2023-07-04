<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Notifikasi;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class RiwayatizinController extends Controller
{
    function index(Request $request) {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $izins = Izin::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'. $keyword .'%');
            })->where('status', 'disetujui')->get();
           return view('admin.riwayat_izin', compact('izins', 'notifikasi', 'sekolah'));
        }
        $izins = Izin::where('status', 'disetujui')->paginate(5);
        return view('admin.riwayat_izin', compact('izins', 'notifikasi', 'sekolah'));
    }

    function filtersekolah(Request $request,$sekolah_id) {
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $izins = Izin::whereHas('user', function ($query) use ($keyword, $sekolah_id)   {
                $query->where([['sekolah_id', $sekolah_id], ['name', 'LIKE', '%'.$keyword.'%']]);
            })->where('status', 'disetujui')->orderBy('status', 'DESC')->get();
            $sekolah = Sekolah::all();
            return view('admin.riwayat_izin', compact('sekolah', 'izins', 'notifikasi'));
        }

        $izins = Izin::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->where('status', 'disetujui')->orderBy('status', 'DESC')->get();
        // dd($sekolah);
        $sekolah = Sekolah::all();
        return view('admin.riwayat_izin', compact('sekolah', 'izins', 'notifikasi'));
    }
}
