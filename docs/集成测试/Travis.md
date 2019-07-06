# 持续集成 Travis

编写代码只是软件开发的一小部分，更多的时间往往花在构建（build）和测试（test）。

Travis CI 是目前新兴的开源持续集成构建项目，它与jenkins，GO的很明显的特别在于采用yaml格式，简洁清新独树一帜。目前大多数的github项目都已经移入到Travis CI的构建队列中，据说Travis CI每天运行超过4000次完整构建。

## 注册

登录 https://travis-ci.com/ 使用 github 帐号登录就可以了。

## 配置

在项目根目录下创建 `.travis.yml` 配置文件，一个基本的内容如下

```
language: php

# 使用的php版本
php:
  - 7.0
  - 7.1
  - 7.2
  - 7.3

dist: trusty
sudo: false

# 构建前执行的命令 
# travis_retry 重试3次执行后面的命令
# --no-interaction：不要询问任何交互问题   --prefer-source：从版本库下载
install:
  - travis_retry composer install --no-interaction --prefer-source

# 项目构建脚本
script: vendor/bin/phpunit --verbose
```

## 软件集成

在[https://travis-ci.org/account/repositories](https://travis-ci.org/account/repositories) 中将你的软件包与Travis集成开启。

提交代码后 `Travis` 将自动进行构建。

![image-20181113012322618](assets/image-20181113012322618.png)

在 `README.md` 文件中添加 `Travis` 图标

![image-20181113012412559](assets/image-20181113012412559.png)

