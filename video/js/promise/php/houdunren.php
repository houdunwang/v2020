<?php
header("Access-Control-Allow-Origin:*");
$lessons = [
    1 => ["js" => 60, "ts" => 89],
    2 =>  ["js" => 55, "ts" => 76],
];
if (isset($_GET['id'])) {
    $ids = explode(',', $_GET['id']);
    $response = array_filter($lessons, function ($v, $k) use ($ids) {
        return in_array($k, $ids);
    }, ARRAY_FILTER_USE_BOTH);
    sort($response);
    die(json_encode($response));
}