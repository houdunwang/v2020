<?php
$str = 'abc';
$preg = '/^a\w+
#这是一个正则练习     
/x';
echo preg_replace($preg,'',$str);