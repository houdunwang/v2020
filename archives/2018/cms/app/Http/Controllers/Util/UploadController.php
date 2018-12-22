<?php

namespace App\Http\Controllers\Util;

use App\Models\Attachment;
use App\Services\UploadServer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function upload(Request $request, UploadServer $uploadServer)
    {
        if ($file = $request->file('file')) {
            $file = $uploadServer->upload($file, $this->isImage($file) ? 'image' : 'file');
            \Auth::user()->attachment()->create(['path' => $file, 'url' => url($file)]);
            return ['file' => url($file), 'code' => 0];
        } elseif ($content = $request->input('file')) {
            $file = $uploadServer->base64($content);
            \Auth::user()->attachment()->create(['path' => $file, 'url' => url($file)]);
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
        $attachment = Attachment::where('user_id', \Auth::user()->id)->paginate(20);
        $data = $attachment->toArray();
        foreach ($data['data'] as $k => $v) {
            $data['data'][$k]['path'] = url($v['path']);
        }
        return ['code' => 0, 'data' => $data['data'], 'page' => $attachment->links() . ''];
    }
}
