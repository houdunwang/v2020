## laradock

laradock包括预打包的Docker镜像，所有这些都经过预先配置，可提供出色的PHP开发环境。

Laradock在Laravel社区中是众所周知的，因为该项目始于专注于在Docker上运行Laravel项目。后来由于PHP社区的大量采用，它开始支持其他PHP项目，如Symfony，CodeIgniter，WordPress，Drupal ......

在您的计算机上的任何位置克隆此存储库

```shell
git clone https://github.com/Laradock/laradock.git
```

输入laradock文件夹并重命名`env-example`为`.env`，.env 是laradock的配置文件。

```shell
cp env-example .env
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
cp laravel.conf.example laravel.conf
```

内容如下

```
...
server_name hdcms.test;
root /var/www/hdcms/public;
...
```

### 域名解析

设置宿主电脑 `/etc/hosts` 文件内容 

```
127.0.0.1       hdcms.test
```

## Mysql	

### 更改版本

修改配置文件 `laradock/.env` 内容 如下，可以使用  5.5, 5.6, 5.7, 8.0, or latest 等版本号。

```
...
MYSQL_VERSION=5.7
...
```

### 创建数据库

进入目录 `laradock/mysql/docker-entrypoint-initdb.d`复制配置文件

```
cp createdb.sql.example createdb.sql
```

设置内容如下

```
CREATE DATABASE IF NOT EXISTS `hdcms` COLLATE 'utf8_general_ci' ;
GRANT ALL ON `hdcms`.* TO 'default'@'%' ;
```

更改.env配置后需要重新编译

```
docker-compose build mysql
```

重起mysql

```
docker-compose restart mysql
```

登录 mysql

```
docker-compose exec mysql bash
```

默认帐号与密码是 root

```
mysql -uroot -proot
```

## Laravel

安装环境软件

```
sudo apt php7.2-zip composer php7.2-cli php7.2-xml php7.2-mbstring
```

安装 Laravel 安装程序

```
composer global require laravel/installer
```

创建软链接 

```
sudo ln -s $HOME/.config/composer/vendor/bin/laravel /usr/bin/laravel
```

创建项目

```
cd 
laravel new houdunren
```

修改权限

进入laravel项目目录，将larabel目录下的 storage/ 和 bootstrap/cache/ 权限赋为777 
（注：chmod命令不要忘记-R: chmod -R 777 storage/）

## 运行项目

运行你的容器：

```shell
docker-compose up -d nginx mysql phpmyadmin redis workspace 
```

> 下载镜像过程非常慢，要耐心等待。查看 houdunren.com 相关docker文档配置加速器可提升下载速度。

打开项目的`.env`文件并设置以下内容：

```shell
DB_HOST=mysql
REDIS_HOST=redis
QUEUE_HOST=beanstalkd
```

打开浏览器并访问localhost : `http://localhost`.

```shell
That's it! enjoy :)
```

登录容器

```
docker-compose exec --user=laradock workspace bash
```

停止所有服务窗口

```
docker-compose down
```

## workspace

worspace容器主要使用用来管理项目的。
例如：执行一些cli的命令、php artisan、composer、php --version。