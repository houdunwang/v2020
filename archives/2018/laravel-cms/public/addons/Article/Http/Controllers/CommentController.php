<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Article\Entities\Comment;
use Modules\Article\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    //显示列表
    public function index()
    {
        $data = Comment::paginate(10);
        return view('article::comment.index', compact('data'));
    }

    //创建视图
    public function create(Comment $comment)
    {
        return view('article::comment.create', compact('comment'));
    }

    //保存数据
    public function store(CommentRequest $request)
    {
        auth()->user()->comment()->create($request->all());
        return back()->with('success', '发表成功');
    }

    //显示记录
    public function show(Comment $field)
    {
        return view('article::comment.show', compact('field'));
    }

    //编辑视图
    public function edit(Comment $comment)
    {
        return view('article::comment.edit', compact('comment'));
    }

    //更新数据
    public function update(CommentRequest $request, Comment $comment)
    {
        $comment->update($request->all());
        return redirect('/article/comment')->with('success', '更新成功');
    }

    //删除模型
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('article/comment')->with('success', '删除成功');
    }
}
