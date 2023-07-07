<?php

namespace App\Http\Controllers;

use App\Models\Laporanketua;
use Illuminate\Http\Request;

class LaporanketuaController extends Controller
{
    function create(Request $request) {
        $validatedData = $this->validate($request,[
            'user_id' => 'required',
            'tanggal' => 'required',
            'link_pekerjaan' => 'required|min:5|max:100',
        ]);
        // dd($validatedData);
        Laporanketua::create($validatedData);
        // return back()->with('success', 'Berhasil');
        return "success";
    }
}
