<?php
//function mobile($tel){
//    return substr($tel,0,-4).'****';
//}
//echo mobile('11122222121');

//function show(&$var){
//    $var++;
//    echo $var;
//}
////传值  传址
//$var = 1;
//show($var);
//echo "<hr/>";
//echo $var;

//function sum($var1,$var2){
//    return $var1+$var2;
//}
//
//echo sum(2,3);

//function sum(...$vars){
//    return array_sum($vars);
//}
//echo sum(1,2,3,4,45,5,5,56);

function mobile($tel,$num=4,$fix = '*'){
    return substr($tel,0,-1*$num)
        .str_repeat($fix,$num);
}
echo mobile('11122222121',3);