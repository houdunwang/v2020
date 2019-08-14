<?php
$str = 'http://www.baidu.com 百度 http://www.sina.com 新浪网';
$preg = "/\.(baidu|sina)/";
$replace = '.houdunren';
echo preg_replace($preg, $replace, $str);
