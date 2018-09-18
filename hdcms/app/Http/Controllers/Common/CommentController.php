<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $model = hd_model($request->query('model'), $request->query('id'));
        $comments = $model->comment()->with(['user'])->get();
        return ['comments' => $comments, 'code' => 0];
    }

    public function store(Request $request)
    {
        $model = hd_model();
        $data = $request->only(['content']);
        $data['user_id'] = auth()->id();
        $comment = $model->comment()->create($data);
        return ['comment' => $comment->with(['user'])->find($comment['id']), 'code' => 0];
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
