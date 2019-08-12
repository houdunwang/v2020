<?php
$str = '1@2#3';
//preg_match_all('/\d+/',$str,$matches);
//print_r($matches);

//$arr = preg_split('/@|#/', $str);
////print_r($arr);
//echo preg_replace('/@|#/','-',$str);
echo preg_replace_callback('/\d+/',
    function ($matches) {
        if ($matches[0] > 2) {
            return $matches[0] + 200;
        }
        return $matches[0];
    }, $str);