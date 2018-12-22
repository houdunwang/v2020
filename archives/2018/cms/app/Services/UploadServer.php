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

    public function base64($content)
    {
        //粘贴上传BASE64图片，如editor.md编辑器中的使用
        $imgdata = substr($content, strpos($content, ",") + 1);
        $decodedData = base64_decode($imgdata);
        if (strlen($content) > hd_config('upload.image_size')) {
            throw new UploadException('文件过大不允许上传');
        }
        $dir = 'uploads/' . date('ym/d');
        is_dir($dir) or mkdir($dir, 0755, true);
        $fileName = $dir . '/' . str_random(10) . microtime(true) . '.jpeg';
        file_put_contents($fileName, $decodedData);
        return $fileName;
    }
}
