<?php
$users = [
    ['name' => '向军大叔', 'age' => '16',],
    ['name' => '小明', 'age' => '19',],
    ['name' => '张三', 'age' => '23',],
    ['name' => '李四', 'age' => '16',],
];
$stringUsers = array_map(function($user){
    return implode('-',array_values($user));
},$users);
print_r($stringUsers);