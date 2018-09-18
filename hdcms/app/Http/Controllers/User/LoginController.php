<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'login', 'store']);
        $this->middleware('auth', ['only' => 'logout']);
    }

    public function login()
    {
        return view('user.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'account' => 'required',
            'password' => 'required',
        ], ['account.required' => '登录帐号不能为空', 'password.required' => '密码不能为空']);
        if (filter_var($request['account'], FILTER_VALIDATE_EMAIL)) {
            $data['email'] = $request['account'];
        } else {
            $data['mobile'] = $request['account'];
        }
        $data['password'] = $request['password'];
        if (\Auth::attempt($data, $request['remember'])) {
            return redirect('/')->with('success', '登录成功');
        }
        return back()->with('error', '登录失败，帐号或密码错误');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }
}
