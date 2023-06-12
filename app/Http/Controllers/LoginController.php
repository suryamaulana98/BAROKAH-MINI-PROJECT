<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('login.halaman_login');
    }

    public function store(Request $request) {
        // dd($request->all());
        $remember = $request->has('remember');
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);
        if (Auth::attempt($validatedData, $remember)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else if (Auth::user()->role == 'pembimbing') {
                return redirect()->route('pembimbing.dashboard');
            } else if (Auth::user()->role == 'ketua') {
                return redirect()->route('ketua.dashboard');
            } else if (Auth::user()->role == 'siswa') {
                return redirect()->route('siswa.dashboard');
            }
        }
        return "Gagal login";
    }
    public function logout() {
        Auth::guard('web')->logout();

        return redirect('/login');
    }
}
