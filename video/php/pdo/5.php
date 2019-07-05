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
    // $sth = $pdo->prepare("SELECT * FROM news WHERE id=:id");
    // $sth->execute([':id' => $_GET['id']]);
    // print_r($sth->fetchAll());
    // $sth = $pdo->prepare('INSERT INTO news (title,author) VALUES(:title,:author)');
    // $sth->execute([':title' => '家庭幸福', ':author' => '后盾人']);
    // echo $pdo->lastInsertId();
    // $sth = $pdo->prepare('UPDATE news SET title=:title WHERE id>2');
    // $sth->execute([':title' => $_GET['title']]);
    $sth = $pdo->prepare('DELETE FROM news WHERE id>:id');
    $sth->execute([':id' => $_GET['id']]);
} catch (PDOException $e) {
    die("Exception:" . $e->getMessage());
}
