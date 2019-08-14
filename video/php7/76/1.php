<?php
//header('Content-type:image/png');
$handle = fopen('xj.png','r');
$png = fopen('a.png','w');
fwrite($png,fread($handle,999999));