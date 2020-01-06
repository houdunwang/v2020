<?php
header("Access-Control-Allow-Origin:*");
$users = [
    ['id' => 1, 'name' => '后盾人', 'email' => 'admin@houdunren.com'],
    ['id' => 2, 'name' => '向军', 'email' => '2300071698@qq.com'],
    ['id' => 3, 'name' => '李四', 'email' => 'lisi@qq.com'],
    ['id' => 4, 'name' => '王五', 'email' => 'wangwu@qq.com'],
    ['id' => 5, 'name' => '赵六', 'email' => 'zaoliu@qq.com'],
];
//根据用户名获取用户
if (isset($_GET['name'])) {
    $response = array_filter($users, function ($user) {
        return $user['name'] == $_GET['name'];
    });
    if ($response) {
        die(json_encode(array_pop($response)));
    } else {
        die(header('HTTP/1.1 404'));
    }
}
//根据编号获取用户列表
if (isset($_GET['id'])) {
    $ids = explode(',', $_GET['id']);
    $response = array_filter($users, function ($user) use ($ids) {
        return in_array($user['id'], $ids);
    });
    die(json_encode($response));
}