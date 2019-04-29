<?php
$total = 100;
echo min($total,max(1,$_GET['page']??1));