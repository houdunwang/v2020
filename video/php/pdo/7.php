<?php

use Database\DB;

include "DB.php";
$config = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => 'root',
    'database' => 'houdunren',
    'charset' => 'utf8'
];
try {
    $db = new DB($config);
    // $db->execute("INSERT INTO news SET title=?,author=?", ['后盾人', '后盾人houdunren.com']);
    // $rows = $db->query('SELECT * FROM news WHERE id>:id', [':id' => 1]);
    // print_r($rows);
    // $db->table('news')->insert(['title' => "后盾人", 'author' => 'hdcms']);
    // $db->table('news')->where('id>2')->update(['title' => "后盾云", 'author' => 'hdcms.com']);
    $db->table('news')->where('id>=4')->delete();
    $rows = $db->table('news')->limit(1)->field('title')->get();
    print_r($rows);
} catch (Exception $e) {
    die($e->getMessage());
}
