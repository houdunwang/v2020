<?php
//$status = 'warning';
//switch ($status) {
//    case 'info';
//    case 'success':
//        echo 'success & info';
//        break;
//    case 'error':
//        echo 'error';
//        break;
//    default:
//        echo 'default....';
//}
$age = 20;
switch ($age) :
    case $age < 10:
        echo '儿童';
        break;
    case $age < 30:
        echo '青年';
        break;
    default:
        echo '中年';
endswitch;