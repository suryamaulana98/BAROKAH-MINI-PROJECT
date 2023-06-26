<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        return view('siswa.dashboard_siswa', compact('kontak', 'pengumumans'));
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
    function update(Request $request) {
        // dd($request->all());
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required|min:3|max:50',
            'nisn' => 'required|min:10|max:15|unique:users,nisn,' . $request->user_id,
            'email' => 'required|email|min:5|max:30|unique:users,email,' . $request->user_id,
            'sekolah_id' => 'required',
            'role' => 'required',
            'awal_pkl' => 'required',
            'akhir_pkl' => 'required',
        ]);

        // $validator = Validator($request->all(), $rules);
        // if ($validator->fails()) {
        //     // dd($validator);
        //     return "Validasi gagal";

        // }
        $dataUpdate = [];
        if ($request->hasFile('foto_siswa')) {

            $dataUser = User::where('id', $request->user_id)->first();
            $filePath = public_path('img/' . $dataUser->foto_siswa);
            // dd($filePath);

            if (File::exists($filePath)) {
                File::delete($filePath);
                // return "Ada";
            }
            $fileFoto = $request->file('foto_siswa');
            $fileName = $fileFoto->hashName();
            $fileFoto->move('img', $fileName);

            $dataUpdate = [
                'name' => $request->name,
                'nisn' => $request->nisn,
                'email' => $request->email,
                'sekolah_id' => $request->sekolah_id,
                'role' => $request->role,
                'awal_pkl' => $request->awal_pkl,
                'akhir_pkl' => $request->akhir_pkl,
                'foto_siswa' => $fileName,
            ];
        }
        else {
            $dataUpdate = [
                'name' => $request->name,
                'nisn' => $request->nisn,
                'email' => $request->email,
                'sekolah_id' => $request->sekolah_id,
                'role' => $request->role,
                'awal_pkl' => $request->awal_pkl,
                'akhir_pkl' => $request->akhir_pkl,
            ];
        }

        if (User::find($request->user_id)->update($dataUpdate)) {
            return back()->with('success', 'Berhasil memperbarui siswa');
        } else {
            return back()->with('erro', 'Gagal memperbarui siswa');
        }

        // $modelUser = User::find($request->user_id)->update();
    }
}
