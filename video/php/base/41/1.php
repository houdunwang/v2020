<?php
//function sum(){
//return  'function sum';
//}
//$callback = 'sum';
//echo $callback();

$file = 'hdcms.jpg';
$ext = trim(strrchr($file, '.'), '.').strtolower($ext);
//echo $action;
function jpg()
{
    return 'jpg function';
}

function png()
{
    return 'png function';
}

if (function_exists($action)) {
    echo $action($file);
} else {
    echo '系统不能处理此类型';
}