<?php

namespace App\Http\Controllers;

use App\Mail\UserDataLogin;
use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\User;
use App\Notifications\DataUser;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        return view('siswa.index', compact('kontak', 'pengumumans'));
    }
    function create(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'nisn' => 'required|min:10|max:15|unique:users,nisn',
            'email' => 'required|email|min:5|max:30',
            'sekolah_id' => 'required',
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
            'sekolah_id' => $request->sekolah_id,
            'awal_pkl' => $request->awal_pkl,
            'akhir_pkl' => $request->akhir_pkl,
            'foto_siswa' => $fileName,
        ];
        // dd($dataUser);
        $modelUser = User::create($dataUser);
        if ($modelUser) {
            $datax = [
                'email' => $request->email,
                'password' => $passwordUser
            ];
            // User::find($modelUser->id)->notify(new DataUser());
            Mail::to($request->email)->send(new UserDataLogin($datax));
            return back()->with('success', 'Berhasil membuat siswa baru, password : ' . $passwordUser);
        }
        return back()->with('error', 'Gagal membuat siswa baru');
    }

}
