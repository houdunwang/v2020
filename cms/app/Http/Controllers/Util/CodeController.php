<?php

namespace App\Http\Controllers\Util;

use Houdunwang\Aliyun\Aliyun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
    public function send(Request $request)
    {
        $username = $request->username;
        $code = hd_random(4);
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            //邮箱发送
        } else {
            $data = [
                //短信签名
                'sign' => '后盾网',
                //短信模板
                'template' => 'SMS_12840367',
                //手机号
                'mobile' => $username,
                //模板变量
                'vars' => ["code" => "8888", "product" => "hdphp"],
            ];
            session()->put('validate_code',['code'=>$code,'username'=>$username,'type'=>'mobile']);
            $res = Aliyun::instance('Sms')->send($data);
        }
    }
}
