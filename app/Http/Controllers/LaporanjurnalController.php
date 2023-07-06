<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sekolah;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Models\Laporanjurnal;

class LaporanjurnalController extends Controller
{
    public function adminfiltersekolah(Request $request,$sekolah_id) {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $laporanjurnals = Laporanjurnal::whereHas('user', function ($query) use ($keyword, $sekolah_id) {
                $query->where([['sekolah_id', $sekolah_id], ['name', 'LIKE', '%'.$keyword.'%']]);
            })->get();
            return view('pembimbing.laporan_jurnal', compact('laporanjurnals', 'sekolah', 'notifikasi'));
        }
        $laporanjurnals = Laporanjurnal::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->get();
        return view('pembimbing.laporan_jurnal', compact('laporanjurnals', 'sekolah', 'notifikasi'));
    }

    function create(Request $request) {
        $validatedData = $this->validate($request,[
            'user_id' => 'required',
            'tanggal' => 'required',
            'kegiatan' => 'required|min:5|max:1000',
        ]);
        //  dd($validatedData);
         Laporanjurnal::create($validatedData);
         return back()->with('success', 'Berhasil');
    }

    function delete(String $id){
        $user = Laporanjurnal::findorfail($id);
        if ($user->delete()) {
            return back()->with('success', 'Berhasil menghapus jurnal');
        }
        else {
            return back()->with('error', 'Gagal menghapus jurnal');
        }
    }

}
