<?php
//array_filter
$users = [
    ['name' => '向军大叔', 'age' => '16',],
    ['name' => '小明', 'age' => '19',],
    ['name' => '张三', 'age' => '23',],
    ['name' => '李四', 'age' => '16',],
];
$filterUsers = array_filter($users,function($user){
    return $user['age']>20;
});
print_r($filterUsers);
