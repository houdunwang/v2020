<?php
$database =include 'config/database.php';
$database = array_change_key_case($database,CASE_LOWER);
print_r($database);