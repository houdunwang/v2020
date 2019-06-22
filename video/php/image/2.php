<?php
session_start();
if (strtoupper($_POST['captcha']) == $_SESSION['captcha']) {
    echo 'ok';
} else {
    echo 'error';
}
