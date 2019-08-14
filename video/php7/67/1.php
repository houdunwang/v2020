<?php
$str = '<h1>你好</h1><H2>向军大叔</H2>';
$preg = '#<h([1-6])>(.*?)</h\1>#i';
$replace = '';
//preg_match_all($preg, $str, $matches);
//print_r($matches);
echo preg_replace($preg,'\2',$str);