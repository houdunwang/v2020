<?php
class Uploader
{
    protected $dir;

    public function make(): array
    {
        $this->makeDir();
        $files = $this->format();
        //上传成功的文件 
        $saveFiles = [];
        foreach ($files as $file) {
            if ($file['error'] == 0) {
                if (is_uploaded_file($file['tmp_name'])) {
                    $to =  $this->dir . '/' . time() . mt_rand(1, 9999) . '.' . pathinfo($file['name'])['extension'];
                    if (move_uploaded_file($file['tmp_name'], $to)) {
                        $saveFiles[] = [
                            'path' => $to,
                            'size' => $file['size'],
                            'name' => $file['name']
                        ];
                    }
                }
            }
        }
        return $saveFiles;
    }
    //创建上传目录
    private function makeDir(): bool
    {
        $path = 'uploads/' . date('y/m');
        $this->dir = $path;
        return is_dir($path) or mkdir($path, 0755, true);
    }
    //对不同结构的数据统一数据格式
    private function format(): array
    {
        $files = [];
        foreach ($_FILES as $field) {
            if (is_array($field['name'])) {
                foreach ($field['name'] as $id => $file) {
                    $files[] = [
                        'name' => $field['name'][$id],
                        'type' => $field['type'][$id],
                        'error' => $field['error'][$id],
                        'tmp_name' => $field['tmp_name'][$id],
                        'size' => $field['size'][$id],
                    ];
                }
            } else {
                $files[] = $field;
            }
        }
        return $files;
    }
}
