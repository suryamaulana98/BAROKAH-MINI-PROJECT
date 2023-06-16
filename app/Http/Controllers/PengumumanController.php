<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    function pengumumanStore(Request $request) {
        // dd($request->all());
        $validatedData = $request->validate([
            'judul_pengumuman' => 'required|min:3',
            'isi_pengumuman' => 'required|min:5',
            'tanggal_pengumuman' => 'required',
        ]);
        Pengumuman::create($validatedData);
        return back()->with('berhasilTambah', 'Berhasil menambah pengumuman');
    }
    function hapusPengumuman(Pengumuman $pengumuman) {
        if ($pengumuman->delete()) {
            return back()->with('berhasilMenghapus', 'Berhasil menghapus pengumuman');
        } else {
            return back()->withErrors(['errorHapus' => 'Gagal menghapus pengumuman']);
        }
    }
}
