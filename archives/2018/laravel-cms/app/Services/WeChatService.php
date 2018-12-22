<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/1
 * Time: 22:56
 */

namespace App\Services;

use Houdunwang\WeChat\WeChat;
use Modules\Wx\Entities\WxConfig;

class WeChatService
{
    public function __construct()
    {
        $config = array_merge(
            include base_path('config') . '/wechat.php',
            WxConfig::pluck('value', 'name')->toArray());
        WeChat::config($config)->valid();
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([WeChat::class, $name], $arguments);
    }
}