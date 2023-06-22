<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    function pengumumanStore(Request $request) {
        // dd($request->all());
        $validatedData = $request->validate([
            'judul_pengumuman' => 'required|min:3',
            'isi_pengumuman' => 'required|min:5',
            'tanggal_pengumuman' => 'required',
        ]);
        Pengumuman::create($validatedData);
        return back()->with('success', 'Berhasil menambah pengumuman');
    }
    function hapusPengumuman(Pengumuman $pengumuman) {
        if ($pengumuman->delete()) {
            return back()->with('success', 'Berhasil menghapus pengumuman');
        } else {
            return back()->with('error', 'Gagal menghapus pengumuman');
        }
    }
    function lihatPengumuman($pengumuman) {
        $pengumuman = Pengumuman::where('id', $pengumuman)->first();
        return view('pengumuman.detail_pengumuman', compact('pengumuman'));
    }
    function lihatPengumumanSiswa($pengumuman) {
        $pengumuman = Pengumuman::where('id', $pengumuman)->first();
        return view('pengumuman.detail_pengumumanSiswa', compact('pengumuman'));
    }
    function update(Pengumuman $pengumuman, Request $request) {
        $validatedData = $request->validate([
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
        ]);
        $pengumuman->update($validatedData);
        return back()->with('success', 'Berhasil memperbarui pengumuman');
    }
}
