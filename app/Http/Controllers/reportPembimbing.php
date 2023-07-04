<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Sekolah;
use App\Models\User;


class reportPembimbing extends Controller
{
    function tampilkanberdasarkansekolah($sekolah_id) {
        $report = Report::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->get();
        $sekolah = Sekolah::all();
        // dd($sekolah);
        return view('pembimbing.report', compact('sekolah', 'report'));
    }
    //
    function buatReport(Request $request) {
        // dd($request->all());
        $validatedData = $this->validate($request,[
            'user_id' => 'required',
            'tanggal' => 'required',
            'pesan' => 'required',
        ]);

        // dd($validatedData);
        Report::create($validatedData);
        return back()->with('success', 'Berhasil');
    }

    function hapusReport(String $id){
        $user = Report::findorfail($id);
        if ($user->delete()) {
            return back()->with('success', 'Berhasil menghapus report');
        }
        else {
            return back()->with('error', 'Gagal menghapus report');
        }
    }
}
