<?php
//do{
//    if(!isset($num)){
//        $num=10;
//    }
//    if($num==0){
//        break;
//    }
//    echo ($num--)."<hr/>";
//}while(true);
//$num = 0;
//while (true):
//    $num++;
//    switch ($num) {
//        case $num % 2 == 0:
//            echo $num . "<hr/>";
//            break;
//        case $num % 15 == 0:
//            echo $num . "<hr/>";
//            break 2;
//    }
//endwhile;

for ($num = 10; $num > 0; $num--) {
    if($num%2==0)continue;
    echo $num.'<hr/>';
}