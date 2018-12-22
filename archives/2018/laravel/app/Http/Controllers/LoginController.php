<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
    }

    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (\Auth::attempt($data)) {
            session()->flash('success', '登录成功');
            return redirect()->route('home');
        }
        session()->flash('danger', '邮箱或密码错误');
        return back();
    }

    public function logout()
    {
        \Auth::logout();
        session()->flash('success', '您已退出');
        return redirect('/');
    }
}
