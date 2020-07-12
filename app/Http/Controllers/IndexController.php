<?php

namespace App\Http\Controllers;

use App\Time;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $userInfo = null;

        if (isset(auth()->user()->account)) {
            $userInfo = User::where('account', auth()->user()->account)->first();
        }

        $day1 = Time::whereBetween('time', ['2020-08-10 08:00:00', '2020-08-10 20:59:59'])->get();
        $day2 = Time::whereBetween('time', ['2020-08-11 08:00:00', '2020-08-11 20:59:59'])->get();
        $day3 = Time::whereBetween('time', ['2020-08-12 08:00:00', '2020-08-12 20:59:59'])->get();

        return view('index', compact('day1', 'day2', 'day3', 'userInfo'));
    }
}
