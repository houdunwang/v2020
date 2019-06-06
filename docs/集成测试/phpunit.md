# phpunit

## 安装配置

```
composer require --dev phpunit/phpunit
```

## 配置

定义 `phpunit.xml` 配置文件 ，当执行 `./vendor/phpunit` 命令时系统会按这个配置执行。

```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit backupGlobals="false"
         backupStaticAttributes="false"
         bootstrap="vendor/autoload.php"
         colors="true"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         processIsolation="false"
         stopOnFailure="false"
         syntaxCheck="false"
>
    <testsuites>
        <testsuite name="Prettus Repository Test Suite">
            <directory suffix=".php">./tests/</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

## 命名规范

- 测试用例目录要与项目目录结构一致
- 测试用户类名为：项目类名+Test.php
- 测试用例要继承 `PHPUnit\Framework\TestCase` 类
- 测试用户方法为：`test`+项目类方法

## 模拟对象

如果测试A 类，但A类依赖 B 类，B类可能是一个http请求或数据库等操作。我们不希望测试A类时过多考虑B类业务。

但在 A 类的函数代码确实需要 B 类，这时可以使用 mock 机制处理，即我们在A类中使用的B类是假的（模拟出来的）。

使用mock机制的如片：

* 只专心测试A类
* 不用为了A类配置数据库或http测试环境

示例如下：

数据库类

```
class Db
{
    public function query()
    {
        return 'houdunren';
    }
}
```

用户类

```
class User
{
    public function link()
    {
        return new Db();
    }

    public function get()
    {
        return $this->link()->query();
    }
}
```

现在我们看到 `User` 类依赖 `Db`类，我们要对User类中的get方法做单元测试，但不想考虑Db类（即不想做数据库连接配置等操作）。

```
class UserTest extends TestCase
{
    public function testGet()
    {
        //创建虚拟Db类
        $db = \Mockery::mock(Db::class);

        //定义虚拟Db的query方法返回值
        $db->allows()->query()->andReturn('这是mock的返回值，不是真正的db返回值');

        //虚拟出User类，并允许调用父类（真正的User类）的方法
        $user = \Mockery::mock(User::class)->makePartial();

        //调用User类的link方法并设置返回值为上面创建的虚拟Db对象
        $user->allows()->link()->andReturn($db);

        //这时操作get方法时使用的Db对象都是虚拟对象
        $this->assertSame('这是mock的返回值，不是真正的db返回值', $res);
    }
}
```

测试结果

```
PHPUnit 6.1.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 86 ms, Memory: 10.00MB

OK (1 test, 1 assertion)
```

## 异常处理

定义测试代码中使用的异常，phpunit将 try 这个异常，如果不使用这个方法将可能触发业务代码的异常造成测试中断。

```
class User
{
    public function get($id)
    {
        if (!is_numeric($id)) {
            throw new \Exception('invalid param $id');
        }
		 return true;
    }
}
```

下面测试调用 `User::get`  方法时传入无效参数时的业务逻辑。

```
public function testUserInvalidExtensions()
{
	$user = new User();
	$this->expectException(\Exception::class);
	$this->expectExceptionMessage('invalid param hd'); 
	$user->get('hd');
	$this->fail('未能捕获异常，断言失败');
}
```

当传入无效参数 `hd` 时，因为定义了预期异常处理 `$this->expectException(\Exception::class);` 与 `$this->expectExceptionMessage('invalid param $id'); ` 如果抛出的异常与错误消息与预期一致，测试通过，否则执行 `$this->fail()`。

## 断言

### assertSame

```
assertSame(mixed $expected, mixed $actual[, string $message = ''])
```

当两个变量 `$expected` 和 `$actual` 的值与类型不完全相同时报告错误，错误讯息由 `$message` 指定。

`assertNotSame()` 是与之相反的断言，接受相同的参数。

```
public function testFailure()
{
	$this->assertSame('2204', 2204);
}
```

### assertEquals

```
assertEquals(mixed $expected, mixed $actual[, string $message = ''])
```

当两个变量 `$expected` 和 `$actual` 不相等时报告错误，错误讯息由 `$message` 指定。

`assertNotEquals()` 是与之相反的断言，接受相同的参数。