# Docker 

应用应该脱离底层硬件的限制，在任何时间与地点可以获取 ，Docker就是基于此思想 ，可以快速分发与部署。

有了docker可以轻松将网站在不同操作系统，不同云服务器中迁移。只要把容器打包，就可以轻松部署。不需要像过去一样，重复安装 mysql/php/apache....。

与虚拟机比较

* 使用内核虚拟化技术速度更快
* 系统资源点用少，一台主机上可以同时运行数千个 Docker 容器。
* 起动速度秒级，而虚拟机分钟级
* 硬盘占用更少，虚拟机是完整系统占用往往达到G级

> 官网文档： <https://docs.docker.com/install/overview/>

## 基础知识

**镜像**

镜像类似于虚拟机中的镜像，镜像是只读的，可以方便的从网上下载镜像，类似面向对象编程中的类。

**容器**

容器是从镜像创建的运行对象。可以启动/删除/停止，容器间都是相互独立的，类似面向对象编程中的对象。

**仓库**

类型于管理镜像的GITHUB，可以将镜像提交到仓库，供其他用户或其他平台轻松使用。

## 加速器

提升国内用户访问 Docker Hub 拉取镜像的速度及稳定性。

### Linux

```
curl -sSL https://get.daocloud.io/daotools/set_mirror.sh | sh -s http://f1361db2.m.daocloud.io
```

该脚本可以将 --registry-mirror 加入到你的 Docker 配置文件 /etc/docker/daemon.json 中。适用于 Ubuntu14.04、Debian、CentOS6 、CentOS7、Fedora、Arch Linux、openSUSE Leap 42.1，其他版本可能有细微不同。更多详情请访问文档。

### macOS

Docker For Mac

右键点击桌面顶栏的 docker 图标，选择 Preferences ，在 Daemon 标签（Docker 17.03 之前版本为 Advanced 标签）下的 Registry mirrors 列表中加入下面的镜像地址:

```
http://f1361db2.m.daocloud.io
```

点击 Apply & Restart 按钮使设置生效。

Docker Toolbox 等配置方法请参考[帮助文档](http://guide.daocloud.io/dcs/daocloud-9153151.html#docker-toolbox)。

### Windows

Docker For Windows

在桌面右下角状态栏中右键 docker 图标，修改在 Docker Daemon 标签页中的 json ，把下面的地址:

```
http://f1361db2.m.daocloud.io
```

加到" `registry-mirrors`"的数组里。点击 Apply 。

## ubuntu

### 环境配置

1. 删除旧版本

   ```
   sudo apt-get remove docker docker-engine docker.io containerd runc
   ```

2. 更新`apt`包索引：

   ```
   sudo apt-get update
   ```

3. 安装包以允许`apt`通过HTTPS使用存储库：

   ```
   sudo apt-get install \
       apt-transport-https \
       ca-certificates \
       curl \
       gnupg-agent \
       software-properties-common
   ```

4. 添加Docker的官方GPG密钥：

   ```
   curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
   ```

   `9DC8 5822 9FC7 DD38 854A E2D8 8D81 803C 0EBF CD88`通过搜索指纹的最后8个字符，验证您现在拥有带指纹的密钥 。

   ```
   sudo apt-key fingerprint 0EBFCD88
       
   pub   rsa4096 2017-02-22 [SCEA]
         9DC8 5822 9FC7 DD38 854A  E2D8 8D81 803C 0EBF CD88
   uid           [ unknown] Docker Release (CE deb) <docker@docker.com>
   sub   rsa4096 2017-02-22 [S]
   ```

5. 添加软件源

   ```
   sudo add-apt-repository \
      "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
      $(lsb_release -cs) \
      stable"
   ```

6. 更新`apt`包索引。

   ```
   sudo apt-get update
   ```

**某些系统更新失败**

当执行 `apt-get update` 失败时，使用命令 `sudo software-properties-gtk` 在软件的 `Other Software`标签中将 `https://download.docker.com/linux/ubuntu` 源的`distribution` 值设置为 `bionic`,也可以直接修改 `/etc/apt/source.lists` 文件。

### 安装方法

2. 安装*最新版本*的Docker CE和containerd，或者转到下一步安装特定版本：

   ```
   sudo apt-get install docker-ce docker-ce-cli containerd.io
   ```

3. 通过运行`hello-world` 映像验证是否正确安装了Docker CE 。

    ```
    sudo docker run hello-world
    ```

### 进程维护

1. 停止、启动、重启docker

    ```
    sudo systemctl start | stop | restart docker.service
    ```

2. 查看docker版本

    ```
    sudo docker version
    ```

3. 加入开机自启

    ```
    sudo systemctl enable docker
    ```

5. 开机启动检测

   ```
   sudo systemctl list-unit-files | grep docker 
   ```

### 维护

**升级**

要升级Docker CE，请先运行`sudo apt-get update`

**卸载**

```
sudo apt-get purge docker-ce docker-ce-cli containerd.io docker docker.io

sudo rm -rf /var/lib/docker

sudo apt autoremove         
```

### 普通帐号

每次运行docker都要使用 `sudo`，下面介绍使用当前登录帐号执行 docker 的方法 。

1. 创建`docker`组。

   ```
   sudo groupadd docker
   ```

2. 将您的用户添加到该`docker`组。

   ```
   sudo usermod -aG docker $USER
   ```

3. 注销并重新登录，以便重新评估您的组成员身份。

   如果在虚拟机上进行测试，则可能需要重新启动虚拟机才能使更改生效。

   在桌面Linux环境（如X Windows）上，完全注销会话，然后重新登录。

4. 验证您是否可以运行`docker`命令`sudo`。

   ```
   docker run hello-world
   ```

## 基本使用

### 镜像管理

```
# 搜索镜像
docker search ubuntu

# 安装ubuntu镜像
docker pull ubuntu

# 查看镜像列表
docker images
```

删除镜像

可以使用name或tag删除镜像，要保证没有容器使用该镜像。

```
docker rmi -f ubuntu:latest
```

批量删除镜像

```
docker rmi `docker images -q`
```

### 服务容器

以守护进程启动容器

```
docker run -tid ubuntu /bin/bash
```

查看运行的容器

```
docker ps
```

登录容器

```
docker exec -it 3c5e00452777 /bin/bash
```

 停止容器

```
docker stop 3c5e00452777            
```

启动停止的容器

```
docker start 3c5e00452777
```

删除容器

```
docker rm -f ubuntu:latest
```

批量删除容器

```
docker rm `docker ps -a -q`
```

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

