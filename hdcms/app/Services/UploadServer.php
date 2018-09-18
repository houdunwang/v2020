<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/9/9
 * Time: 16:52
 */

namespace App\Services;

use App\Exceptions\UploadException;
use Houdunwang\LaravelUpload\Events\UploadEvent;

class UploadServer
{
    public function upload($file, $type)
    {
        $this->check($file, $type);
        $event = new UploadEvent($file);
        event($event);
        ##上传成功的文件y
        return $event->getFile();
    }

    protected function check($file, $type)
    {
        $ext = strtolower($file->getClientOriginalExtension());
        if (!in_array($ext, explode(',', hd_config('upload.' . $type . '_type')))) {
            throw  new UploadException('文件类型不允许');
        }
        if ($file->getSize() > hd_config('upload.' . $type . '_size')) {
            throw  new UploadException('文件过大不允许上传');
        }
    }
}
