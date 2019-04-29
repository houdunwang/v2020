<?php
$allowImageType = ['jpeg'=>2000000,'jpg'=>2000000,'png'=>2000000];

$file = 'hdcms.jpeg';

$ext = strtolower(substr(strrchr($file,'.'),1));

if(!in_array($ext,array_keys($allowImageType))){
    echo 'error';
}else{
    echo 'success';
}