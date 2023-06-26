<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index() {
        return view('guru.dashboard_guru');
    }
    function listsiswa() {
        return view('guru.list_siswa');
    }
    function laporanhariansiswa() {
        return view('guru.laporan_harian_siswa');
    }
    function laporanjurnalsiswa() {
        return view('guru.laporan_jurnal_siswa');
    }
    function riwayatizin() {
        return view('guru.riwayat_izin');
    }
    function absen() {
        return view('guru.absen');
    }
    function jurnal() {
        return view('guru.jurnal');
    }
}
