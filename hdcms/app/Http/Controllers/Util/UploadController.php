<?php

namespace App\Http\Controllers\Util;

use App\Models\Attachment;
use App\Services\UploadServer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function upload(Request $request, UploadServer $uploadServer, Attachment $attachment)
    {
        if ($file = $request->file('file')) {
            $path = $uploadServer->upload($file, $this->isImage($file) ? 'image' : 'file');
            \Auth::user()->attachment()->create(['filename' => $file->getClientOriginalName(), 'path' => url($path)]);
            return ['file' => url($path), 'code' => 0];
        }
    }

    protected function isImage($file)
    {
        $ext = strtolower($file->getClientOriginalExtension());
        return in_array($ext, ['jpg', 'png', 'jpeg', 'gif']);
    }

    public function lists()
    {
        $db = Attachment::paginate(20);
        $attachments = $db->toArray();
        foreach($attachments['data'] as $k=>$v){
            $attachments['data'][$k]['url'] = $v['path'];
        }
        return ['code'=>0,'data'=>$attachments['data'],'page'=>$db->links().''];
    }
}
