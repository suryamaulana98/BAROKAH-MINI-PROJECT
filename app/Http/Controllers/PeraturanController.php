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

    public function tambahPeraturan(Request $request)
    {
        $validatedData = $request->validate([
            'judul_peraturan' => 'required|min:3|max:20',
            'deskripsi_peraturan' => 'required|min:5|max:500',
        ]);

        $data = new Peraturan();
        $data->judul_peraturan = $validatedData['judul_peraturan'];
        $data->deskripsi_peraturan = $validatedData['deskripsi_peraturan'];
        $data->save();

        return "success";
    }

    function editPeraturan(Request $request, string $id){
        $request->validate([
            'judul_peraturan' => 'required|min:3|max:20',
            'deskripsi_peraturan' => 'required|min:5|max:500',
        ]);

        $update = peraturan::findorfail($id);

        $data = [
            'judul_peraturan' => $request->judul_peratuan,
            'deskripsi_peratuan' => $request->deskripsi_peraturan,
        ];

        $update->update($data);

        return back();
    }


    function hapusPeraturan(string $id){
        $hapus = peraturan::findorfail($id);
        $hapus->delete();
        
        return response()->json(['success' => true]);
    }
    
}
