<?php
declare(strict_types=1);
//function show(int $num)
//{
//    return $num;
//}
//
//var_dump(show('2'));
function sum(int ...$nums)
{
    return array_sum($nums);
}

try {
    echo sum(1, 2, 3, '5');
} catch (\Throwable $th) {
    echo $th->getMessage();
}