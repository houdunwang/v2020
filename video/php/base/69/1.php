<?php
$str = '<h1>后盾人</h1><h1>向军大叔</h1>';
$preg = '/<h1>.*<\/h1>/U';
preg_match_all($preg,$str,$matches);
print_r($matches);