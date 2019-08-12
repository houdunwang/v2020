<?php
//.html
$files = glob("{./*.php,./*.txt,./*.html}",GLOB_BRACE);
print_r($files);