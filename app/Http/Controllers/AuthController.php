<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method() == 'POST') {
            if (\Auth::attempt(['account' => $request->account, 'password' => $request->password], true)) {
                return redirect('/')->with(['success' => '登入成功']);
            } else {
                return redirect('/login')->with(['error' => '帳號密碼錯誤']);
            }
        } else {
            \Auth::logout();
        }

        return view('login');
    }

    public function logout()
    {
        \Auth::logout();
        return view('login');
    }

    public function register(Request $request)
    {
        $account  = $request->account;
        $password = $request->password;
        $teamName = $request->team_name;

        if ($account == '' || $password == '' || $teamName == '') {
            dd('資料輸入錯誤');
            return false;
        }

        if (User::where('account', $account)->first()) {
            dd('帳號已存在');
            return back()->withInput();
        } else {
            User::create(['account' => $account, 'password' => bcrypt($password), 'team_name' => $teamName]);
            \Auth::attempt(['account' => $account, 'password' => $password], true);
            return redirect('/');
        }
    }
}
