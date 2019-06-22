<?php
$rw = 300;
$rh = 500;
$res = imagecreatetruecolor($rw, $rh);
$image = imagecreatefromjpeg('icon-s.jpg');
$iw = imagesx($image);
$ih = imagesy($image);
if ($iw / $rw > $ih / $rh) {
    $iw = $ih / $rh * $rw;
} else {
    $ih = $iw / $rw * $rh;
}

imagecopyresampled($res, $image, 0, 0, 0, 0, $rw, $rh, $iw, $ih);
header('Content-type:image/jpeg');
imagejpeg($res);
