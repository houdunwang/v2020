<?php
$handle = fopen('xj.txt','r');
flock($handle,LOCK_SH);
echo fread($handle,9999);
flock($handle,LOCK_UN);
fclose($handle);