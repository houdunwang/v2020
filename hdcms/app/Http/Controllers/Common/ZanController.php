<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function make(Request $request)
    {
        $model = hd_model();
        if ($zan = $model->isZan(auth()->user())) {
            $zan->delete();
        } else {
            $model->zan()->create(['user_id' => auth()->id()]);
        }
        if ($request->ajax()) {
            return ['count' => hd_model()->zan_num, 'code' => 200];
        }
        return back();
    }
}
