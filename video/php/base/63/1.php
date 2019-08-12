<?php
//原子组()  原子表[]  (12) [12]

//$status = preg_match('/12/',12);
//var_dump($status);

//$str = '官网 houdunren.com ，技术支持 houdunwang.com ,百度 baidu.com';
//$preg = "/(\.)(com)/";
//echo preg_replace($preg,'\1<span style="color:red">\2</span>',$str);
//  sdlkdfsk@@@ldslksdlkhoudunren@houdunren.comdsfsdfsdf
$status = preg_match('/^12$/',12);
var_dump($status);
