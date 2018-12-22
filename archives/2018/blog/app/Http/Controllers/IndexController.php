<?php

namespace App\Http\Controllers;

use App\Blog;

class IndexController extends Controller
{
    public function home()
    {
        $blogs = Blog::orderBy('id','DESC')->with('user')->paginate(10);
        return view('home', compact('blogs'));
    }
}
