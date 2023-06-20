<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KetuaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        return view('ketua.dashboard_ketua', compact('kontak'));
    }

}
