<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;use App\Models\Sekolah;


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
}
