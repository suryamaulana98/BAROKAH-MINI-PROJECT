<?php

namespace App\Http\Controllers;

use App\Models\pengumpulan_jurnal;
use Illuminate\Http\Request;

class pengumpulanController extends Controller
{
    function pengumpulanJurnal() {
        return view('ketua.pengumpulan_jurnal');
    }
}
