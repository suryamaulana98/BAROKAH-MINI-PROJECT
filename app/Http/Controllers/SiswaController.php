<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    function index() {
        $kontak = Kontak::first();
        $pengumumans = Pengumuman::all();
        return view('siswa.index', compact('kontak', 'pengumumans'));
    }

}
