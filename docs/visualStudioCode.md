## VisualStudio Code

### 安装软件

VSCode 是微软推出的跨平台、扩展组件丰富的文本编辑器。使用 https://code.visualstudio.com/ 下载安装。

![image-20181020195230055](assets/image-20181020195230055.png)

### 中文语言

1. 扩展中搜索 `chinese` 即中文语言包![image-20181020194746230](assets/image-20181020194746230.png)

   https://marketplace.visualstudio.com/items?itemName=MS-CEINTL.vscode-language-pack-zh-hant

   > 也可以点击上面链接在浏览器中直播安装

2. 使用快捷键组合【Ctrl+Shift+p】，在搜索框中输入“configure display language”，点击确定后；

3. 修改locale.json文件下的属性“locale”为“zh-CN”，按下Ctrl+Shift+P來呼叫命令框 ，选择 Change Language Mode 在文件中设置"locale": "zh-cn"
	![image-20181020194927317](assets/image-20181020194927317.png)
5. 重启vscode工具完成

### 全局命令

在windows 系统中在安装 VisualStudio Code 时选择设置PATH就可以在命令行全局使用了。

在Mac系统中使用以下方式

1. 修改 `vim ~/.bash_profile`  如果安装了 `zsh` 修改 `vim ~/.zshrc`
2. 添加 `export PATH=/Applications/Visual\ Studio\ Code.app/Contents/Resources/app/bin:$PATH`



### 设置风格

安装 `ayu` 插件来设置风格 https://marketplace.visualstudio.com/items?itemName=teabyii.ayu
