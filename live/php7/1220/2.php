<?php
//1 N次的重复计算，所以先只分析第一次
//2 要有逃脱的机会，就是终止的时机
function recursive($num){
    if($num==1){
        return $num;
    }
    return $num*recursive($num-1);
}
// 4*3*2*1
echo recursive(5);
// 3*2*1