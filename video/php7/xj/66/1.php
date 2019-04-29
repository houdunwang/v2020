<?php
//$str = 123456;
//preg_match('/\d+?/',$str,$matches);
//print_r($matches);

$str = '<h1>你好</h1><h1>向军大叔</h1>';
$preg = '/<h1>(.+?)<\/h1>/';
//preg_match_all($preg,$str,$matches);
//print_r($matches);
echo preg_replace($preg,'<h1><em>\1</em></h1>',$str);