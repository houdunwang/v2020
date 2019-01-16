<?php
$users = [
    ['name' => '向军大叔', 'age' => '16',],
    ['name' => '小明', 'age' => '19',],
    ['name' => '张三', 'age' => '23',],
    ['name' => '李四', 'age' => '16',],
];
//while (list('name' => $name, 'name' => $age) = current($users)):
//    echo "name:{$name}, age:{$age} <br/>";
//    next($users);
//endwhile;

foreach($users as $key=>$user){
    $users[$key]['age'] +=50;
//    $user['age']+=50;
//    echo $key.'='.$user['name'].'<br/>';
}
print_r($users);