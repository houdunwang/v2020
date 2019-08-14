<?php
$allowImageType = ['jpeg','jpg','png'];
$file = 'hdcms.gif';
$ext = strtolower(substr(strrchr($file,'.'),1));
if(!in_array($ext,$allowImageType)){
    echo 'error';
}else{
    echo 'success';
}