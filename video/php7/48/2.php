<?php
$users = [
    ['name' => '向军大叔', 'age' => '16',],
    ['name' => '小明', 'age' => '19',],
    ['name' => '张三', 'age' => '23',],
    ['name' => '李四', 'age' => '16',],
];
$names = array_map(function($user){
    return $user['name'];
},$users);
print_r($names);
//$mapUsers = array_map(function($user){
//    unset($user['age']);
//    $user['class'] = 'houdunren.com';
//    return $user;
//},$users);
//print_r($mapUsers);