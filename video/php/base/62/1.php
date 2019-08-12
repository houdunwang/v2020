<?php
//原子表 [abc]
//$status = preg_match('/[abc]/','e');
//var_dump($status);
// [6-9] 数字

//$status = preg_match('/[a-zA-Z]/','E');
//var_dump($status);

//<h1>houdunren.com</h1>

//. 可匹配除换行符外
//$status = preg_match('/./','aeew');
//var_dump($status);

//$status =preg_match('/[^678]/',6782);
//var_dump($status);
// ,，
$str = '1.jpg@2.jpg#3.jpg';
$files = preg_split('/[@#]/',$str);
var_dump($files);
echo implode(',',$files);

