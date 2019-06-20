<?php
class FileHandle implements SessionHandlerInterface
{
    //session 保存目录
    protected $path;
    //session文件过期时间
    protected $maxlifetime;
    public function __construct($path = 'session', $maxlifetime = 1440)
    {
        $this->path = $this->mkdir($path);
        $this->maxlifetime = $maxlifetime;
    }
    public function close()
    {
        return true;
    }
    public function destroy($id)
    {
        if (is_file($this->path . '/' . $id)) {
            @unlink($this->path . '/' . $id);
        }
        return true;
    }
    public function gc($maxlifetime)
    {
        foreach (glob($this->path . '/*') as $file) {
            if (filemtime($file) + $this->maxlifetime < time()) {
                @unlink($file);
            }
        }
        return true;
    }
    protected function mkdir($path)
    {
        is_dir($path) or mkdir($path, 0755, true);
        return realpath($path);
    }
    public function open($path, $name)
    {
        return true;
    }
    public function read($id)
    {
        return (string)@file_get_contents($this->path . '/' . $id);
    }
    public function write($id, $data)
    {
        return (bool)@file_put_contents($this->path . '/' . $id, $data);
    }
}
