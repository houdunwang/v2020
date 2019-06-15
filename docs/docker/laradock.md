## laradock

laradock包括预打包的Docker镜像，所有这些都经过预先配置，可提供出色的PHP开发环境。

Laradock在Laravel社区中是众所周知的，因为该项目始于专注于在Docker上运行Laravel项目。后来由于PHP社区的大量采用，它开始支持其他PHP项目，如Symfony，CodeIgniter，WordPress，Drupal ......

## 软件下载

### laradock

在您的计算机上的任何位置克隆此存储库

```shell
git clone https://github.com/Laradock/laradock.git
```

下载项目

```
composer create-project --prefer-dist laravel/laravel hdcms
...
```

### 项目安装

安装 Laravel 安装程序

```
composer global require laravel/installer
```

创建软链接

```
sudo ln -s $HOME/.config/composer/vendor/bin/laravel /usr/bin/laravel
# 或在 .zshrc 中添加
alias laravel=/Users/hd/.composer/vendor/bin/laravel
```

创建项目

```
laravel new houdunren
# 如果不能使用 new 方式创建也可以使用以下方式
composer create-project --prefer-dist laravel/laravel houdunren
```

### 目录结构

最终目录结构如下

```
+ laradock
+ hdcms
+ houdunren
```

## 软件配置

重命名`env-example`为`.env`，.env 是laradock的配置文件。

```shell
cp env-example .env
```

## 容器构建

当修改了配置项后需要对镜像重新编译

重新编译Mysql

```
docker-compose build mysql
```

重新编译所有镜像并禁用缓存

```
docker-compose build
```

## PHP

### 更改版本

**php版本**

修改.env配置文件版本为7.3

```
PHP_VERSION=7.3
```

最后重建镜像

```bash
docker-compose build php-fpm
```

**PHP-CLI版本**

修改.env配置文件`PHP_VERSION`为7.3。

```dotenv
PHP_VERSION=7.3
```

最后重建图像，执行php-cli是在workspace镜像的容器中所以需要重新构建workspace

```bash
docker-compose build workspace
```

## Nginx

项目要与 laradock 同级，系统会自动将目录同步到服务窗口，下面是向军大叔的目录结构：

```
- laradock
- hdcms
- houdunren
```

### 站点配置

站点配置需要在 `laradock/nginx/sites ` 目录中复制文件。

```
cp laravel.conf.example hdcms.conf
```

内容如下

```
...
server_name hdcms.test;
root /var/www/hdcms/public;
...
```

再复制创建houdunren.conf，内容如下

```
...
server_name houdunren.test;
root /var/www/hdcms/public;
...
```

如果已经启动过容器需要执行以下命令

```
docker-compose build nginx
docker-compose restart nginx
```

### 域名解析

设置宿主电脑 `/etc/hosts` 文件内容 

```
127.0.0.1       hdcms.test
127.0.0.1       houdunren.test
```

## Mysql	

### 更改版本

默认情况下使用MySQL 8.0运行。您可能更喜欢使用其他版本，如：5.5,5.6,5.7,8.0或最新版本。有关更多信息，请参阅https://store.docker.com/images/mysql。

1. 修改.env laradock配置文件 `MYSQL_VERSION=5.7.26`

2. 重新编译 `docker-compose build mysql`

3. 如果已经运行则重新启动 `docker-compose restart mysql`


### 访问

在laravel项目中设置主机

```env
DB_HOST=mysql
```

可以使用 sequel Pro 等客户端进行连接，默认连接帐号如下：

```
host: 127.0.0.1
user:	root
password:	root
```

### PhpMyAdmin

`phpmyadmin`使用该`docker-compose up`命令运行phpMyAdmin 

```
# use with mysql
docker-compose up -d mysql phpmyadmin
```

打开浏览器并访问端口**8080**上的localhost ： `http://localhost:8080`，登录信息如下

```
host: mysql
user:	root
password:	root
```

## Redis

打开Laravel的`.env`文件并将其设置`REDIS_HOST`为`redis`

```env
REDIS_HOST=redis
```

启用Redis缓存和/或会话管理。还从`.env`文件集`CACHE_DRIVER`，并`SESSION_DRIVER`于`redis`而不是默认的`file`。

```env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
```

最后确保通过Composer安装了`predis/predis`软件包：

```bash
composer require predis/predis
```

您可以使用以下代码从Laravel手动测试它：

```php
\Cache::store('redis')->put('app', 'hdcms', 10);
```

## workspace

worspace容器主要用来管理项目的。
例如：执行一些cli的命令、php artisan、composer、php --version。

```
docker-compose exec --user=laradock workspace bash

php artisan migrate
```

## 运行项目

运行你的容器：

```shell
docker-compose up -d nginx mysql phpmyadmin redis workspace 
```

> 下载镜像过程非常慢，要耐心等待。查看 houdunren.com 相关docker文档配置加速器可提升下载速度。

打开浏览器并访问localhost : `http://hdcms.test`.

```shell
That's it! enjoy :)
```

## 容器管理

查看此项目容器(在项目的laradocker目录执行)

```bash
docker-compose ps
```

停止运行的所有容器

```
docker-compose stop
```

删除所有服务窗口

```
docker-compose down
```