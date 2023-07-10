<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hariansiswa;
use Illuminate\Http\Request;

class LaporanharianController extends Controller
{

function kirimlaporanharian(Request $request) {
    $today = Carbon::now()->format('Y-m-d');
    $user_id = $request->user_id;

    $existingReport = Hariansiswa::where('tanggal', $today)
        ->where('user_id', $user_id)
        ->exists();

    if ($existingReport) {
        return back()->with('error', 'Anda sudah mengirim laporan pada hari ini');
    }

    foreach ($user_id as $id) {
        Hariansiswa::create([
            'user_id' => $id,
            'kategori' => $request->kategori,
            'tanggal' => $today,
            'link_dokumen' => $request->link_dokumen,
            'nama_kelompok' => $request->nama_kelompok,
        ]);
    }

    return back()->with('success', 'Berhasil mengirim laporan');
}

}
