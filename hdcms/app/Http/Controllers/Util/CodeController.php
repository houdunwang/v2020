<?php

namespace App\Http\Controllers\Util;

use App\Exceptions\ValidException;
use App\Notifications\RegisterNotification;
use App\User;
use Houdunwang\Aliyun\Aliyun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
    protected $expire = 3;

    public function __construct()
    {
    }

    public function send(Request $request)
    {
        $this->expireCheck();
        $code = hd_random(4);
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::firstOrNew(['email' => $request->username]);
            $user->notify(new RegisterNotification($code));
            $this->saveToSession($code, 'email', $request->username);
        } else {
            $data = [
                //短信签名
                'sign' => '身份验证',
                //短信模板
                'template' => 'SMS_12840367',
                //手机号
                'mobile' => $request->username,
                //模板变量
                'vars' => ["code" => $code, "product" => "后盾人"],
            ];
            Aliyun::instance('Sms')->send($data);
            $this->saveToSession($code, 'mobile', $request->username);
        }
        return ['code' => 0, 'message' => '验证码已经发送'];
    }

    protected function saveToSession($code, $type, $username)
    {
        session()->put('validate_code', [
            'code' => $code,
            'type' => $type,
            'username' => $username,
            'expire' => time() + $this->expire,
        ]);
    }

    protected function expireCheck()
    {
        $expire = session('validate_code.expire');
        if ($expire && time() < $expire) {
            throw new ValidException('验证码发送频繁，请稍候操作');
        }
    }
}
