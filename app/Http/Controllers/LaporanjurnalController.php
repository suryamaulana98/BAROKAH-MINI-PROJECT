<?php

namespace App\Http\Controllers;

use App\Models\Laporanjurnal;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class LaporanjurnalController extends Controller
{
    public function adminfiltersekolah($sekolah_id) {
        $laporanjurnals = Laporanjurnal::whereHas('user', function ($query) use ($sekolah_id) {
            $query->where('sekolah_id', $sekolah_id);
        })->get();
        $sekolah = Sekolah::all();
        return view('admin.jurnal', compact('laporanjurnals', 'sekolah'));
    }
}
