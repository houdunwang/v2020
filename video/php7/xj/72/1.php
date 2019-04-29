<?php
$filename= 'xj.txt';
$handle = fopen($filename,'rb');
//echo filesize($filename);
//echo fread($handle,2);
//echo '<hr/>';
//echo fread($handle,99999999);
fseek($handle,1);
echo fread($handle,filesize($filename));
