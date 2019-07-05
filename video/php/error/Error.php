<?php

namespace Core;

class Error
{
    protected $debug;
    public function __construct($debug = true)
    {
        $this->debug = $debug;
    }
    public function error()
    {
        error_reporting(0);
        set_error_handler([$this, 'handle'], E_ALL | E_STRICT);
    }
    public function handle($code, $error, $file, $line)
    {
        $msg = $error . "($code)" . $file . "($line)";
        switch ($code) {
            case E_NOTICE:
                if ($this->debug) {
                    include 'views/notice.php';
                }
                break;
            default:
                if ($this->debug) {
                    include 'views/error.php';
                } else {
                    # 使用日志保存错误
                    $file = 'logs/' . date("Y_m_d") . '.log';
                    error_log(date('[c]') . $msg . PHP_EOL, 3, $file);
                }
                die;
        }
    }
}
