<?php

namespace App\Http\Controllers;

use App\Mail\UserDataLogin;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    function index() {
        return view('guru.dashboard_guru');
    }
    function listsiswa(User $user) {
        $guru = $user->sekolah_id;

        $siswas = User::where([['sekolah_id', $guru], ['role', 'siswa']])->where([['sekolah_id', $guru], ['role', 'ketua']])->latest()->paginate(5);

        $users = User::latest()->paginate(5);
        return view('guru.list_siswa',compact('users','user','siswas'));
    }
    function laporanhariansiswa() {
        return view('guru.laporan_harian_siswa');
    }
    function laporanjurnalsiswa() {
        return view('guru.laporan_jurnal_siswa');
    }
    function riwayatizin() {
        return view('guru.riwayat_izin');
    }
    function absen() {
        return view('guru.absen');
    }
    function jurnal() {
        return view('guru.jurnal');
    }
    function create(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|min:3|max:50|unique:users,email',
            'asal_sekolah' => 'required|min:3|max:50',
        ]);

        $dataSekolah = [
            'name' => $request->asal_sekolah,
        ];
        $modelSekolah = Sekolah::create($dataSekolah);
        $sekolahId = $modelSekolah->id;

        $passwordUser = Str::random(6);
        $dataUser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($passwordUser),
            'role' => 'guru',
            'sekolah_id' => $sekolahId,
        ];
        $modelUser = User::create($dataUser);
        if ($modelUser) {
            $dataUser = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $passwordUser,
            ];
            Mail::to($request->email)->send(new UserDataLogin($modelUser));
            return back()->with('success','Berhasil membuat guru, password : ' . $passwordUser);
        }
        else {
            return back()->with('error', 'Gagal membuat guru');
        }
    }
    function delete(Request $request) {
        // dd($request->all());
        if ($request->sekolah_id === null) {
            User::find($request->user_id)->delete();
            return back()->with('success', 'Berhasil menghapus guru');
        }
        else {
            if (User::where('sekolah_id', $request->sekolah_id)->count() == 1) {
                User::find($request->user_id)->delete();
                Sekolah::find($request->sekolah_id)->delete();
                return back()->with('success', 'Berhasil menghapus guru');
            }
            try {
                // dd(User::where('sekolah_id', $request->sekolah_id)->count());
                Sekolah::find($request->sekolah_id)->delete();
                User::find($request->user_id)->delete();
                return back()->with('success', 'Berhasil menghapus guru');
            } catch (QueryException $e) {
                return back()->with('error', 'Gagal menghapus karena data masih digunakan');
            }
        }
    }
}
