<?php
$handle = fopen('users.txt', 'rb');
//while (!feof($handle)) {
//    echo fread($handle, 1);
//}

//while (!feof($handle)) {
////echo fgetc($handle);
////}
//while(!feof($handle))
//echo fgets($handle);
error_reporting(0);
//while(!feof($handle))
//echo fgetss($handle,999,'<h1><h2>');

$users = fgetcsv($handle,',');
print_r($users);
