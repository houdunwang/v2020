<?php
$filename = 'xj' . time() . '.txt';
$handle = fopen($filename, 'x+');
fwrite($handle,'向军大叔');
fclose($handle);
$file = fopen($filename,'r');
echo fread($file,filesize($filename));

