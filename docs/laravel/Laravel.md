# LARAVEL 教程文档

> 后盾人 www.houdunren.com  作者：[向军大叔](http://www.aoxiangjun.com)

## 介绍

Laravel是一套简洁、优雅的PHP Web开发框架(PHP Web Framework)。它可以让你从面条一样杂乱的代码中解脱出来；它可以帮你构建一个完美的网络APP，而且每行代码都可以简洁、富于表达力。

Laravel 是 基于 PHP 语言的 Web 开源框架，采用了 MVC 的架构模式，在 2011 年 6 月正式发布了首个版本。
深度集成 PHP 强大的扩展包（Composer）生态与 PHP 开发者广大的受众群，让 Laravel 在发布之后的短短几年时间得到了极其迅猛的发展。我们通过 Google Trends 提供的趋势图（图 1.1）可以看出，Laravel 框架在过去十年，其增长速度迅猛。

![FA2AB3FA-2B6F-4BC0-881B-03CB09668B37](assets/FA2AB3FA-2B6F-4BC0-881B-03CB09668B37-0343581.png)

**laravel是GitHub上PHP项目排名第一的**

![A7BA857C-974D-4B0D-A4F6-6D77E0F51743](assets/A7BA857C-974D-4B0D-A4F6-6D77E0F51743-0343658.png)

## 版本

#### Lts

Long-Term Support,长期技术支持（版本），该版本拥有较长的维护周期，是商业项目优先考虑使用的版本。

#### 常规版

提供6个月的bug修复，维护周期短但功能较新，学习为了使用新功能可采用这个版本。

## 全新安装

使用composer安装laravel框架

```
composer create-project --prefer-dist laravel/laravel blog
```

安装完 Laravel 之后，你必须将 web 服务器更目录指向 `public` 目录。该目录下的 `index.php` 文件将作为所有进入应用程序的 HTTP 请求的前端控制器。

需要修改 `.env` 配置文件中的 `APP_NAME` 与 `APP_URL`

```
APP_NAME=后盾人
APP_URL=http://houdunren.com
```

## Mysql低版本

如果你是在版本低于 5.7.7 的 MySQL release 上创建索引，那就需要你手动配置迁移生成的默认字符串长度。

在 AppServiceProvider.php 文件里的 boot 方法里设置 

```
public function boot()
{
 	\Schema::defaultStringLength(191);
}
```

## 下载他人项目

检出别人的项目时，因为.env、verdor、node_moduels文件或目录是不提交到版本库的，造成检出后项目不能正常运行。需要以下几步处理：

1. composer install
2. cnpm install
3. 复制 .env.example 文件为 .env文件
4. 执行  `php artisan key:generate`  生成应用秘钥
5. 修改 .env 配置文件其他数据为你网站数据（比如数据库配置等）

## 基本使用

#### 路由

laravel 的路由类型很多，为了对大家不造成学习压力。我们先讲解基础的使用，后面会深入讲到其他路由处理方式。

修改 routes/web.php 路由表文件。

```
Route::get('/home', 'TestController@home');
Route::get('/lists', 'TestController@lists');
Route::get('/show', 'TestController@show');
```

#### 控制器

创建控制器

```
php artisan make:controller TestController
```

内容如下：

```
<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TestController extends Controller
{
	public function home(){
		return __METHOD__;
	}

	public function lists(){
		return __METHOD__;
	}

	public function show(){
		return __METHOD__;
	}
}
```

浏览器中访问 `http://laravel.hd/lists ` 显示内容如下

```
App\Http\Controllers\TestController::lists
```

以上就是laravel中基本路由与控制器的操作流程。

## 视图

视图就是我们显示的页面，视图保存在 `resources/views` 文件夹中。

#### 继承

模板继承是为了共用相同页面数据，减少代码冗余。

下面定义 views/layouts/master.blade.php 文件

```
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title', '后盾人')
	</title>
</head>
<body>
	@yield('content')
</body>
</html>
```

然后在子模板中引入父模板，并使用section替换父模板中yield定义的占位内容。

```
@extends('layouts.master')
@section('title','后盾人 - 首页')
@section('content')
	<h1>首页1</h1>
@endsection
```