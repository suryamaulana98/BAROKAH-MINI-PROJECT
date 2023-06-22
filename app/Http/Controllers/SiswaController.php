<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        return view('siswa.dashboard_siswa', compact('kontak', 'pengumumans'));
    }
    function create(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3|max:50',
            'nisn' => 'required|min:10|max:15|unique:users,nisn',
            'email' => 'required|email|min:5|max:30',
            'asal_sekolah' => 'required|min:5|max:30',
            'role' => 'required',
            'awal_pkl' => 'required',
            'akhir_pkl' => 'required',
            'foto_siswa' => 'required|mimes:jpg,jpeg,png|max:10240',
        ]);
        $passwordUser = Str::random(6);
        $fileFoto = $request->file('foto_siswa');
        $fileName = $fileFoto->hashName();
        $fileFoto->move('img', $fileName);
        $dataUser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($passwordUser),
            'role' => $request->role,
            'nisn' => $request->nisn,
            'asal_sekolah' => $request->asal_sekolah,
            'awal_pkl' => $request->awal_pkl,
            'akhir_pkl' => $request->akhir_pkl,
            'foto_siswa' => $fileName,
        ];
        $modelUser = User::create($dataUser);
        if ($modelUser) {
            return back()->with('success', 'Berhasil membuat siswa baru, password : ' . $passwordUser);
        }
        return back()->with('error', 'Gagal membuat siswa baru');
    }
    function delete(User $user) {
        if ($user->delete()) {
            return back()->with('success', 'Berhasil menghapus siswa');
        }
        else {
            return back()->with('error', 'Gagal menghapus siswa');
        }
    }
}
