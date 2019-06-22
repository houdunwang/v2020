<?php
include 'Thumb.php';
$thumb = new Thumb;
try {
    $thumb->make('icon-s.jpg', '1.jpg', 300, 200, 1);
} catch (Exception $e) {
    echo $e->getMessage();
}
