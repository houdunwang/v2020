<?php
//$name = '向军大叔';
//function show(&$name){
////    echo $GLOBALS['name'];
//    $name .=' houdunren.com';
////    echo $name;
//}
//show($name);
//echo $name;

function sum(int ...$nums): int
{
    static $count = 0;
    return $count += array_sum($nums);
}

echo sum(1, 2, 3);
echo '<br/>';
echo sum(1, 2, 3);