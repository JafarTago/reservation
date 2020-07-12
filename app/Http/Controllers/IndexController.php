<?php

namespace App\Http\Controllers;

use App\Time;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $userInfo        = null;
        $reservationInfo = null;

        if (isset(auth()->user()->account)) {
            $userInfo = User::where('account', auth()->user()->account)->first();

            if (! is_null($userInfo->reservation)) {
                $now       = date('Y-m-d H:i:s', time());
                $startTime = $userInfo->reservation->time;
                $endTime   = date('Y-m-d H:i:s', strtotime($startTime) + 60 * 60 * 2);

                if ($now >= $startTime && $now <= $endTime) {
                    $reservationInfo = $userInfo->team_name . " 預約 $startTime ~ $endTime ，時段正確，可以進入";
                } else {
                    $reservationInfo = $userInfo->team_name . " 預約 $startTime ~ $endTime ，時段不正確，無法進入";
                }
            }


        }

        $day1 = Time::whereBetween('time', ['2020-08-10 08:00:00', '2020-08-10 20:59:59'])->get();
        $day2 = Time::whereBetween('time', ['2020-08-11 08:00:00', '2020-08-11 20:59:59'])->get();
        $day3 = Time::whereBetween('time', ['2020-08-12 08:00:00', '2020-08-12 20:59:59'])->get();

        return view('index', compact('day1', 'day2', 'day3', 'userInfo', 'reservationInfo'));
    }
}
