<?php

namespace App\Http\Controllers;

use App\Models\Hariansiswa;
use Illuminate\Http\Request;

class LaporanharianController extends Controller
{
    function kirimlaporanharian(Request $request) {
        foreach ($request->user_id as $user_id) {
            Hariansiswa::create([
                'user_id' => $user_id,
                'kategori' => $request->kategori,
                'tanggal' => $request->tanggal,
                'link_dokumen' => $request->link_dokumen,
                'nama_kelompok' => $request->nama_kelompok,
            ]);
        }
        return back()->with('success', 'Berhasil mengirim laporan');
    }
}
