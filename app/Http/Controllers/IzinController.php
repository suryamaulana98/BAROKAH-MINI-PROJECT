<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    function tampilkanberdasarkansekolah($sekolah_id) {
        $izins = Izin::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->get();
        $sekolah = Sekolah::all();
        // dd($sekolah);
        return view('admin.laporan_izin', compact('sekolah', 'izins'));
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
