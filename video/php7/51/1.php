<?php
$database = include '../49/config/database.php';
function hd_array_change_value_case(array $data,int $case=CASE_UPPER):array{
    $action = $case==CASE_UPPER?'strtoupper':'strtolower';
    foreach($data as $k=>$v){
        $data[$k] =is_array($v)?hd_array_change_value_case($v,$case): $action($v);
    }
    return $data;
}
print_r(hd_array_change_value_case($database,CASE_LOWER));