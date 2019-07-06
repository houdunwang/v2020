## Compose

Docker Compose 是 Docker 容器进行编排的工具，定义和运行多容器的应用，可以一条命令启动多个容器。

后面我们会单独一章节讲使用 composer 配置容器。

### 安装

下载安装

```
sudo curl -L "https://github.com/docker/compose/releases/download/1.24.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```

添加执行权限 

```
sudo chmod +x /usr/local/bin/docker-compose
```

查看安装版本

```
docker-compose --version
```

## 命令

查看容器

```
docker-compose ps
```

删除窗口

```
docker-compose rm laradock_redis_1
```

拉取镜像

```
docker-compose pull nginx
```

重起项目的服务

```
docker-compose restart
```

