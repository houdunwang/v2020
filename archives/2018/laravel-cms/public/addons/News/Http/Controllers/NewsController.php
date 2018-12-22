<?php

namespace Modules\News\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\News\Entities\News;
use Modules\News\Http\Requests\NewsRequest;
use Modules\Wx\Services\WeChatServer;
use DB;

class NewsController extends Controller
{
    //显示列表
    public function index()
    {
        $data = News::paginate(10);
        return view('news::news.index', compact('data'));
    }

    //创建视图
    public function create(News $news, WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView();
        return view('news::news.create', compact('news', 'ruleView'));
    }

    //保存数据
    public function store(NewsRequest $request, News $news, WeChatServer $weChatServer)
    {
        DB::transaction(function () use ($request, $news, $weChatServer) {
            $rule = $weChatServer->ruleSave();
            $news['rule_id'] = $rule['id'];
            $news['data'] = $request->input('data');
            $news->save();
        });

        return redirect('/news/news')->with('success', '保存成功');
    }

    //显示记录
    public function show(News $field)
    {
        return view('news::news.show', compact('field'));
    }

    //编辑视图
    public function edit(News $news, WeChatServer $weChatServer)
    {
        $ruleView = $weChatServer->ruleView($news['rule_id']);
        return view('news::news.edit', compact('news', 'ruleView'));
    }

    //更新数据
    public function update(NewsRequest $request, News $news, WeChatServer $weChatServer)
    {
        DB::transaction(function () use ($request, $news, $weChatServer) {
            $rule = $weChatServer->ruleSave();
            $news['rule_id'] = $rule['id'];
            $news['data'] = $request->input('data');
            $news->save();
        });
        return redirect('/news/news')->with('success', '更新成功');
    }

    //删除模型
    public function destroy(News $news)
    {
        $news->delete();
        return redirect('news/news')->with('success', '删除成功');
    }
}
