<?php

namespace App\Http\Controllers\Api;

use App\Transformers\ContentTransformer;
use Illuminate\Http\Request;
use Modules\Article\Entities\Content;

class ContentController extends Controller
{
    public function index()
    {
        $limit = request()->query('limit',10);
        if($cid = request()->query('cid')){
            $contents =Content::where('category_id',$cid)->paginate($limit);
        }else{
            $contents =Content::paginate($limit);
        }
        return $this->response->paginator($contents, new ContentTransformer());
    }

    public function show($id){
        $content = Content::find($id);
        return $this->response->item($content,new ContentTransformer());
    }
}
