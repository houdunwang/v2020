<?php
//if (file_exists('xj2.txt')) {
////    $handle = @fopen('xj2.txt', 'r');
////    var_dump($handle);
////}
///
$handle = fopen('xj.txt', 'w+b');
fwrite($handle, '向军大叔');
fseek($handle,0);
echo fread($handle,9999);
fclose($handle);
