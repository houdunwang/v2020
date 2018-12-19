<?php
function make()
{
    static $a = 1;
    ++$a;
    echo $a . "<hr/>";
}

make();
make();
make();
make();
make();
make();
make();
make();