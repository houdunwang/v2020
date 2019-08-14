<?php
var_dump(is_writable('xj.txt'));
var_dump(is_readable('xj.txt'));
if (is_writable('xj.txt')) {
    $handle = fopen('xj.txt', 'w');
    fwrite($handle, 'houdunren.com');
}else{
    echo 'xj.txt没有操作权限，程序无法正确执行';
}