<?php

namespace App\Http\Controllers;

use App\Models\peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    function index() {
        $peraturan = peraturan::all();
        return view('ketua.buat_peraturan', compact('peraturan'));
    }

    function tambahPeraturan(Request $request) {
        $this->validate($request,[
            'judul_peraturan' => 'required|min:3|max:20',
            'deskripsi_peraturan' => 'required|min:5|max:500',
        ]);

        peraturan::create([
            'judul_peraturan' => $request->judul_peraturan,
            'deskripsi_peraturan' => $request->deskripsi_peraturan,
        ]);

        return redirect()->route('ketua.peraturan.index');

    }

    function hapusPeraturan(string $id){
        $hapus = peraturan::findorfail($id);
        $hapus->delete();
        return redirect()->route('ketua.peraturan.index');
    }
}
