<?php
//allow_url_fopen
$handle = fopen('https://www.hdcms.com', 'r');
preg_match('/<title>(.*)<\/title>/isU',
    fread($handle, 999999), $matches);
echo $matches[1];
//$index = fopen('index.html','w');
//fwrite($index,fread($handle,999999));