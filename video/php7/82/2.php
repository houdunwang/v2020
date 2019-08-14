<?php
// 2.cache.php 缓存文件  2.blade.php
$name = '向军大叔';
if (is_file('2.cache.php')
    && filemtime('2.cache.php') > (time() - 10)) {
    include '2.cache.php';
    echo 'is cache....';
} else {
    ob_start();
    include '2.blade.php';
    $content = ob_get_contents();
    file_put_contents('2.cache.php',$content);
}