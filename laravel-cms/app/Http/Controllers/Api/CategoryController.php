<?php

namespace App\Http\Controllers\Api;

use App\Transformers\CategoryTransformer;
use Modules\Article\Entities\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        return $this->response->collection($categorys, new CategoryTransformer());
    }
}
