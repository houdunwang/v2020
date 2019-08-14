<?php
$handle = fopen('xj.txt', 'rb');
flock($handle, LOCK_EX);
fwrite($handle, '向军大叔');
sleep(3);
flock($handle, LOCK_UN);
fclose($handle);