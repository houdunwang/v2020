<?php
//$string = "<h1 style=\"color:red\">houdunren</h1>";
//echo $string;
$str = <<<str
<h1 style="color:green">houdunren.com</h1> 
<script >
document.write('向军大叔');
</script> 
str;
echo $str;
