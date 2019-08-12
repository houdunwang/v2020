<?php
$str = '<h1>
向军大叔
</h1>';
$preg = '#<h1>.*?</h1>#is';
$replace = '';
//preg_match_all($preg, $str, $matches);
//print_r($matches);
echo preg_replace($preg,'',$str);