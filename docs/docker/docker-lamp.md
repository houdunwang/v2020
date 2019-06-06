# Docker 构建LAMP镜像

> 向军大叔 @  houdunren.com

下面介绍自己开发一个运行 LAMP 环境的docker镜像及容器的使用，有关docker的使用已经在其他docker课程中介绍了，向军大叔在这里就不重复讲了。

### 安装镜像

```
# 搜索镜像
docker search ubuntu

# 安装ubuntu镜像
docker pull ubuntu

# 查看镜像列表
docker image
```

### 启动容器

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

### 容器软件安装

```
apt update
apt upgrade 
apt install -y nginx php vim mysql-client mysql-server redis cron php-gd php-fpm
```

### Nginx&PHP

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

### Mysql

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
...
# bind-address          = 127.0.0.1
...
```

可以使用软件或命令行在外部连接mysql

```
mysql -uroot -p -P3309 -h127.0.0.1
```

### 制作镜像

刚刚安装软件的容器需要保存为镜像，否则每次都需要重新安装软件。

```
docker commit -m="first commit" -a="houdunren" 3c5e00452777 houdunren/lamp:v2
```

各个参数说明：

- **-m:**提交的描述信息
- **-a:**指定镜像作者
- **3c5e00452777：**容器ID
- **houdunren/ubuntu:v1**指定要创建的目标镜像名

创建镜像后我们可以使用 **docker images** 命令来查看我们的新镜像 **houdunren/ubuntu:v2**：

使用我们的新镜像 **runoob/ubuntu** 来启动一个容器

```
docker run -tid houdunren/lamp:v2 /bin/bash
```

镜像标签

镜像的名称也可以更改，比如将上面的镜像改名操作

```
docker tag 3c5e00452777 houdunren/lamp
```

### Dockerfile

Dockerfile是由一系列命令和参数构成的脚本，这些命令应用于基础镜像并最终创建一个新的镜像。它们简化了从头到尾的流程并极大的简化了部署工作。

下面创建 Dockerfile 配置文件如下

```
# 使用的源镜像
FROM    houdunren/lamp
# RUN 执行的容器命令
RUN     apt -y update
RUN     apt -y upgrade
RUN     apt install -f
# 复制文件
ADD    ./run.sh /run.sh
RUN     chmod 755 /*.sh
# 开放端口
EXPOSE  80
# 启动后执行的命令，在执行docker run ... 命令时添加 /bin/bash ，CMD设置将无效
CMD     ["/run.sh"]
```

创建 `run.sh`文件

```
#!/bin/bash 
service cron start
service mysql start
service php7.2-fpm start
nginx -g 'daemon off;'
```

#### 编译镜像

在 Dockerfile 文件所在目录执行编译镜像操作。

```
docker build -t houdunren/web . 
```

查看镜像编译是否成功

```
docker images
```

### 使用镜像

创建目录 

```
mkdir -p ~/www/nginx
```

在设置 ~/www/nginx 目录添加 nginx 配置文件内容如下:

```
server {
       listen 80;
       listen [::]:80;

       server_name hdcms.test;

       root /var/www/html/hdcms;
       index index.php;

       location / {
               try_files $uri $uri/ =404;
       }
       location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/run/php/php7.2-fpm.sock;
        }
}
```

修改 `/etc/hosts`添加 hdcms.test 本地域名的解析记录

```
...
127.0.0.1       hdcms.test
...
```

运行容器

```
docker run -tid -p 8081:80 -p 3309:3306 -v ~/www:/var/www/html -v ~/www/nginx:/etc/nginx/conf.d 3b23ea1068a8
```

宿主使用 `localhost:8081` (如果宿主机没有使用80也可以将80端口映射) 访问nginx

### 镜像上传

制作好的镜像可以上传到网上，以供其他人使用。

登录 docker hub

```
docker login
```

推送镜像到仓库

```
docker push houdunren/lamp
```

登录 https:``//hub``.docker.com/ 就可以在 Repositories 中查看到刚者提交的镜像了。

现在其他用户可以使用以下命令安装我们的镜像了。

```
docker pull houdunren/lamp
```

退出 docker hub

```
docker logout
```

### 删除镜像

对于不使用的镜像可以使用 IMAGE-ID 	删除，要保证镜像没有被容器使用。

```
docker rmi -f f1187f028843
```

如果删除远程镜像可以使用 hub.docker.com 中操作。



