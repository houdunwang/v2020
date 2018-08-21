<?php

namespace Modules\Wx\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\WeChatService;
use Illuminate\Http\Request;
use Modules\Wx\Entities\WxMenu;
use Modules\Wx\Http\Requests\WxMenuRequest;

class WxMenuController extends Controller
{
    //显示列表
    public function index()
    {
        $data = WxMenu::paginate(10);
        return view('wx::wx_menu.index', compact('data'));
    }

    //创建视图
    public function create(WxMenu $wx_menu)
    {
        return view('wx::wx_menu.create', compact('wx_menu'));
    }

    //保存数据
    public function store(WxMenuRequest $request, WxMenu $wx_menu)
    {
        $wx_menu->name = $request->input('name');
        $wx_menu->data = json_decode($request->input('data'));
        $wx_menu->save();
        return redirect('/wx/wx_menu')->with('success', '保存成功');
    }

    //显示记录
    public function show(WxMenu $field)
    {
        return view('wx::wx_menu.show', compact('field'));
    }

    //编辑视图
    public function edit(WxMenu $wx_menu)
    {
        return view('wx::wx_menu.edit', compact('wx_menu'));
    }

    //更新数据
    public function update(WxMenuRequest $request, WxMenu $wx_menu)
    {
        $wx_menu->name = $request->input('name');
        $wx_menu->data = json_decode($request->input('data'));
        $wx_menu->save();
        return redirect('/wx/wx_menu')->with('success', '更新成功');
    }

    public function push(WxMenu $menu,WeChatService $chatService)
    {
        $res = $chatService->instance('button')->create(['button'=>$menu['data']]);
        if($res['errcode']==0){
            return back()->with('success','微信菜单推送成功，请稍候在微信上查看');
        }
        return back()->with('danger',$res['errmsg']);
    }

    //删除模型
    public function destroy(WxMenu $wx_menu)
    {
        $wx_menu->delete();
        return redirect('wx/wx_menu')->with('success', '删除成功');
    }
}
