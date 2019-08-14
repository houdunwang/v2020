<?php
$allowImageType = ['jpeg'=>2000000,'jpg'=>2000000,'png'=>2000000];
$file = 'hdcms.png';
$ext = strtolower(substr(strrchr($file,'.'),1));
if(!array_key_exists($ext,$allowImageType)){
    echo 'wrong';
}else{
    echo 'success';
}