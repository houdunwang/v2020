<?php
include 'Water.php';
try {
    $water = new Water('water.png');
    $water->make('houdunren.jpg', 'xj.jpg', 9);
} catch (Exception $e) {
    echo $e->getMessage();
}
