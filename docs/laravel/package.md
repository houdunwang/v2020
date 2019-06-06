# 扩展包开发

扩展包是对软件功能的扩充，下面我们开发一个多网关上传扩展包，目前支持阿里云OSS上传。

本项目地址：[https://github.com/houdunwang/uploader](https://github.com/houdunwang/uploader)

> 后盾人 www.houdunren.com  作者：[向军大叔](http://www.aoxiangjun.com)

## 软件特点

* 支持多网关处理业务
* 提供provider与facade支持，完美集成Laravel框架
* 单元测试全覆盖，保证代码健壮
* 发布到Github与packagist.org开源共享
* 使用简单可快速集成到项目中

## 基础构建

### 创建目录

```
$ mkdir uploader
```

###  composer 配置

```
$ cd uploader
$ composer init # 一直回车
```

```
This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [xj/uploader]: houdunwang/uploader 
Description []:
Author [houdunwang <2300071698@qq.com>, n to skip]:
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []:
License []:

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]?
Search for a package:
Would you like to define your dev dependencies (require-dev) interactively [yes]?
Search for a package:

{
    "name": "houdunwang/uploader",
    "authors": [
        {
            "name": "houdunwang",
            "email": "2300071698@qq.com"
        }
    ],
    "require": {},
}

Do you confirm generation [yes]?
```

说明

```
# houdunwang为我Github帐号，你要填写你的Github库名称
Author [houdunwang <2300071698@qq.com>, n to skip]: 你Github帐号
剩下一直回车即可
```

### 目录结构

```
├── config			# 配置文件目录
├── composer.json  
├── phpunit.xml		# 单元测试配置文件
├── src				# 软件代码
│   └── Exceptions  # 异常处理
│   └── Services  # 处理服务类
└── tests			# 测试代码
```

修改 composer.json 设置自动加载

```
...
"autoload": {
	"psr-4": {
		"Houdunwang\\Uploader\\": "src/"
	}
}
...
```

设置单元测试配置文件

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

### 配置站点

下面是我的 homestead 的配置，如果你使用 wamp 等集成开发环境可以省略这一步。

```
sites:
    - map: uploader.test
      to: /home/vagrant/code/components/uploader
```

配置 host 文件

```
192.168.10.10   uploader.test
```

### 安装依赖包

安装以下两个依赖包用于软件的单元测试

```
$ composer require phpunit/phpunit mockery/mockery 
$ composer require aliyuncs/oss-sdk-php  
```

* phpunit/phpunit mockery/mockery 用于单元测试的组件
* aliyuncs/oss-sdk-php  阿里云提供的OSS上传库

## 业务实现

### 软件配置

配置文件定义在 `config/uploader.php`，内容如下：

```
<?php
return [
    'oss' => [
        'accessKeyId' => '',
        'accessKeySecret' => '',
        'bucket' => '',
        'endpoint' => '',
    ],
];
```

### 异常处理

异常处理用于处理运行错误，比如用户参数错误、Http处理错误等。下面是我们定义的异常处理类

```
src
│   ├── Exceptions
│   │   ├── Exception.php	# 基础异常
│   │   ├── InvalidParamException.php # 参数错误异常
│   │   └── ServerDisposeException.php # 服务网关异常(如调用阿里oss服务异常)
```

下面是各个异常类

```
namespace Houdunwang\Uploader\Exceptions;
class Exception extends \Exception
{

}
```

```
namespace Houdunwang\Uploader\Exceptions;
class InvalidParamException extends Exception
{

}
```

```
namespace Houdunwang\Uploader\Exceptions;
class ServerDisposeException extends Exception
{

}
```

### 业务代码

**扩展包入口类**

因为上传支持多个服务，我们使用 `Uploader` 类统一调用处理。

```
<?php
/** .-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/12
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace Houdunwang\Uploader;

use Houdunwang\Uploader\Exceptions\InvalidParamException;
use Houdunwang\Uploader\Services\OssServer;

class Uploader
{
    protected $config;

    /**
     * 服务列表
     * @var array
     */
    protected $servers = [
        'oss' => OssServer::class,
    ];

    public function config(array $config): Uploader
    {
        $this->config = $config;
        return $this;
    }

    /**
     * 上传处理
     * @param string $file
     * @param string $service
     * @return string 文件
     * @throws InvalidParamException
     */
    public function upload(string $file, string $service='oss'): string
    {
        if (!is_string($file) || !is_file($file)) {
            throw new InvalidParamException('invalid file param');
        }
        if (!in_array($service, ['oss', 'local'])) {
            throw new ServerDisposeException('service dones not exists' . $service);
        }
        try {
            $serverInstance = new $this->servers[$service];
            return $serverInstance->config($this->config[$service])->upload($file);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}

```

**OSS** 服务

```
<?php
/** .-------------------------------------------------------------------
 * |  Software: [hdcms framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/12
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace Houdunwang\Uploader\Services;

use Houdunwang\Uploader\Exceptions\HttpException;
use Houdunwang\Uploader\Exceptions\InvalidParamException;
use OSS\OssClient;

class OssServer implements ServerInterface
{
    protected $config;

    /**
     * 设置配置
     * @param array $config
     * @return OssServer
     * @throws InvalidParamException
     */
    public function config(array $config): ServerInterface
    {
        if (empty($config['accessKeyId']) || empty($config['accessKeySecret']) || empty($config['bucket']) || empty($config['endpoint'])) {
            throw new InvalidParamException('server param invalid');
        }
        $this->config = $config;
        return $this;
    }

    /**
     * OSS服务
     * @return OssClient
     * @throws \OSS\Core\OssException
     */
    public function getHttpClient()
    {
        return new OssClient($this->config['accessKeyId'], $this->config['accessKeySecret'], $this->config['endpoint']);
    }

    /**
     * 执行上传
     * @param string $file
     * @return string
     * @throws HttpException
     * @throws InvalidParamException
     */
    public function upload(string $file): string
    {
        if (!is_string($file) || !is_file($file)) {
            throw new InvalidParamException($file . ' is not a file');
        }
        try {
            $res = $this->getHttpClient()->uploadFile($this->config['bucket'], $this->getFileName($file), $file);
            return $res['oss-request-url'];
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * 随机文件名
     * @param string $file
     * @return string
     */
    public function getFileName(string $file): string
    {
        $extension = substr($file, strrpos($file, '.'));
        return md5($file) . time() . $extension;
    }
}
```

## Laravel集成

为了更好在Laravel框架中使用，我们需要添加 `provider` 与 `Facade` 支持，并在Laravel框架的 config 目录中生成扩展包配置文件。

### composer.json

首先需要在 `composer.json` 文件中定义 `provider` 与 `facade` 配置项

```
{
   ...
    "extra": {
        "laravel": {
            "providers": [
                "Houdunwang\\Uploader\\ServiceProvider"
            ],
            "aliases": {
                "Uploader": "Houdunwang\\Uploader\\Facade"
            }
        }
    },
    ...
}
```

### Provider

创建 `src/ServiceProvider` 服务文件

```
<?php
/** .-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/12
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace Houdunwang\Uploader;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    /**
     * 服务引导方法
     *
     * @return void
     */
    public function boot(): void
    {
        //发布配置文件到项目的 config 目录中
        $this->publishes([
            __DIR__ . '/config/uploader.php' => config_path('uploader.php'),
        ]);
    }

    /**
     * 注册服务
     */
    public function register(): void
    {
        $this->app->singleton(Uploader::class, function () {
            return new Uploader();
        });
    }
}
```

### Facade

创建 `src/Facade`外观文件（方便在Laravel中以像DB::table()形式使用扩展包）

```
<?php
/** .-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/12
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace Houdunwang\Uploader;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade
{
    /**
     * 获取组件的注册名称。
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Uploader::class;
    }
}
```

## 单元测试

使用单元测试程序的稳定性是软件开发中必不可少的环节。

### 命名规范

- 测试用例目录要与项目目录结构一致
- 测试用户类名为：项目类名+Test.php
- 测试用例要继承 `PHPUnit\Framework\TestCase` 类
- 测试用户方法为：`test`+项目类方法

### 单元测试

对OssServer服务类测试

```
<?php
/** .-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/12
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

use PHPUnit\Framework\TestCase;
use Houdunwang\Uploader\Services\OssServer;
use Mockery\Matcher\AnyArgs;
use Houdunwang\Uploader\Exceptions\InvalidParamException;

class OssServerTest extends TestCase
{
    public function testConfig()
    {
        $this->expectException(InvalidParamException::class);
        $this->expectExceptionMessage('server param invalid');
        $oss = new OssServer();
        $oss->config([
            'accessKeyIda' => 'test',
            'accessKeySecret' => 'test',
            'bucket' => 'test',
            'endpoint' => 'test',
        ]);
        $this->fail('config param exception fail');
    }

    public function testGetFileName()
    {
        $oss = Mockery::mock(OssServer::class)->makePartial();
        $this->assertStringEndsWith('.jpeg', $oss->getFileName('a.jpeg'));
    }

    public function testUploadParamFile()
    {
        $oss = \Mockery::mock(OssServer::class)->makePartial();
        $this->expectException(InvalidParamException::class);
        $this->expectExceptionMessage('a.jpeg is not a file');
        $oss->upload('a.jpeg');
        $this->fail('ossClient request param invalid');
    }

    public function testUpload()
    {
        $client = \Mockery::mock(\OSS\OssClient::class);
        $client->allows()->uploadFile(new AnyArgs())->andReturn([
            'oss-request-url' => __FILE__,
        ]);
        $oss = \Mockery::mock(OssServer::class)->makePartial();
        $oss->allows()->getHttpClient()->andReturn($client);
        return $this->assertSame(__FILE__, $oss->upload(__FILE__));
    }
}

```

对扩展包入口类测试

```
<?php
/** .-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/12
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

use PHPUnit\Framework\TestCase;
use Houdunwang\Uploader\Exceptions\InvalidParamException;

class UploaderTest extends TestCase
{
    public function testUploadParamException()
    {
        $uploader = new \Houdunwang\Uploader\Uploader([]);
        $this->expectException(InvalidParamException::class);
        $this->expectExceptionMessage('invalid file param');
        $uploader->upload('test.php', 'oss');

        $this->fail('server param exception');

    }
}
```

测试结果：

```
➜  uploader git:(master) ✗ phpunit
PHPUnit 6.1.0 by Sebastian Bergmann and contributors.

.....                                                               5 / 5 (100%)

Time: 98 ms, Memory: 10.00MB

OK (5 tests, 8 assertions)
➜  uploader git:(master) 
```

## 项目测试

下面我们在Laravel 项目中进行测试，首先使用以下命令安装laravel项目。

```
composer create-project --prefer-dist laravel/laravel
```

安装我们的本地扩展包

```
$ composer config repositories.uploader path ../components/uploader
$ composer require houdunwang/uploader:dev-master
```

### 生成配置文件

组件会自动发布配置文件 `uploader.php` 到项目的 `config` 目录中，需要先进行相应配置。

也可以使用以下方式手动发布配置：

```
$ laravel php artisan vendor:publish

Which provider or tag's files would you like to publish?:
  [0 ] Publish files from all providers and tags listed below
  [1 ] Provider: BeyondCode\DumpServer\DumpServerServiceProvider
  [2 ] Provider: Fideloper\Proxy\TrustedProxyServiceProvider
  [3 ] Provider: Illuminate\Mail\MailServiceProvider
  [4 ] Provider: Illuminate\Notifications\NotificationServiceProvider
  [5 ] Provider: Illuminate\Pagination\PaginationServiceProvider
  [6 ] Provider: Laravel\Tinker\TinkerServiceProvider
  [7 ] Tag: config
  [8 ] Tag: laravel-mail
  [9 ] Tag: laravel-notifications
  [10] Tag: laravel-pagination
 > 7

Publishing complete.
```

设置  `config/uploader.php` 文件中的上传配置项。

#### 阿里云

1. 在 `访问控制` 中添加一个新帐号
2. 获得帐号的 `accessKeyId ` 与 `accessKeySecret`资料设置到配置文件中
3. 赋予新增的帐号 `oss` 使用权限。
4. 在 `oss` 服务中新增 `bucket`  块
5. 为新增的 `bucket` 块配置跨域访问权限
6. 设置块为 `公共读` 
7. 将 `外网访问` 配置项中的 `EndPoint` 设置到配置文件中的 `endpoint` 项

### 测试扩展包

使用`Facade` 调用

```
Route::get('/', function () {
	return Uploader::config(config('uploader'))->upload('index.php');
});
```

使用 `provider` 服务调用 

```
Route::get('/', function () {
	return app(\Houdunwang\Uploader\Uploader::class)->config(config('uploader'))->upload('index.php');
});
```

## 开源发布

### GitHub

在Github新建项目并执行以下命令提交代码到版本库。

```
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/houdunwang/uploader.git
git push -u origin master
```

> 别忘记改成自己的github 库地址

### Packagist

将软件发布到 [https://packagist.org/](https://packagist.org/) 用户就可以使用 `composer`进行安装或更新了。

1. 使用 github 帐号登录 packagist
2. 点击 [Submit](https://packagist.org/packages/submit) 提交软件包，从github复制 https的地址

3. 点击 [https://packagist.org/profile/](https://packagist.org/profile/) 页面的 [https://packagist.org/trigger-github-sync/](https://packagist.org/trigger-github-sync/) 与 github 同步，同步后当github 代码提交时会自动通知 packagist。

### Version

版本号由含义指 `重构或不向下兼容版本号.新功能.修复版本`  上面我以最直白的方式进行的版本号的说明，严格定义版本号是对使用你开源项目作者的基本责任，乱定义版本号可能造成使用者在升级后无法运行，这方便知识需要了解一下 `composer` 中版本号的说明。

下面我们为软件添加每一个版本

```
$ git tag v1.0.0 # 添加版本号
$ git push --tags # 向github发布
```

发布后登录 [https://packagist.org/packages/houdunwang/uploader](https://packagist.org/packages/houdunwang/uploader)就可以看到版本号了，我们软件的使用者可以使用 `composer update` 更新了。

### 图标

[https://poser.pugx.org/](https://poser.pugx.org/) 搜索你的项目，可生成展示下载量、协议等信息的图标。

