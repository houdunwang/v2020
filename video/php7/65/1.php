<?php
//$str = '1212451';
//$status= preg_match('/^\d{2,6}$/',$str);
//var_dump($status);

//$str = "http://www.houdunren.com";
//$preg=  '/https?:\/\/(.+)\.(com|cn|org|net)/';
//$status= preg_match($preg,$str);
//var_dump($status);
$str = '<h1>hello houdunren</h1>';
$replace= "<h1><a href='https://www.houdunren.com'>\\1</a></h1>";
echo preg_replace('@<h1>(.+)</h1>@',$replace,$str);
