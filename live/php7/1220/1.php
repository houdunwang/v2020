<?php
function access($user=null){
    $user= is_null($user)?'当前用户':$user;
    //判断逻辑
    return $user;
}
var_dump(access());

$action =  'access';

echo $action();

// gif  jpeg  png bmp   都用不同函数处理   $function ='jpgFunction' $function ='gifFunction'
//$function()