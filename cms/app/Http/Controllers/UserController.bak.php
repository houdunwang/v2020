<?php

namespace App\Http\Controllers;

use App\Notifications\CheckMailNotification;
use App\User;
use Illuminate\Http\Request;

class bak extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showToken()
    {
        return view('user.show_token');
    }

    public function send()
    {
        \Auth::user()->notify(new CheckMailNotification(\Auth::user()));
    }

    public function checkMail($token)
    {
        $user = User::where('token', $token)->first();
        if ($user) {
            $user->email_valid = true;
            $user->save();
        }
    }
}
