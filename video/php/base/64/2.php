<?php
$str = '后盾人 houdunren.com 后盾网 houdunwang.com';
$preg = '/(houdunren|houdunwang)(\.com)/';
$replace = '<a href="http://www.\1\2">\0</a>';
echo preg_replace($preg,$replace,$str);
