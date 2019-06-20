<?php
session_save_path('session');
session_start();
$_SESSION['web'] = 'houdunren.com';

var_dump(1 / mt_rand(1, 1));
