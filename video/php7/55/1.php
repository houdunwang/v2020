<?php
date_default_timezone_set('PRC');
//echo time();
//echo microtime(true);
function runtime($start = null, $end = null)
{
    static $cache = [];
    if (is_null($start)) {
        return $cache;
    } elseif (is_null($end)) {
        return $cache[$start] = microtime(true);
    } else {
        $end = $cache[$end] ?? microtime(true);
        return round($end - $cache[$start],3);
    }
}
runtime('for');
for($i=0;$i<20000000;$i++){
    $i++;
}
runtime('forEnd');
echo 'for循环用的时间：'. runtime('for','forEnd');
runtime('while');
$n=0;
while($n<20000000){
    $n++;
}
runtime('whileEnd');
echo '<hr/>while循环时间：'. runtime('while','whileEnd');

echo '<hr/>总执行时间:'.runtime('for','whileEnd');