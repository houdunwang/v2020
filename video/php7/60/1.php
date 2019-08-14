<?php
//echo ceil(10.2);
//echo floor(10.2);
//echo max(1,2);
//echo min(1,2);
//echo round(10.5);
//echo mt_rand(1,999);
//$str = '123456789abcdefkgmnw';
//echo $str[1];
function code(int $len = 5): string
{
    $str = '123456789abcdefkgmnw';
    $code='';
    for($i=0;$i<$len;$i++){
        $index = mt_rand(0,strlen($str)-1);
        $code.=strtoupper($str[$index]);
    }
    return $code;
}
echo code(6);
