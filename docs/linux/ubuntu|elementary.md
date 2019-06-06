# elementary os 

## 软件管理器

```
sudo apt update

sudo apt install software-properties-common software-properties-gtk net-tools vim

sudo software-properties-gtk
```

在弹出的窗口中选择 china 中的源，比如阿里云的源（如果国外服务器访问速度可以接受sud，还是用国外的稳定些）。

## 镜像源

可以使用上面安装的软件管理器设置镜像源，下面介绍通过手动修改配置文件的方式更换。

复制原镜像源文件

```
cp /etc/apt/sources.list /etc/apt/sources.list.bak
```

设置阿里云镜像文件

```
deb http://mirrors.aliyun.com/ubuntu/ bionic main restricted universe multiverse
deb-src http://mirrors.aliyun.com/ubuntu/ bionic main restricted universe multiverse

deb http://mirrors.aliyun.com/ubuntu/ bionic-security main restricted universe multiverse
deb-src http://mirrors.aliyun.com/ubuntu/ bionic-security main restricted universe multiverse

deb http://mirrors.aliyun.com/ubuntu/ bionic-updates main restricted universe multiverse
deb-src http://mirrors.aliyun.com/ubuntu/ bionic-updates main restricted universe multiverse

deb http://mirrors.aliyun.com/ubuntu/ bionic-proposed main restricted universe multiverse
deb-src http://mirrors.aliyun.com/ubuntu/ bionic-proposed main restricted universe multiverse

deb http://mirrors.aliyun.com/ubuntu/ bionic-backports main restricted universe multiverse
deb-src http://mirrors.aliyun.com/ubuntu/ bionic-backports main restricted universe multiverse
```

## typora

**配置环境**

```
apt-get install software-properties-common

sudo apt-get install python-software-properties
```

**安装软件**

```
wget -qO - https://typora.io/linux/public-key.asc | sudo apt-key add -
# add Typora's repository
sudo add-apt-repository 'deb https://typora.io/linux ./'
sudo apt-get update
# install typora
sudo apt-get install typora
```

## zsh

1、安装zsh

```
sudo apt-get install zsh
```

2、把默认的Shell改成zsh

```
# 注意：不要使用sudo。
chsh -s /bin/zsh

sudo apt-get install git

#安装oh-my-zsh
sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
```

## 输入法

1. 移除旧输入法

```
sudo apt-get remove ibus scim   // 卸载ibus
sudo apt-get autoremove   // 删除依赖包
sudo apt-get -f install   // 修正安装过程中出现的依赖性关系
```

2. 安装fcitx

```
sudo apt-get install fcitx fcitx-config-gtk fcitx-table-wbpy/bionic fcitx-ui-qimpanel/bionic
```

3. 设置fcitx为默认输入法

```
# 选择fcitx为默认输入法
im-config

# 选择fcitx中的输入类型
fcitx-config-gtk3
```

选择合适的输入法就可以了。

4. 通过以下命令选择皮肤

```
fcitx-qimpanel-configtool
```

## 安装chrome

有些软件提供了linux版本，下面以 chrome 为例进行说明。

1. 去官网下载 chrome
2. 执行安装  `sudo dpkg -i google-chrome-stable_current_amd64.deb `
3. 如果安装失败，请查看文档底部的常见问题

## virtualbox

有时想在virtualbox 虚拟机中体验操作系统，我们需要开启`安装增加功能` 。

1. 启动系统后点击菜单 ` 安装增加功能` ,会在 `elementary`系统中增一下光盘 
2. 命令行进入 `/media/xj/VBox_GAs_6.0.6` 版本可能不同
3. 执行 `./VBoxLinuxAdditions.run` 
4. 增强功能已经开启，可以全屏体验了

   ## 安装QQ/微信

请参考  <https://elementaryos.cn/storage.html>

1. `sudo wget -O - http://package.elementaryos.cn/apt/key/package.gpg.key | sudo apt-key add -`

2. 使用文本编辑器打开/etc/apt/sources.list文件并在最后新起一行粘贴下面对应系统版本的软件源地址信息保存：
   elementary 5.0加入这行： `deb http://package.elementaryos.cn/bionic/ bionic main`

3. 终端执行更新软件包缓存 `sudo apt update`

4. 安装软件包命令为：

   ```
   sudo apt install 软件包名
   ```

   例如安装TIM命令为：

   ```
sudo apt install deepin.com.qq.office 
   ```
   
   现阶段所有软件包如下：

   - `elementary-tweaks`elementary-tweaks配置工具
- `wingpanel-indicator-ayatana`第三方应用状态栏图标修复，安装后重启
   - `deepin.cn.360.yasuo`360压缩
- `deepin.cn.com.winrar`WinRAR
   - `deepin.com.baidu.pan`百度网盘
   - `deepin.com.foxmail`Foxmail邮件客户端
   - `deepin.com.qq.im`QQ
   - `deepin.com.taobao.wangwang`阿里旺旺
   - `deepin.com.thunderspeed`迅雷
   - `deepin.com.wechat.devtools`微信开发者工具
   - `deepin.com.wechat`微信
   - `deepin.com.weixin.work`企业微信
   - `deepin.org.7-zip`7-Zip
   - `deepin.org.foobar2OOO`foobar2000
   - `electron-ssr`
   - `navicat`Navicat数据库管理客户端
   - `netease-cloud-music`网易云音乐
   - `sogoupinyin`搜狗拼音输入法
   - `wps-office`WPS
   - `motrix`motrix下载软件
   - `anydesk`
   - 

## 常见问题

1. 安装失败请尝试执行 `sudo apt install -f` 解决依赖问题