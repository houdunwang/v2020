<?php

namespace App\Http\Controllers\Edu;

use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Scout\Searchable;

class SearchController extends Controller
{
    public function lists(Request $request)
    {
        $w = $request->query('w');
        switch ($request->query('t')) {
            case 'article':
                $data = Article::search($w)->paginate(2);
                break;
            case 'topic':
                break;
            case 'video':
                $data = Video::search($w)->paginate(2);
                break;
            default:
                return back()->with('error', '搜索类型不存在');
        }
        return view('edu.search_lists', compact('data'));
    }
}
