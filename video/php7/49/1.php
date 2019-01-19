<?php
$database = include 'config/database.php';
//print_r($database);die;
$database =
    array_merge($database, ['host' => '127.0.0.1', 'password' => 'admin888']);
print_r($database);
