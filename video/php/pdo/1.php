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
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo $pdo->exec("INSERT INTO news (title,author,description) VALUES('hdcms','后盾人','hdcms课程'),('hdcms','后盾人','hdcms课程'),('hdcms','后盾人','hdcms课程')");
    // echo $pdo->exec("UPDATE news set title='后盾人houdunren.com' WHERE id>5");
    // echo $pdo->exec("DELETE FROM news WHERE id>3");
    $pdo->exec("INSERT INTO news (title,author,description) VALUES('hdcms','后盾人','hdcms课程')");
    echo $pdo->lastInsertId();
} catch (PDOException $e) {
    die("Exception:" . $e->getMessage());
}
