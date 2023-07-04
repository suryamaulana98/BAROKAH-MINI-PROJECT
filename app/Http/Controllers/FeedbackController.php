<?php

namespace App\Http\Controllers;

use App\Mail\BalasFeedback;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    function balas(Request $request) {
        // dd($request->all());
        $userEmail = Feedback::find($request->feedback_id)->first()->user->email;
        // dd($userEmail);
        $data = [
            'balas' => $request->balas,
        ];
        if (Mail::to($userEmail)->send(new BalasFeedback($data, $userEmail))) {
            Feedback::find($request->feedback_id)->delete();
            return back()->with('success', 'Berhasil membalas feedback');
        } else {
            return back()->with('error', 'Gagal membalas feedback');
        }
    }
}
