<?php
//$dateTime1 = new DateTime();
//$dateTime2 = new DateTime('2019-9-2 12:23:11');
//$interval = $dateTime1->diff($dateTime2);
//$format = '距离你的生日还有
//<span style="color:red">%m个月%d天%h小时</span>
//，共有%a天';
//echo $interval->format($format);

date_default_timezone_set('PRC');
$dateTime = new DateTime();
$interval = new DateInterval('P2DT2H5M');
echo $dateTime->format('Y-m-d H:i:s');
echo '<hr/>';
//增加
$dateTime->add($interval);
echo $dateTime->format('Y-m-d H:i:s');
//减少
$dateTime->sub($interval);
echo '<hr/>';
echo $dateTime->format('Y-m-d H:i:s');












