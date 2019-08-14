<?php
$a = 1;
$b = &$a;
$b = 3;
echo $a;
echo $b;
echo '<hr/>';
$a = 9;
echo $b;
echo $a;
