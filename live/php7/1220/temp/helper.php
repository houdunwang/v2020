<?php
function show()
{
    echo 'show....';
}

function load($file)
{
    static $cache = [];
    //exception 异常。。。文件判断
    if (!isset($cache[$file])) {
        include $file;
        $cache[$file] = $file;
    }
    return true;
}