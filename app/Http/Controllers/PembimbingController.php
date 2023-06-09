<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    function index() {
        return view('pembimbing.dashboard_pembimbing');
    }
}
