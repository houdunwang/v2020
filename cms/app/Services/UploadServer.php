<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/30
 * Time: 20:48
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
        return $event->getFile();
    }

    protected function check($file, $type)
    {
        $ext = strtolower($file->getClientOriginalExtension());
        if (!in_array($ext, explode(',', hd_config('upload.' . $type . '_type')))) {
            throw new UploadException('上传类型错误');
        }
        if ($file->getSize() > hd_config('upload.' . $type . '_size')) {
            throw new UploadException('文件过大不允许上传');
        }
    }
}
