<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservation(Request $request)
    {
        if (is_null(auth()->user())) {
            return redirect('login');
        }

        if (Time::where('time', $request->reservationTime)->first()->user_id) {
            return back()->with(['error' => '此時段已被預約']);
        } else {
            Time::where('user_id', auth()->user()->id)->update(['user_id' => null]);
            Time::where('time', $request->reservationTime)->update(['user_id' => auth()->user()->id]);

            return redirect('/');
        }
    }
}
