<?php

namespace App\Servers;

use App\Exceptions\ViewException;

class View
{
    public static function make(string $file, array $vars = [])
    {
        $file = 'Views/' . $file . ".blade.php";
        if (!\is_file($file)) {
            throw new ViewException("模板文件{$file}不存在");
        }
        include $file;
    }
}
