<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    function kirim(Request $request) {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'pesan' => 'required|min:3',
        // ]);
        $data = [
            'user_id' => $request->user_id,
            'pesan' => $request->pesan
        ];
        if (Feedback::create($data)) {
            return "success";
        }
        return "error";

    }
    function hapus(Feedback $feedback) {
        if ($feedback->delete()) {
            return back()->with('success', 'Berhasil menghapus');
        } else {
            return back()->withErrors(['gagalHapus' => 'Gagal menghapus']);
        }
    }
}
