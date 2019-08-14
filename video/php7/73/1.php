<?php
$handle = fopen('xj.txt','r+b');
//echo fread($handle,filesize('xj.txt'));
fseek($handle,filesize('xj.txt'));
$res = fwrite($handle,'向军大叔');
//fseek($handle,0);
//echo fread($handle,9999);
fclose($handle);
$handle = fopen('xj.txt','r');
echo fread($handle,9999);