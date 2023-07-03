<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    function ceknotif(Notifikasi $notifikasi) {
        $notifikasi->delete();
        if ($notifikasi->judul == 'Permintaan izin') {
            return redirect()->route('admin.izinsiswa');
        }
        else {
            abort(404, 'Not Found');
        }
    }
    function sudahdibaca() {
        Notifikasi::truncate();
        return back();
    }
}
