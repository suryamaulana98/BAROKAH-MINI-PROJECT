<?php

namespace App\Http\Controllers;

use App\Models\pengumpulan_jurnal;
use App\Models\User;
use Illuminate\Http\Request;

class pengumpulanController extends Controller
{
    function pengumpulanJurnal() {
        $siswas = User::where('role', 'siswa')->get();
        return view('ketua.pengumpulan_jurnal', compact('siswas'));
    }
    function store(Request $request) {
    dd($request->all());
    }
}
