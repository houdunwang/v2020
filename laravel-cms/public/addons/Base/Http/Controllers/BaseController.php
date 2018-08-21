<?php

namespace Modules\Base\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Base\Entities\Base;
use Modules\Base\Http\Requests\BaseRequest;
use Modules\Wx\Services\WeChatServer;
use DB;

class BaseController extends Controller
{
    //显示列表
    public function index()
    {
        $data = Base::paginate(10);
        return view('base::base.index', compact('data'));
    }

    //创建视图
    public function create(Base $base, WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView();
        return view('base::base.create', compact('base', 'ruleView'));
    }

    //保存数据
    public function store(BaseRequest $request, Base $base, WeChatServer $weChatServer)
    {
        DB::transaction(function () use ($weChatServer, $base, $request) {
            $rule = $weChatServer->ruleSave();
            $base->create(['rule_id' => $rule['id'], 'content' => $request->input('data')]);
        });
        return redirect('/base/base')->with('success', '保存成功');
    }

    //编辑视图
    public function edit(Base $base, WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView($base['rule_id']);
        return view('base::base.edit', compact('base', 'ruleView'));
    }

    //更新数据
    public function update(BaseRequest $request, Base $base, WeChatServer $weChatServer)
    {
        DB::transaction(function () use ($weChatServer, $base, $request) {
            $rule = $weChatServer->ruleSave();
            $base->rule_id = $rule['id'];
            $base->content = $request->input('data');
            $base->save();
        });
        return redirect('/base/base')->with('success', '更新成功');
    }

    //删除模型
    public function destroy(Base $base)
    {
        $base->delete();
        return redirect('base/base')->with('success', '删除成功');
    }
}
