<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporanketua extends Controller
{
    function create(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'tanggal' => 'required',
            'link_pekerjaan' => 'required|min:5|max:50',
        ]);
    }
}
