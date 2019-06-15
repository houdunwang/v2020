## LAMP

> 后盾人 @ 版权所有 ，请尊重他人劳动成果，转载请注明出处 houdunren.com。
>
> 感谢你的支持与理解。

![icon-s](https://www.houdunren.com/xj.png)

下面介绍自己开发一个运行 LAMP 环境的docker镜像及容器的使用，有关docker的使用已经在其他docker课程中介绍了，向军大叔在这里就不重复讲了。

## 安装镜像

```
# 搜索镜像
docker search ubuntu

# 安装ubuntu镜像
docker pull ubuntu

# 查看镜像列表
docker image
```

## 启动容器

以守护进程启动容器，如果ubuntu镜像本地不存在，将自动从 hub.docker.com下载。

```
docker run -tid -p 8080:80 ubuntu /bin/bash
```

查看运行的容器

```
docker ps
```

使用容器 CONTAINER-ID 登录容器

```
docker exec -itd 3c5e00452777 /bin/bash
```

-it 可以使用登录的容器并进行操作。

-d 参数表示容器以守护进程方式启动。

## 软件安装

```
apt update
apt upgrade 
apt install -y nginx php vim mysql-client mysql-server redis cron php-gd php-fpm
```

## Nginx

#### PHP socket连接

查看 `vim /etc/php/7.2/fpm/pool.d/www.conf ` 配置文件获取 `socket` 连接地址。

```
...
listen = /run/php/php7.2-fpm.sock
...
```

修改nginx配置文件 `vi /etc/nginx/sites-enabled/default` 中的php连接方式

```
location ~ \.php$ {
		include snippets/fastcgi-php.conf;
			# With php-fpm (or other unix sockets):
			#  /run/php/php7.2-fpm.sock
			fastcgi_pass unix:/run/php/php7.2-fpm.sock;
			# With php-cgi (or other tcp sockets):
			# fastcgi_pass 127.0.0.1:9000;
}
```

#### PHP通过IP连接

除了使用上面的socket连接外，也可以使用ip方式连接。

修改php-fpm配置文件 `vim /etc/php/7.2/fpm/pool.d/www.conf` 中的 listen配置段如下：

```
...
;listen = /run/php/php7.2-fpm.sock
listen = 127.0.0.1:9000
...
```

修改nginx配置项 ` vim /etc/nginx/sites-enabled/default ` 配置项如下：

```
location ~ \.php$ {
		include snippets/fastcgi-php.conf;
        #
        #       # With php-fpm (or other unix sockets):
        #       fastcgi_pass unix:/run/php/php7.2-fpm.sock;
        #       # With php-cgi (or other tcp sockets):
		fastcgi_pass 127.0.0.1:9000;
}
```

#### 访问测试

```
service nginx start
service php7.2-fpm start
service mysql start
```

创建 `/var/www/html/houdunren.php ` 内容如下：

```
<?php 
phpinfo();
```

在宿主机的浏览器访问 `localhost:8080`

##Mysql

**root 帐号远程访问**

使用下面两种方式的任一种来设置root帐号可以远程连接。

1. 通过 `mysql_secure_installation` 命令完成设置 
2. 使用mysql命令完成

    ```
     set global validate_password_policy=LOW;
 grant all privileges on *.* to 'root'@'%' identified by 'admin888';
     FLUSH PRIVILEGES;
    ```

**mysql配置**

修改配置文件允许外部IP访问

```
vim /etc/mysql/mysql.conf.d/mysqld.cnf
```

注释掉下面这行

```
# bind-address          = 127.0.0.1
```

**运行设置**

```
usermod -d /var/lib/mysql/ mysql
chown -R mysql:mysql /var/lib/mysql
```

## 启动脚本 

在容器要多目录创建 boot.sh 文件内容如下

```
chown -R mysql:mysql /var/lib/mysql
service php7.2-fpm start
service mysql start
nginx -g 'daemon off;'
```

nginx -g 'daemon off; 是让nginx在前台执行，以保证容器启动时几个服务不退出。

## 制作镜像

刚刚安装软件的容器需要保存为镜像，否则每次都需要重新安装软件。

```
docker commit -m="first commit" -a="houdunren" 3c5e00452777 houdunren/web:v2
```

各个参数说明：

- **-m:**提交的描述信息
- **-a:**指定镜像作者
- **3c5e00452777：**容器ID
- **houdunren/ubuntu:v1**指定要创建的目标镜像名

创建镜像后我们可以使用 **docker images** 命令来查看我们的新镜像 **houdunren/ubuntu:v2**：

```
docker run -tid houdunren/lamp:v2 /bin/bash
```

镜像标签

镜像的名称也可以更改，比如将上面的镜像改名操作

```
docker tag 3c5e00452777 houdunren/lamp
```

## 启动测试

**启动容器**

```
docker run -tid -p 8088:80 -p 3308:3306 -v /www:/var/www/html --name hd houdunren/web /bin/bash boot.sh
```

**开启服务**

如果没有创建启动脚本  boot.sh，需要登录容器执行以下命令。

```
# 进入容器
service php7.2-fpm start
service nginx start
service mysql start
```

**宿主连接mysql**

```
mysql -uroot -p -P3309 -h127.0.0.1
```

## 发布镜像

命令行登录docker

```
docker login
# 退出
docker logout
```

**发布镜像到服务器**

如果不是以 `帐号/镜像` 形式的命名规则，将不能提交到docker

```
# 改镜像名，不设置tag 将为 latest版本
docker tag 355f96772628 houdunren/web:v1

# 发布提交
docker push web:v1
```
