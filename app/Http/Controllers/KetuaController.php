<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetuaController extends Controller
{
    function index() {
        return view('ketua.dashboard_ketua');
    }
   
}
