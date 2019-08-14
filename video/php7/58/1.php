<?php
// DateTime DateInterval DateTimeZone
date_default_timezone_set('PRC');
//$prc = new DateTimeZone('PRC');
//$dateTime = new DateTime();
//$dateTime->setTimezone($prc);
//echo $dateTime->format('Y-m-d H:i:s');

$dateTime = new DateTime('2020-2-16 07:12:44');
//$dateTime->setDate(2019,2,12);
//$dateTime->setTime(12,22,12);
//$dateTime->setTimestamp(time());
//echo $dateTime->format('Y-m-d H:i:s');
//echo $dateTime->format('U');
//echo date('Y-m-d H:i:s',$dateTime->format('U'));

$dateTime = DateTime::createFromFormat('Y/m-d H:i:s','2019/2-12 08:22:13');
echo $dateTime->format('Y-m-d H:i:s');