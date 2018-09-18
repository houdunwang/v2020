<?php

namespace App\Http\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function zan(Article $article)
    {
        $article->zan()->toggle(auth()->id());
        return back()->with('success', '操作成功');
    }

    public function index()
    {
        $articles = Article::with('user')->paginate(10);
        return view('edu.article_index', compact('articles'));
    }

    public function create()
    {
        return view('edu.article_create');
    }


    public function store(ArticleRequest $request,Article $article)
    {
        $article->user()->associate(auth()->id())->fill($request->all())->save();
        return redirect(route('edu.article.show', $article))->with('succes', '发表成功');
    }

    public function show(Article $article)
    {
        //获取所有点选用户
        $users = $article->zan()->get();
        return view('edu.article_show', compact('article', 'users'));
    }


    public function edit(Article $article)
    {
        //
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
