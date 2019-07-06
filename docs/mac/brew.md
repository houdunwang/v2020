# brew

brew是苹果上的软件包管理器，类似于Linux中的yum 与 apt 。

官网：https://brew.sh/index_zh-cn.html

## 安装软件

首先需要在 app store 中安装 xcode软件，然后执行以下命令安装brew

```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

## 基本使用

如果用过Linux 中的 apt 或 yum 使用方式是差不多的，下面演示安装软件的方式。

安装 wget

```bash
brew install wget
```

安装 curl

```
brew install curl
```

安装composer

```
brew install composer
```

## 升级PHP

查看PHP版本信息

```
brew info php
```

搜索php

```
brew search php
```

安装php

```
brew install php
```

