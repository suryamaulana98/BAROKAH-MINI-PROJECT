<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    function store(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|min:3',
            'nomor_telepon' => 'required|min:5|max:20',
            'alamat_kantor' => 'required|min:3|max:155',
            'twitter' => 'nullable|min:3|max:30',
            'facebook' => 'nullable|min:3|max:30',
            'instagram' => 'nullable|min:3|max:30',
            'linkedin' => 'nullable|min:3|max:30',
        ]);

        $kontak = Kontak::count();
        if ($kontak == 0) {
            Kontak::create($validatedData);
            session()->flash('berhasil', 'Berhasil disimpan');
            return redirect()->route('admin.kontak');
        } else {
            Kontak::truncate();
            Kontak::create($validatedData);
            session()->flash('berhasil', 'Berhasil disimpan');
            return redirect()->route('admin.kontak');
        }
    }
}
