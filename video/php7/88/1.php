<?php
//获取目录总大小
// function dirSize(string $dir): int
// {
//     $size = 0;
//     foreach (glob($dir . '/*') as $file) {
//         $size +=is_file($file)? filesize($file):dirSize($file);
// ../../php7    }
//     return $size;
// }
// echo dirSize('..');

function copyDir($dir, $to): bool
{
    is_dir($to) or mkdir($to, 0755, true);
    foreach (glob($dir . '/*') as $file) {
        $target = $to . '/' . basename($file);
        is_file($file) ? copy($file, $target) : copyDir($file, $target);
    }
    return true;
}

// copyDir('../../php7','../../xj');

//删除目录支持多级目录操作
function delDir(string $dir): bool
{
    if (!is_dir($dir)) {
        return true;
    }
    foreach (glob($dir . '/*') as $file) {
        is_file($file) ? unlink($file) : delDir($file);
    }
    return rmdir($dir);
}
// delDir('../../xj');

//移动目录操作
function moveDir(string $dir, string $to): bool
{
    copyDir($dir, $to);
    return delDir($dir);
}
moveDir('../../xj', '../../php7/xj');
