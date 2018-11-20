<?php

namespace App\Http\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function show(Video $video)
    {
        return view('edu.video_show', compact('video'));
    }
}
