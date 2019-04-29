<?php
$handle = fopen('xj.txt', 'w');
$stat = flock($handle, LOCK_EX | LOCK_NB,$wouldblock);
if(!$wouldblock){
    fwrite($handle, 'houdunren.com');
}else{
    echo 'file is locked';
}
//flock($handle, LOCK_UN);
//fclose($handle);