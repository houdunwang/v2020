<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function make()
    {
        $model = hd_model();
        if ($favorite = $model->isFavorite(auth()->user())) {
            $favorite->delete();
        } else {
            $model->favorite()->create(['user_id'=>auth()->id()]);
        }
        return back();
    }
}
