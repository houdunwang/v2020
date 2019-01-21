<?php
$database = include 'database.php';
$cache =  serialize($database);

print_r(unserialize($cache)['HOST']);