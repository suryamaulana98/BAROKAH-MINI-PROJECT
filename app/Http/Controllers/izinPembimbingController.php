<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Notifikasi;
use App\Models\Sekolah;
use App\Models\User;
use App\Notifications\IzinNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class izinPembimbingController extends Controller
{
    function tampilkanberdasarkansekolah(Request $request, $sekolah_id) {
        $sekolah = Sekolah::all();
        $notifikasi = Notifikasi::all();
        if ($request->has('cari')) {
            // dd($request->cari);
            $keyword = $request->cari;
            $izins = Izin::whereHas('user', function ($query) use ($keyword, $sekolah_id)   {
                $query->where([['sekolah_id', $sekolah_id], ['name', 'LIKE', '%'.$keyword.'%']]);
            })->orderBy('status', 'DESC')->get();
           return view('pembimbing.izin_siswa', compact('sekolah', 'izins', 'notifikasi'));
        }

        $izins = Izin::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->orderBy('status', 'DESC')->get();
        // dd($sekolah);
        return view('pembimbing.izin_siswa', compact('sekolah', 'izins', 'notifikasi'));
    }
    function store(Request $request) {
        // dd($request->all());
        if ($request->hasFile('surat')) {
            $request->validate([
                'user_id' => 'required',
                'tanggal_izin' => 'required',
                'alasan' => 'required',
                'pesan' => 'required|min:5|max:500',
                'surat' => 'required|max:10240|mimes:jpg,jpeg,png,pdf,docx'
            ]);
            $fileFoto = $request->file('surat');
            $fileName = $fileFoto->hashName();
            $fileFoto->move('surat', $fileName);

            $data = [
                'user_id' => $request->user_id,
                'tanggal_id' => $request->tanggal_izin,
                'alasan' => $request->alasan,
                'pesan' => $request->pesan,
                'surat' => $fileName,
                'tanggal_izin' => $request->tanggal_izin,
            ];
            if (Izin::create($data)) {
                $admins = User::where('role', 'admin')->first();
                // dd($admins->id);
                User::find($admins->id)->notify(new IzinNotification(Auth::user()));
                Notifikasi::create([
                    'user_id' => Auth::user()->id,
                    'judul' => 'Permintaan izin',
                ]);
                // Notification::send($admins, new IzinNotification);
                return back()->with('success', 'Berhasil membuat izin');
            }
            else {
                return back()->with('error', 'Gagal membuat izin');
            }
        }
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tanggal_izin' => 'required',
            'alasan' => 'required',
            'pesan' => 'required|min:5|max:500',
        ]);
        if (Izin::create($validatedData)) {
            return back()->with('success', 'Berhasil membuat izin');
        }
        else {
            return back()->with('error', 'Gagal kmembuat izin');
        }
    }
    function tolakizin(Izin $id) {
        $status = 'ditolak';
        $id->update(['status' => $status]);
        return back()->with('success', 'Berhasil menolak izin');
    }
    function terimaizin(Izin $id) {
        $status = 'disetujui';
        $id->update(['status' => $status]);
        return back()->with('success', 'Berhasil menerima izin');
    }
}
