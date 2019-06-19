<?php
include 'Uploader.php';

$uploader = new Uploader;
$files =  $uploader->make();
print_r($files);
