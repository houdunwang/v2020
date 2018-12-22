<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/2
 * Time: 23:25
 */

namespace Modules\Wx\Services;

use Modules\Wx\Entities\WxRule;

class WeChatServer
{
    public function ruleView($id = 0)
    {
        $rule = WxRule::findOrNew($id);
        $_rule = old('_rule', json_encode([
            'id' => $rule['id'] ?: 0,
            'name' => $rule['name'] ?: '',
            'keywords' => $rule->keyword()->get()->toArray() ?? [['key' => '']],
        ]));
        return view('wx::wechat_server.rule', compact('_rule'));
    }

    public function ruleSave()
    {
        $post = json_decode(request()->input('_rule'), true);
        \Validator::make($post, [
            'name' => "required",
        ], ['name.required' => '规则名称不能为空'])->validate();
        $rule = WxRule::findOrNew($post['id']);
        $rule['name'] = $post['name'];
        $rule['module'] = \HDModule::currentModule();
        $rule->save();

        $rule->keyword()->delete();
        foreach ((array)$post['keywords'] as $key) {
            if ($key) {
                $rule->keyword()->create($key);
            }
        }
        return $rule;
    }
}