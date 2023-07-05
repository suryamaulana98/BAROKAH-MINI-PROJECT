<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Notifikasi;
use App\Models\Sekolah;
use App\Models\Statistik;
use App\Models\User;
use App\Notifications\IzinNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class IzinController extends Controller
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
           return view('admin.laporan_izin', compact('sekolah', 'izins', 'notifikasi'));
        }

        $izins = Izin::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->orderBy('status', 'DESC')->get();
        // dd($sekolah);
        return view('admin.laporan_izin', compact('sekolah', 'izins', 'notifikasi'));
    }
    function store(Request $request) {
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
            $user = User::find($request->user_id);
            if ($request->alasan == 'darurat') {
                $user->update([
                    'darurat' => $user->darurat += 1,
                ]);
            }
            if ($request->alasan == 'sakit') {
                $user->update([
                    'sakit' => $user->sakit += 1,
                ]);
            }
            if ($request->alasan == 'keluarga') {
                $user->update([
                    'acara_keluarga' => $user->acara_keluarga += 1,
                ]);
            }


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

        $user = User::find($request->user_id);
        if ($request->alasan == 'darurat') {
            $user->update([
                'darurat' => $user->darurat += 1,
            ]);
        }
        if ($request->alasan == 'sakit') {
            $user->update([
                'sakit' => $user->sakit += 1,
            ]);
        }
        if ($request->alasan == 'keluarga') {
            $user->update([
                'acara_keluarga' => $user->acara_keluarga += 1,
            ]);
        }
        Notifikasi::create([
            'user_id' => Auth::user()->id,
            'judul' => 'Permintaan izin',
        ]);
        if (Izin::create($validatedData)) {
            $admins = User::where('role', 'admin')->first();
            User::find($admins->id)->notify(new IzinNotification(Auth::user()));
            return back()->with('success', 'Berhasil membuat izin');
        }
        else {
            return back()->with('error', 'Gagal membuat izin');
        }
    }
    function tolakizin(Izin $id) {
        $status = 'ditolak';
        $id->update(['status' => $status]);
        return back()->with('success', 'Berhasil menolak izin');
    }
    function terimaizin(Izin $id) {
        $status = 'disetujui';
        $tanggal_statistik = Carbon::now()->format('M Y');
        $id->update(['status' => $status]);
        $alasan = $id->alasan;
        $stat= Statistik::where('tanggal', $tanggal_statistik);
        //keluarga
        if ($alasan == 'keluarga') {
            if ($stat->exists()) {
                $total_klg = $stat->first()->jumlah_acara_keluarga;
                $stat->update([
                    'jumlah_acara_keluarga' => $total_klg += 1,
                ]);
            }
            else {
                Statistik::create([
                    'tanggal' => $tanggal_statistik,
                    'jumlah_acara_keluarga' => 1,
                ]);
            }
        }
            //sakit
        if ($alasan == 'sakit') {
            if ($stat->exists()) {
                $total_sakit = $stat->first()->jumlah_sakit;
                $stat->update([
                    'jumlah_sakit' => $total_sakit += 1,
                ]);
            }
            else {
                Statistik::create([
                    'tanggal' => $tanggal_statistik,
                    'jumlah_sakit' => 1,
                ]);
            }
        }
        //darurat
        if ($alasan == 'darurat') {
            if ($stat->exists()) {
                $total_darurat = $stat->first()->jumlah_darurat;
                $stat->update([
                    'jumlah_darurat' => $total_darurat += 1,
                ]);
            }
            else {
                Statistik::create([
                    'tanggal' => $tanggal_statistik,
                    'jumlah_darurat' => 1,
                ]);
            }
        }
        return back()->with('success', 'Berhasil menerima izin');
    }
}
