<?php
$files = scandir('.');
foreach($files as $file){
    if(!in_array($file,['.','..']))
    echo filetype($file)."\t\t".$file."<hr/>";
}