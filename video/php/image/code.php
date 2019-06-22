<?php
session_start();
include 'Captcha.php';
$captcha = new Captcha(100, 50, 4);
$code = $captcha->render();
$_SESSION['captcha'] = $code;
