<?php

namespace App\Http\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    public function index(Request $request)
    {
        $topics = Topic::where('category_id', $request->query('id'))->paginate(1);
        return view('edu.topic_index', compact('topics'));
    }

    public function create(Request $request)
    {
        $category = Category::find($request->query('category_id'));
        return view('edu.topic_create', compact('category'));
    }

    public function store(Request $request, Topic $topic)
    {
        $topic->user()->associate(auth()->user())->fill($request->all())->save();
        return redirect(route('edu.topic.show', $topic));
    }

    public function show(Topic $topic)
    {
        return view('edu.topic_show', compact('topic'));
    }

    public function edit(Topic $topic)
    {
        //
    }

    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
