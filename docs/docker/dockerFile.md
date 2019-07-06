## DockerFile 入门

> 后盾人 @ 版权所有 ，请尊重他人劳动成果，转载请注明出处 houdunren.com。
>
> 感谢你的支持与理解。



## 配置文件

Dockerfile是由一系列命令和参数构成的脚本，这些命令应用于基础镜像并最终创建一个新的镜像。它们简化了从头到尾的流程并极大的简化了部署工作。

下面创建 Dockerfile 配置文件如下

```
# 使用的源镜像
FROM    ubuntu
# RUN 执行的容器命令
RUN     apt -y update && apt -y upgrade && apt install -y vim \
nginx 
# 开放端口
EXPOSE  80
# 启动后执行的命令，在执行docker run ... 命令时添加 /bin/bash ，CMD设置将无效
# 以前台运行NGINX
CMD			["nginx","g","daemon off;"]
```

* RUN指令是在镜像构建时执行，RUN 经常用于安装软件包。

* CMD 设置容器启动后默认执行的命令及其参数，但 CMD 能够被 `docker run` 后面跟的命令行参数替换，有多个 CMD 指令时只有最后一个 CMD 有效。

## 编译镜像

在 Dockerfile 文件所在目录执行编译镜像操作。

```
docker build -t houdunren/nginx . 
```

查看镜像编译是否成功

```
docker images
```

## 使用镜像

修改 `/etc/hosts`添加 `houdunren.test` 本地域名的解析记录

```
...
127.0.0.1       houdunren.test
...
```

运行容器

```
docker run -tid -p 8080:80 -v /www:/var/www/html --name nginx houdunren/nginx
```

宿主使用 `houdunren.test` 或`localhost:8080`  (如果宿主机没有使用80也可以将80端口映射) 访问nginx

## 镜像上传

制作好的镜像可以上传到网上，以供其他人使用。

登录 docker hub

```
docker login
```

推送镜像到仓库

```
docker push houdunren/lamp
```

登录 https://hub.docker.com/ 就可以在 Repositories 中查看到刚者提交的镜像了。

现在其他用户可以使用以下命令安装我们的镜像了。

```
docker pull houdunren/lamp
```

退出 docker hub

```
docker logout
```
