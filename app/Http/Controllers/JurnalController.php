<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurnalController extends Controller
{
    function store(Request $request) {
        dd($request->all());
    }
}
