<?php

namespace App\Http\Controllers;

use App\Mail\UserDataLogin;
use App\Models\Hariansiswa;
use App\Models\Izin;
use App\Models\Laporanjurnal;
use App\Models\Notifikasi;
use App\Models\pengumpulan_jurnal;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    function index() {
        $jumlahSiswaMagang = User::where([['role', 'ketua'], ['sekolah_id', Auth::user()->sekolah_id]])->orWhere([['role', 'siswa'], ['sekolah_id', Auth::user()->sekolah_id]])->count();
        $jumlahPermintaanIzin = Izin::whereHas('user', function ($query) {
            $query->where('sekolah_id', Auth::user()->sekolah_id);
        })->where('status', 'menunggu')->count();
        $jumlahDisetujui = Izin::whereHas('user', function ($query) {
            $query->where('sekolah_id', Auth::user()->sekolah_id);
        })->where('status', 'disetujui')->count();
        $jumlahDitolak = Izin::whereHas('user', function ($query) {
            $query->where('sekolah_id', Auth::user()->sekolah_id);
        })->where('status', 'ditolak')->count();
        return view('guru.dashboard_guru' , compact('jumlahSiswaMagang','jumlahPermintaanIzin', 'jumlahDisetujui', 'jumlahDitolak'));
    }
    function listsiswa(Request $request) {
        // $guru = $user->sekolah_id;
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $siswas = User::where([['name', 'LIKE', '%'.$keyword.'%'],['sekolah_id', Auth::user()->sekolah_id], ['role', 'siswa']])->orWhere([['name', 'LIKE', '%'.$keyword.'%'],['sekolah_id', Auth::user()->sekolah_id], ['role', 'ketua']])->latest()->get();
            return view('guru.list_siswa', compact('siswas'));
        }
        $siswas = User::where([['sekolah_id', Auth::user()->sekolah_id], ['role', 'siswa']])->orWhere([['sekolah_id', Auth::user()->sekolah_id], ['role', 'ketua']])->latest()->get();
        return view('guru.list_siswa',compact('siswas'));
    }
    function laporanhariansiswa(Request $request) {
        if($request->has('cari')) {
            $keyword = $request->cari;
            $hariansiswas = Hariansiswa::whereHas('user', function ($query) use ($keyword) {
                $query->where([['sekolah_id', Auth::user()->sekolah_id], ['name', 'LIKE', '%'.$keyword.'%']]);
            })->get();
            return view('guru.laporan_harian_siswa', compact('hariansiswas'));
        }
        $hariansiswas = Hariansiswa::whereHas('user', function ($query) {
            $query->where('sekolah_id', Auth::user()->sekolah_id);
        })->get();
        return view('guru.laporan_harian_siswa', compact('hariansiswas'));
    }
    function riwayatizin(Request $request) {
        if ($request->has('cari')) {
            $keyword = $request->cari;
            $riwayats = Izin::whereHas('user', function ($query) use ($keyword) {
                $query->where([['sekolah_id', Auth::user()->sekolah_id], ['name', 'LIKE', '%'.$keyword.'%']]);
            })->where('status', 'disetujui')->get();
            return view('guru.riwayat_izin', compact('riwayats'));
        }
        $riwayats = Izin::whereHas('user', function ($query) {
            $query->where('sekolah_id', Auth::user()->sekolah_id);
        })->where('status', 'disetujui')->get();
        return view('guru.riwayat_izin', compact('riwayats'));
    }
    function absen() {
        return view('guru.absen');
    }
    function jurnal() {
        $jurnals = Laporanjurnal::whereHas('user', function ($query) {
            $query->where('sekolah_id', Auth::user()->sekolah_id);
        })->get();
        return view('guru.jurnal', compact('jurnals'));
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
            Mail::to($request->email)->send(new UserDataLogin($dataUser));
            return back()->with('success','Berhasil membuat guru, password : ' . $passwordUser);
        }
        else {
            return back()->with('error', 'Gagal membuat guru');
        }
    }
    function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'asal_sekolah' => 'required',
        ]);
        $sekolah_id = $request->sekolah_id;
        $user_id = $request->user_id;

        User::find($user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        Sekolah::find($sekolah_id)->update([
            'name' => $request->asal_sekolah,
        ]);
        return back()->with('success', 'Berhasil mengedit guru');
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
