<?php
//$str= '^&&^&^&^&^2300071698@qq.com';
//$preg = '/\w+@[\w\.]+/A';
//preg_match_all($preg,$str,$matches);
//print_r($matches);

$str = "1a\n";
$preg = '/\d+a$/D';
preg_match_all($preg,$str,$matches);
print_r($matches);