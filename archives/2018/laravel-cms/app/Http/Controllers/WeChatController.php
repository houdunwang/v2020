<?php

namespace App\Http\Controllers;

use Houdunwang\WeChat\WeChat;
use Modules\Wx\Entities\WxConfig;
use Modules\Wx\Entities\WxKeyword;

class WeChatController extends Controller
{
    public function __construct()
    {
        $this->valid();
    }

    protected function valid()
    {
        $config = array_merge(include base_path('config') . '/wechat.php', WxConfig::pluck('value', 'name')->toArray());
        WeChat::config($config)->valid();
    }

    public function handler()
    {
        //普通文本消息处理
        $instance = WeChat::instance('message');
        if ($instance->isTextMsg()) {
            $message = $instance->getMessage();
            return $this->response($message->Content);
        }

        //按钮消息处理
        $instance = WeChat::instance('button');
        if ($instance->isClickEvent()) {
            $message = $instance->getMessage();
            return $this->response($message->EventKey);
        }
    }

    /**
     * 返回微信消息
     * @param $key 微信关键词
     * @return mixed
     */
    protected function response($key)
    {
        $rule = WxKeyword::firstOrNew(['key' => $key])->rule;
        //向用户回复消息
        $class = 'Modules\\' . $rule['module'] . '\Response';
        return call_user_func_array([new $class, 'handle'], [$rule]);
    }
}
