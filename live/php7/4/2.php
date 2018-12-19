<?php
//function show(){
//    $a = 98;
//}
//
//show();
//echo $a;
$a = 99;
function show(){
    global $a;
    echo $a;
}

show();
//echo $a;