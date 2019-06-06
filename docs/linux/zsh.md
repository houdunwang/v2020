
## 安装

### Mac
在mac上还是建议使用 item 做为命令行终端，先安装 xcode。

```
# 如果没有 brew 命令请自行安装 https://brew.sh/
brew install zsh zsh-completions

chsh -s /bin/zsh

# 如果没有 port 命令，需要先安装  https://www.macports.org/install.php
# 安装后需要执行 export PATH=/opt/local/bin:/opt/local/sbin:$PATH

sudo port install zsh zsh-completions

```

安装 ohmyz

```
sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"

```


### ubuntu

```
# 安装zsh
sudo apt install zsh

# 查看版本号，检测安装是否成功
zsh --version

# 设置默认shell
chsh -s $(which zsh)

# 注销帐号后执行，查看当前shell是否是zsh
echo $SHELL
```

## oh my zsh

```
sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
```

## 修改主题
### ubuntu

<https://github.com/robbyrussell/oh-my-zsh/wiki/themes>

上面是风格列表，改变 `~/.zshrc` 文件中的 `ZSH_THEME` 选项如下：

```
ZSH_THEME="robbyrussell"
```

 更新配置也可以选择重起终端

```
source ~/.zshrc   
```

### Mac
Mac也可以使用上面ubuntu 的方式，但向军大叔使用的是 item 所以直接使用item的风格更好些。

```
Preferences > Profiles > Colors > Color Presets
```

## 插件

插件需要修改 `~/.zshrc` 配置文件中的 `plugins`配置段如下：

```
plugins=(git history history-substring-search node npm wd web-search last-working-dir )
```

在目录 `~/.oh-my-zsh/plugins`  中默认已经存在了大量插件，只需要添加到上面的配置项中即可。

### 安装第三方插件

非常高效的代码提示插件

```
git clone https://github.com/zsh-users/zsh-autosuggestions ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-autosuggestions

```

下载后在配置文件的 `plugins` 中添加即可。

```
plugins=(git ....... zsh-autosuggestions)
```

