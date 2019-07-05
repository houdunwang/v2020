<?php
header("Content-type:text/html;charset=utf8");
$config = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => 'root',
    'database' => 'houdunren',
    'charset' => 'utf8'
];
$dsn = sprintf(
    "mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']
);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    // [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    // $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $pdo->query("SELECT * FROM news");
    $rows = $query->fetchAll();
    // echo $rows[0]['title'];
    print_r($rows);
} catch (PDOException $e) {
    die("Exception:" . $e->getMessage());
}
