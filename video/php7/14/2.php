<?php
$name = '向军大叔';

function make()
{
    global $name;
    echo $name;
    unset($name);
}
make();
echo $name;
