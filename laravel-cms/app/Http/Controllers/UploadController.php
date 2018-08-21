<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function make(Request $request)
    {
        $file = $this->move($request->file('file'));
        return [
            'code' => 0,
            'file' => $file
        ];
    }

    public function simditor(Request $request)
    {
        $file = $this->move($request->file('file'));
        return [
            'success' => true,
            'msg' => '上传成功',
            'file_path' => $file
        ];
    }

    protected function move($file)
    {
        $filename = str_random(5) . '.' . $file->getClientOriginalExtension();
        $dir = 'uploads/' . date('ym/d');
        $file->move($dir, $filename);
        return url($dir . '/' . $filename);
    }
}
