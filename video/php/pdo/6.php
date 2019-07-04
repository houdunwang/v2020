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
    $sth = $pdo->prepare("SELECT * FROM news WHERE id>=? AND id<=?");
    $sth->execute([$_GET['begin'], $_GET['end']]);
    print_r($sth->fetchAll());
} catch (PDOException $e) {
    die("Exception:" . $e->getMessage());
}
