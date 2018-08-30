<?php

namespace App\Http\Controllers\Util;

use App\Services\UploadServer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function upload(Request $request, UploadServer $uploadServer)
    {
        if ($file = $request->file('file')) {
            $file = $uploadServer->upload($file, $this->isImage($file) ? 'image' : 'file');
            return ['file' => url($file), 'code' => 0];
        }
    }

    protected function isImage($file)
    {
        $ext = $file->getClientOriginalExtension();
        return in_array($ext, ['jpeg', 'jpeg', 'png', 'gif']);
    }

    public function lists()
    {

    }
}
