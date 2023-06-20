<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    function index() {
        return view('ketua.buat_peraturan');
    }
}
