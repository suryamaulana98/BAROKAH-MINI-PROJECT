<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.halaman_login');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|password|min:6',
        ]);
        if (Auth::attempt($validatedData)) {
            return "Berhasil login";
        }
        return "Gagal login";
    }
}
