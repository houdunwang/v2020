<?php

namespace App\Http\Controllers\Api;

use Modules\Article\Entities\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $limit = \request()->query('limit', 2);
        $slides = Slide::limit($limit)->get();
        return $this->response->array($slides);
    }
}
