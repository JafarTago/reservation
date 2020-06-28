<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function checkIn($userId)
    {
        $reservationInfo = Time::where('user_id', $userId)->first();

        if (is_null($reservationInfo)) {
            dd('無預約資料，可賞試使用預約系統上的最新QRcode');
        } else {
            $now = date('Y-m-d H:i:s',  time());
            $startTime = $reservationInfo->time;
            $endTime   = date('Y-m-d H:i:s', strtotime($startTime) + 60 * 60 * 2);

            echo "現在時間：$now<br><br>";
            echo "隊伍名稱：". $reservationInfo->user->team_name."<br>";
            echo "預約時段： $startTime ~ $endTime <br>";

            if ($now >= $startTime && $now <= $endTime) {
                dd('可以進入');

            } else {
                dd('checkin的時段錯誤，無法進場');
            }
        }



    }
}
