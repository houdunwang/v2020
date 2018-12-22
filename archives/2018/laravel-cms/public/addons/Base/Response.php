<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/3
 * Time: 23:13
 */

namespace Modules\Base;

use Houdunwang\WeChat\WeChat;
use Modules\Base\Entities\Base;

class Response
{
    //微信处理
    public function handle($rule)
    {
        $base = Base::firstOrNew(['rule_id' => $rule['id']]);
        $contents = json_decode($base['content'],true);
        return WeChat::instance('message')->text(array_random($contents)['content']);
    }
}