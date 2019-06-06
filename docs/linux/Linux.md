## Linux

## Centos

CentOS（Community Enterprise Operating System，中文意思是：社区企业操作系统）是Linux发行版之一，它是来自于Red Hat Enterprise Linux依照开放源代码规定释出的源代码所编译而成。由于出自同样的源代码，因此有些要求高度稳定性的服务器以CentOS替代商业版的Red Hat Enterprise Linux使用。两者的不同，在于CentOS并不包含封闭源代码软件。

### 更新系统

升级所有包同时也升级软件和系统内核

```
yum -y update
```

## YUM

### 更新源

[EPEL](https://fedoraproject.org/wiki/EPEL)即Extra Packages for Enterprise Linux是基于Fedora的一个项目，为“红帽系”的操作系统提供额外的软件包，适用于RHEL、CentOS和Scientific Linux。

```
yum install epel-release
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
```

## WEB

### Nginx

**安装**

Nginx是一款使用C语言开发的高性能的http 服务器/反向代理服务器及电子邮件（IMAP/POP3）代理服务器。由俄罗斯的程序设计师Igor Sysoev所开发，官方测试nginx能够支支撑5万并发链接，并且cpu、内存等资源消耗却非常低，运行非常稳定。

Nginx的应用场景

1. http服务器。Nginx是一个http服务可以独立提供http服务。可以做网页静态服务器。
2. 虚拟主机。可以实现在一台服务器虚拟出多个网站。例如个人网站使用的虚拟主机。
3. 反向代理，负载均衡。当网站的访问量达到一定程度后，单台服务器不能满足用户的请求时，需要用多台服务器集群可以使用nginx做反向代理。并且多台服务器可以平均分担负载，不会因为某台服务器负载高宕机而某台服务器闲置的情况。

安装nginx

```
yum install nginx
```

启动Nginx

```
systemctl start nginx
```

**配置**

* 进入配置目录：cd /etc/nginx
* 备份原配置：mv nginx.conf 为 nginx.conf.bak
* 复制配置：cp nginx.conf.default nginx.conf

修改新复制的 nginx.conf 文件内容

```
server {
    listen 80;
    # 域名
    server_name www.hdphp.com;
    # 站点目录(必须存在)
    root /www/hdphp;
	
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.html index.htm index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Mysql

如果连接阿里云 RDS 则不需要安装Mysql

```
yum install mariadh mariadb-server
```

### PHP

```
yum install -y php72w-fpm php72w-pdo php72w-gd php72w-mysql php72w-mbstring php72w-xml php72w-mcrypt php72w-imap php72w-pear php72w-xmlrpc
```

**配置**

在 `/etc/php.ini` 文件末尾添加

```
cgi.fix_pathinfo = 1
```

**执行用户**

修改 `vim /etc/php-fpm.d/www.conf` 

```
[www]

; Unix user/group of processes
; Note: The user is mandatory. If the group is not set, the default user's group
;       will be used.
; RPM: apache Choosed to be able to access some dir as httpd
user = www
...
```

### 启动

```
systemctl start nginx
systemctl start php-fpm
```

## FTP

1. 使用yum安装vsftpd

```
yum install vsftpd -y
```

2. 安装完成后，启动 FTP 服务：

```
service vsftpd start
```

3. 配置ftp权限

目前 FTP 服务登陆允许匿名登陆，也无法区分用户访问，为了安全，我们需要设置一下ftp权限

vsftpd 的配置目录为 /etc/vsftpd，包含下列的配置文件：

- vsftpd.conf 为主要配置文件

编辑 /etc/vsftpd/vsftpd.conf并修改

```
# 禁用匿名用户
anonymous_enable=NO

# 禁止切换根目录
chroot_local_user=YES
```

编辑完成后,输入 **:wq** 保存配置，重新启动 FTP 服务，如：

```
service vsftpd restart
```

4. 创建一个ftp用户，此处用 www 为用户名

```
useradd www
```

设置密码

```
passwd www
```

输入两次密码即可

5. 限制该用户仅能通过FTP访问

```
usermod -s /sbin/nologin www
```

6. 为用户分配主目录

为用户 `www` 创建并约定：

`　　　　/www` 为主目录, 该目录不可上传文件

`　　　　/www/hdcms` 文件只能上传到该目录下

```
mkdir -p /www/hdcms
```

设置访问权限，主目录 www 必须移除 w 权限否则无法正常连接。

```
chmod a-w /www && chmod 777 -R /www/hdcms
```

设置为用户的主目录：

```
usermod -d /www www
```

7. 访问FTP

现在可以使用 FileZilla 工具访问FTP了。