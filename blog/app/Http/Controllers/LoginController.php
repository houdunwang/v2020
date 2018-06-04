<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:5'
        ]);
        if (\Auth::attempt($data)) {
            session()->flash('success', '登录成功');
            return redirect('/');
        }
        session()->flash('danger', '帐号或密码错误');
        return back();
    }

    //退出
    public function logout()
    {
        \Auth::logout();
        session()->flash('success', '退出成功');
        return redirect('/');
    }
}
