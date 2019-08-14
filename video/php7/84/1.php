<?php
$db = ['host'=>'localhost','user'=>'root','password'=>'admin888'];
$config = var_export($db,true);
file_put_contents('database.php','<?php return '.$config.';');

$config=  include 'database.php';
echo $config['host'];