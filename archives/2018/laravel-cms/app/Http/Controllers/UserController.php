<?php

namespace App\Http\Controllers;

use App\Notifications\RegisterMailNotify;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkMailShow()
    {
        return view('user.check_mail_show');
    }

    public function sendMailToken()
    {
        $user = auth()->user();
        $user->notify(new RegisterMailNotify($user));
        return back()->with('success', '验证码已经发送到你的邮箱' . $user->email);
    }

    public function checkUserMail($token)
    {
        $user = User::where('mail_token', $token)->first();
        if ($user) {
            $user['mail_status'] = true;
            $user->save();
            return redirect('/')->with('success', '邮箱验证成功');
        }
        return redirect('/')->with('danger', '帐号不存在');
    }
}
