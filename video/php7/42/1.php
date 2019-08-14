<?php
//5 1*2*3*4*5
function recursive($num){
    //3*(2)
    if($num==1){
        return $num;
    }
    return $num*recursive($num-1);
}
echo recursive(5);