<?php
$handle = opendir('.');
while(false !==($file = readdir($handle))){
    if(!in_array($file,['.','..']))
    echo filetype($file)."\t\t".$file."<hr/>";
}