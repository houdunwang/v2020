<?php
//echo disk_total_space('.');
//echo disk_free_space('.');
include '../helper.php';
echo space_total(disk_free_space('.'));