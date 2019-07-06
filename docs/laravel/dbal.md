# dbal

dbal 是非常方便的数据库管理驱动

## 文档

Github： https://github.com/doctrine/dbal

官网：https://www.doctrine-project.org/projects/dbal.html

## 使用

下面是在laravel框架中使用的示例：

```
$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
	'dbname'   => config('database.connections.mysql.database'),
	'user'     => config('database.connections.mysql.username'),
	'password' => config('database.connections.mysql.password'),
	'host'     => config('database.connections.mysql.host'),
	'driver'   => 'pdo_mysql',
	'charset'  => config('database.connections.mysql.charset')
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$sm = $conn->getSchemaManager();

#获取configs表字段信息
$lists = $sm->listTableColumns('configs');

#获取列表注释
dd($lists['title']->getComment());
```



> 具体使用请查看官方文档，功能非常多且方便