<?php

namespace App\Http\Controllers;

use App\Models\jadwal_piket;
use App\Models\Kontak;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class KetuaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        $jadwal_piket = jadwal_piket::all();
        return view('ketua.dashboard_ketua', compact('kontak', 'pengumumans', 'jadwal_piket'));
    }

    function lihatLaporanHarian() {
        return view('ketua.laporan_harian');
    }

    function tambahJadwalPiket(Request $request){
        $this->validate($request,[
            'jadwal_pagi' => 'required',
            'jadwal_sore' => 'required',
            'deskripsi_piket' => 'required',
        ]);

        // upload image
        $image1 = $request->file('jadwal_pagi');
        $image2 = $request->file('jadwal_sore');

        $image1->storeAs('ketua/assets/img', $image1->hashName());
        $image2->storeAs('ketua/assets/img', $image2->hashName());

        // create data
        jadwal_piket::create([
            'jadwal_pagi' => $image1->hashName(),
            'jadwal_sore' => $image2->hashName(),
            'deskripsi_piket' => $request->deskripsi_piket,
        ]);

        return redirect()->back();

    }

}
