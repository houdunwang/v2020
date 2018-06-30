<?php namespace App\Http\Controllers;

use App\Mail\RegMail;
use App\Notifications\FindPassword;
use App\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function show()
    {
        return view('password.show');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            session()->flash('danger', '邮箱不存在');
            return back();
        }
        \Notification::send($user, new FindPassword($user->email_token));
        return view('password.send',compact('user'));
    }

    public function edit($token)
    {
        $user = $this->getUserByToken($token);
        if (!$user) {
            session()->flash('danger', '用户不存在');
            return redirect('/');
        }
        return view('password.edit', compact('user'));
    }

    protected function getUserByToken($token)
    {
        return User::where('email_token', $token)->first();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:5|max:10|confirmed'
        ]);
        $user = $this->getUserByToken($request->token);
        $user->password = bcrypt($request->password);
        $user->save();
        session()->flash('success','密码修改成功');
        return redirect()->route('login');
    }
}
