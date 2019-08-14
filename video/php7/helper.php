<?php
//1024
function space_total(int $total): string
{
    $config = [3 => 'GB', 2 => 'MB', 1 => 'KB'];
    foreach ($config as $num => $unit) {
        if ($total > pow(1024, $num)) {
            return
                round($total / pow(1024, $num)) . $unit;
        }
    }
    return $total . 'B';
}