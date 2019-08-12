<?php
$str = <<<php
#1
后盾人
@#3
后盾云
#2
向军大叔
php;
$preg = '/^\#\d+/mx';
echo preg_replace($preg,'',$str);
