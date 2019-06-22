<?php
$res = imagecreatefromjpeg('houdunren.jpg');
// $icon = imagecreatefromjpeg('icon-s.jpg');
$logo = imagecreatefrompng('water.png');
imagecopy($res, $logo, 100, 100, 0, 0, imagesx($logo), imagesy($logo));
// imagecopymerge($res, $logo, 100, 100, 0, 0, imagesx($logo), imagesy($logo), 50);
header('Content-type:image/jpeg');
imagejpeg($res);
