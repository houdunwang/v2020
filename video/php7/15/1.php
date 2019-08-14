<?php
function make()
{
    static $num = 1;
    $num = $num+1;
    return $num.'<hr/>';
}
echo make();
echo make();
echo make();
