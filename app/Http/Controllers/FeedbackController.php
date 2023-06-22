<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    function kirim(Request $request) {
        // dd($request->all());
        $validatedData = $request->validate([
            'user_id' => 'required',
            'pesan' => 'required|min:3',
        ]);
        if (Feedback::create($validatedData)) {
            return back()->with('success', 'Berhasil mengirim');
        }
        return back()->withErrors(['gagalKirimPesan' => 'Gagal mengirim pesan']);

    }
    function hapus(Feedback $feedback) {
        if ($feedback->delete()) {
            return back()->with('success', 'Berhasil menghapus');
        } else {
            return back()->withErrors(['gagalHapus' => 'Gagal menghapus']);
        }
    }
}
