<?php
/*$status = preg_match('/a/','sdkaldsklk');*/
//var_dump($status);
// 元字符 \d 0-9 \D ^0-9
// \w a-zA-Z0-9_ \W ^a-zA-Z0-9_
// \s 匹配任意空白  \S ^匹配任意空白
// \n 换行符 \t 制表符
$status = preg_match('/\t/',"\t");
var_dump($status);

