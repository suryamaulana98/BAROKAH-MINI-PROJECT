<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    function kirim(Request $request) {
        dd($request->all());
    }
}
