<?php
//$arr = [1, 2, 3,];
//print_r($arr[1]);
//关联数组
//$article = [
//    'title'=>'Visual Studio Code',
//    'created_at'=>"2020-2-22"
//];
//
//echo $article['title'];

$lessons = [
    ['title' => 'Visual Studio Code', 'created_at' => '2030-2-22'],
    ['title' => 'Laravel 5.6 mini program', 'created_at' => '2030-12-12'],
];
echo $lessons[1]['created_at'];