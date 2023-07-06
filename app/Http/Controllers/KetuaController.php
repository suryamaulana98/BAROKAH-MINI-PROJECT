<?php

namespace App\Http\Controllers;

use App\Models\Hariansiswa;
use App\Models\jadwal_piket;
use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\peraturan;
use App\Models\Sekolah;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KetuaController extends Controller
{
    function index() {
        $peraturan = peraturan::all();
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        $jadwal_piket = jadwal_piket::first();
        $users = User::where('role', 'siswa')->orWhere('role', 'ketua')->whereNotIn('id', [Auth::user()->id])->get();
        return view('ketua.dashboard_ketua', compact('kontak', 'pengumumans', 'jadwal_piket','peraturan','users'));
    }

    function lihatLaporanHarian(Request $request) {
        $sekolah = Sekolah::all();
        $sekarang = Carbon::now()->format('Y-m-d');
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $hariansiswas = Hariansiswa::whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            })->where('tanggal', $sekarang)->get();
            return view('ketua.laporan_harian', compact('hariansiswas', 'sekolah'));
        }
        // dd($sekarang);
        $hariansiswas = Hariansiswa::where('tanggal', $sekarang)->get();
        return view('ketua.laporan_harian', compact('hariansiswas', 'sekolah'));
    }

    function lihatLaporanHarianfiltersekolah($sekolah_id, Request $request) {
        $sekarang = Carbon::now()->format('Y-m-d');
        $sekolah = Sekolah::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $hariansiswas = Hariansiswa::whereHas('user', function ($query) use ($keyword, $sekolah_id) {
                $query->where([['sekolah_id', $sekolah_id], ['name', 'LIKE', '%'.$keyword.'%']]);
            })->where('tanggal', $sekarang)->get();
            return view('ketua.laporan_harian', compact('hariansiswas', 'sekolah'));
        }
        $hariansiswas = Hariansiswa::whereHas('user', function ($query) use ($sekarang, $sekolah_id) {
            $query->where([['tanggal', $sekarang],['sekolah_id', $sekolah_id]]);
        })->get();
        return view('ketua.laporan_harian', compact('hariansiswas', 'sekolah'));
    }

    function tambahJadwalPiket(Request $request){
        $this->validate($request,[
            'jadwal_pagi' => 'required',
            'jadwal_sore' => 'required',
            'deskripsi_piket' => 'required',
        ]);

        $fileFoto1 = $request->file('jadwal_pagi');
        $fileFoto2 = $request->file('jadwal_sore');
            $fileName1 = $fileFoto1->hashName();
            $fileName2 = $fileFoto2->hashName();
            $fileFoto1->move('jadwalPiket', $fileName1);
            $fileFoto2->move('jadwalPiket', $fileName2);

            $data = [
                'jadwal_pagi' => $fileName1,
                'jadwal_sore' => $fileName2,
                'deskripsi_piket' => $request->deskripsi_piket,
            ];

            $jadwal_piket = jadwal_piket::count();
            if ($jadwal_piket == 0) {
                jadwal_piket::create($data);
                return "success";
            } else {
                jadwal_piket::truncate();
                jadwal_piket::create($data);
                return "success";
            }

    }

}
