<?php

namespace App\Http\Controllers;

use App\Models\Laporanketua;
use Illuminate\Http\Request;

class LaporanketuaController extends Controller
{
    function create(Request $request) {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tanggal' => 'required',
            'link_pekerjaan' => 'required|min:5|max:50',
        ]);

        if (Laporanketua::create($validatedData)) {
            return back()->with('success', 'Berhasil mengirim laporan');
        }
        else {
            return back()->with('error', 'Gagal mengirim laporan');
        }
    }
}
