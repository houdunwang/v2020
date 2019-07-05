<?php
include 'Code.php';
try {
    $code = new Code;
    $code->make(100);
} catch (Exception $e) {
    // echo 333;
    echo $e->getMessage();
}
// if ($code->make(50) === false) {
//     echo $code->getError();
// }
