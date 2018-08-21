<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/3
 * Time: 23:13
 */

namespace Modules\News;

use Houdunwang\WeChat\WeChat;
use Modules\Base\Entities\Base;
use Modules\News\Entities\News;

class Response
{
    //微信处理
    public function handle($rule)
    {
        $base = News::firstOrNew(['rule_id' => $rule['id']]);
        $contents = json_decode($base['data'], true);
        return WeChat::instance('message')->news($contents);
    }
}