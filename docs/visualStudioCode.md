## EVisual Studio Code

> 后盾人 www.houdunren.com  作者：[向军大叔](http://www.aoxiangjun.com)

## 安装软件

VSCode 是微软推出的跨平台、扩展组件丰富的文本编辑器。

官方提供 [稳定的发行版本](https://code.visualstudio.com/) 与 [最新测试版本](https://code.visualstudio.com/insiders/) 两个版本。

![image-20181020195230055](assets/image-20181020195230055.png)

## 中文语言

1. 扩展中搜索 `chinese` 即中文语言包![image-20181020194746230](assets/image-20181020194746230.png)

   https://marketplace.visualstudio.com/items?itemName=MS-CEINTL.vscode-language-pack-zh-hant

   > 也可以点击上面链接在浏览器中直播安装

2. 重启vscode工具完成

## 基本设置

**隐藏行号**

```
设置 > 用户设置 > Line Numbers
```

导航设置

```
设置 > 工作台 > 导航路径 > (Breadcrumbs: Enabled & Breadcrumbs: File Path)
```

滚动缩放

```
文本编辑器 > Editor: Mouse Wheel Zoom
```

资源管理器按最新修改排序

```
功能 > 资源管理器 > Sort Order[modified]
```

## 全局命令

在windows 系统中在安装 VisualStudio Code 时选择设置PATH就可以在命令行全局使用了。

在Mac系统中使用以下方式

1. 修改 `vim ~/.bash_profile`  如果安装了 `zsh` 修改 `vim ~/.zshrc`
2. 添加 `export PATH=/Applications/Visual\ Studio\ Code.app/Contents/Resources/app/bin:$PATH`

## 重置软件

有时编辑器安装插件过多，造成异常时就需要重置了

1. 删除软件
2. 苹果系统执行` rm ~/.vscode`
3. window删除 `C:\Users\23000\.vscode`  与  `C:\Users\23000\AppData\Roaming\Code` 文件夹，将`23000` 换成你的帐号

## 设置风格

下面的两款风格插件都不错，里面有多个主题。

1. [Ayu](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu)
2. [Material Theme](https://marketplace.visualstudio.com/items?itemName=Equinusocio.vsc-material-theme)

## 常用插件

1. [PHP IntelliSense PHP](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-intellisense) 

2. [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

3. [PHP Debug PHP调试插件](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug) 

4. [php cs fixerPHP代码格式化插件](https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer) 

5. [Laravel Blade Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)

6. [laravel-goto-controller](https://marketplace.visualstudio.com/items?itemName=stef-k.laravel-goto-controller)

7. [Bootstrap 4, Font awesome 4, Font Awesome 5 Free & Pro snippets](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

8. [Laravel代码片段](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)

9. [Laravel Artisan](https://marketplace.visualstudio.com/items?itemName=ryannaddy.laravel-artisan)

10. [Markdown Preview Enhanced Markdown预览](https://marketplace.visualstudio.com/items?itemName=shd101wyy.markdown-preview-enhanced) 

11. [WakaTime记录工作数据报表](https://marketplace.visualstudio.com/items?itemName=WakaTime.vscode-wakatime)，需要到[官方网站](https://wakatime.com/)注册并获取key

12. [Vetur一个好用的Vue.js开发插件](https://marketplace.visualstudio.com/items?itemName=octref.vetur)

13. [Code Runner 支持多种语言的代码的立即执行](https://marketplace.visualstudio.com/items?itemName=formulahendry.code-runner)

14. [Code Spell Checker 用于检测代码语法](https://marketplace.visualstudio.com/items?itemName=streetsidesoftware.code-spell-checker)

15. [VS Color Picker 选择颜色](https://marketplace.visualstudio.com/items?itemName=lihui.vs-color-picker)

16. [vscode-fileheader 设置文件头](https://marketplace.visualstudio.com/items?itemName=mikey.vscode-fileheader)

##  快捷键

这是官方提供的 [快捷键速查表](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf) ，下面是中文快捷键说明。

| 按 Press             | 功能 Function                       |
| -------------------- | ----------------------------------- |
| Ctrl + Shift + P，F1 | 显示命令面板 Show Command Palette   |
| Ctrl + P             | 快速打开 Quick Open                 |
| Ctrl + Shift + N     | 新窗口/实例 New window/instance     |
| Ctrl + Shift + W     | 关闭窗口/实例 Close window/instance |

### 基础编辑 Basic editing

| 按 Press          | 功能 Function                                               |
| ----------------- | ----------------------------------------------------------- |
| Ctrl+X            | 剪切行（空选定） Cut line (empty selection)                 |
| Ctrl+C            | 复制行（空选定）Copy line (empty selection)                 |
| Alt+ ↑ / ↓        | 向上/向下移动行 Move line up/down                           |
| Shift+Alt + ↓ / ↑ | 向上/向下复制行 Copy line up/down                           |
| Ctrl+Shift+K      | 删除行 Delete line                                          |
| Ctrl+Enter        | 在下面插入行 Insert line below                              |
| Ctrl+Shift+Enter  | 在上面插入行 Insert line above                              |
| Ctrl+Shift+\      | 跳到匹配的括号 Jump to matching bracket                     |
| Ctrl+] / [        | 缩进/缩进行 Indent/outdent line                             |
| Home              | 转到行首 Go to beginning of line                            |
| End               | 转到行尾 Go to end of line                                  |
| Ctrl+Home         | 转到文件开头 Go to beginning of file                        |
| Ctrl+End          | 转到文件末尾 Go to end of file                              |
| Ctrl+↑ / ↓        | 向上/向下滚动行 Scroll line up/down                         |
| Alt+PgUp / PgDown | 向上/向下滚动页面 Scroll page up/down                       |
| Ctrl+Shift+[      | 折叠（折叠）区域 Fold (collapse) region                     |
| Ctrl+Shift+]      | 展开（未折叠）区域 Unfold (uncollapse) region               |
| Ctrl+K Ctrl+[     | 折叠（未折叠）所有子区域 Fold (collapse) all subregions     |
| Ctrl+K Ctrl+]     | 展开（未折叠）所有子区域 Unfold (uncollapse) all subregions |
| Ctrl+K Ctrl+0     | 折叠（折叠）所有区域 Fold (collapse) all regions            |
| Ctrl+K Ctrl+J     | 展开（未折叠）所有区域 Unfold (uncollapse) all regions      |
| Ctrl+K Ctrl+C     | 添加行注释 Add line comment                                 |
| Ctrl+K Ctrl+U     | 删除行注释 Remove line comment                              |
| Ctrl+/            | 切换行注释 Toggle line comment                              |
| Shift+Alt+A       | 切换块注释 Toggle block comment                             |
| Alt+Z             | 切换换行 Toggle word wrap                                   |

### 导航 Navigation

| 按 Press           | 功能 Function                                        |
| ------------------ | ---------------------------------------------------- |
| Ctrl + T           | 显示所有符号 Show all Symbols                        |
| Ctrl + G           | 转到行... Go to Line...                              |
| Ctrl + P           | 转到文件... Go to File...                            |
| Ctrl + Shift + O   | 转到符号... Go to Symbol...                          |
| Ctrl + Shift + M   | 显示问题面板 Show Problems panel                     |
| F8                 | 转到下一个错误或警告 Go to next error or warning     |
| Shift + F8         | 转到上一个错误或警告 Go to previous error or warning |
| Ctrl + Shift + Tab | 导航编辑器组历史记录 Navigate editor group history   |
| Alt + ←/→          | 返回/前进 Go back / forward                          |
| Ctrl + M           | 切换选项卡移动焦点 Toggle Tab moves focus            |

### 搜索和替换

| 按 Press          | 功能 Function                                                |
| ----------------- | ------------------------------------------------------------ |
| Ctrl + F          | 查找 Find                                                    |
| Ctrl + H          | 替换 Replace                                                 |
| F3 / Shift + F3   | 查找下一个/上一个 Find next/previous                         |
| Alt + Enter       | 选择查找匹配的所有出现 Select all occurences of Find match   |
| Ctrl + D          | 将选择添加到下一个查找匹配 Add selection to next Find match  |
| Ctrl + K Ctrl + D | 将最后一个选择移至下一个查找匹配项 Move last selection to next Find match |
| Alt + C / R / W   | 切换区分大小写/正则表达式/整个词 Toggle case-sensitive / regex / whole word |

### 多光标和选择

| 按 Press                           | 功能 Function                                                |
| ---------------------------------- | ------------------------------------------------------------ |
| Alt +单击                          | 插入光标 Insert cursor                                       |
| Ctrl + Alt +↑/↓                    | 在上/下插入光标 Insert cursor above / below                  |
| Ctrl + U                           | 撤消上一个光标操作 Undo last cursor operation                |
| Shift + Alt + I                    | 在选定的每一行的末尾插入光标 Insert cursor at end of each line selected |
| Ctrl + I                           | 选择当前行 Select current line                               |
| Ctrl + Shift + L                   | 选择当前选择的所有出现 Select all occurrences of current selection |
| Ctrl + F2                          | 选择当前字的所有出现 Select all occurrences of current word  |
| Shift + Alt + →                    | 展开选择 Expand selection                                    |
| Shift + Alt + ←                    | 缩小选择 Shrink selection                                    |
| Shift + Alt + （拖动鼠标）         | 列（框）选择 Column (box) selection                          |
| Ctrl + Shift + Alt +（箭头键）     | 列（框）选择 Column (box) selection                          |
| Ctrl + Shift + Alt + PgUp / PgDown | 列（框）选择页上/下 Column (box) selection page up/down      |

### 丰富的语言编辑

| 按 Press             | 功能 Function                                          |
| -------------------- | ------------------------------------------------------ |
| Ctrl + 空格          | 触发建议 Trigger suggestion                            |
| Ctrl + Shift + Space | 触发器参数提示 Trigger parameter hints                 |
| Tab                  | Emmet 展开缩写 Emmet expand abbreviation               |
| Shift + Alt + F      | 格式化文档 Format document                             |
| Ctrl + K Ctrl + F    | 格式选定区域 Format selection                          |
| F12                  | 转到定义 Go to Definition                              |
| Alt + F12            | Peek定义 Peek Definition                               |
| Ctrl + K F12         | 打开定义到边 Open Definition to the side               |
| Ctrl + .             | 快速解决 Quick Fix                                     |
| Shift + F12          | 显示引用 Show References                               |
| F2                   | 重命名符号 Rename Symbol                               |
| Ctrl + Shift + . /， | 替换为下一个/上一个值 Replace with next/previous value |
| Ctrl + K Ctrl + X    | 修剪尾随空格 Trim trailing whitespace                  |
| Ctrl + K M           | 更改文件语言 Change file language                      |

### 编辑器管理

| 按 Press                 | 功能 Function                                                |
| ------------------------ | ------------------------------------------------------------ |
| Ctrl+F4, Ctrl+W          | 关闭编辑器 Close editor                                      |
| Ctrl+K F                 | 关闭文件夹 Close folder                                      |
| Ctrl+\                   | 拆分编辑器 Split editor                                      |
| Ctrl+ 1 / 2 / 3          | 聚焦到第1，第2或第3编辑器组 Focus into 1st, 2nd or 3rd editor group |
| Ctrl+K Ctrl+ ←/→         | 聚焦到上一个/下一个编辑器组 Focus into previous/next editor group |
| Ctrl+Shift+PgUp / PgDown | 向左/向右移动编辑器 Move editor left/right                   |
| Ctrl+K ← / →             | 移动活动编辑器组 Move active editor group                    |

### 文件管理

| 按 Press       | 功能 Function                                                |
| -------------- | ------------------------------------------------------------ |
| Ctrl+N         | 新文件 New File                                              |
| Ctrl+O         | 打开文件... Open File...                                     |
| Ctrl+S         | 保存 Save                                                    |
| Ctrl+Shift+S   | 另存为... Save As...                                         |
| Ctrl+K S       | 全部保存 Save All                                            |
| Ctrl+F4        | 关闭 Close                                                   |
| Ctrl+K Ctrl+W  | 关闭所有 Close All                                           |
| Ctrl+Shift+T   | 重新打开关闭的编辑器 Reopen closed editor                    |
| Ctrl+K         | 输入保持打开 Enter Keep Open                                 |
| Ctrl+Tab       | 打开下一个 Open next                                         |
| Ctrl+Shift+Tab | 打开上一个 Open previous                                     |
| Ctrl+K P       | 复制活动文件的路径 Copy path of active file                  |
| Ctrl+K R       | 显示资源管理器中的活动文件 Reveal active file in Explorer    |
| Ctrl+K O       | 显示新窗口/实例中的活动文件 Show active file in new window/instance |

### 显示 

| 按 Press     | 功能 Function                                            |
| ------------ | -------------------------------------------------------- |
| F11          | 切换全屏 Toggle full screen                              |
| Shift+Alt+1  | 切换编辑器布局 Toggle editor layout                      |
| Ctrl+ = / -  | 放大/缩小 Zoom in/out                                    |
| Ctrl+B       | 切换侧栏可见性 Toggle Sidebar visibility                 |
| Ctrl+Shift+E | 显示浏览器/切换焦点 Show Explorer / Toggle focus         |
| Ctrl+Shift+F | 显示搜索 Show Search                                     |
| Ctrl+Shift+G | 显示Git Show Git                                         |
| Ctrl+Shift+D | 显示调试 Show Debug                                      |
| Ctrl+Shift+X | 显示扩展 Show Extensions                                 |
| Ctrl+Shift+H | 替换文件 Replace in files                                |
| Ctrl+Shift+J | 切换搜索详细信息 Toggle Search details                   |
| Ctrl+Shift+C | 打开新命令提示符/终端 Open new command prompt/terminal   |
| Ctrl+Shift+U | 显示输出面板 Show Output panel                           |
| Ctrl+Shift+V | 切换Markdown预览 Toggle Markdown preview                 |
| Ctrl+K V     | 从旁边打开Markdown预览 Open Markdown preview to the side |

### 调试 

| 按 Press        | 功能 Function               |
| --------------- | --------------------------- |
| F9              | 切换断点 Toggle breakpoint  |
| F5              | 开始/继续 Start/Continue    |
| Shift+F5        | 停止 Stop                   |
| F11 / Shift+F11 | 下一步/上一步 Step into/out |
| F10             | 跳过 Step over              |
| Ctrl+K Ctrl+I   | 显示悬停 Show hover         |

### 集成终端

| 按 Press            | 功能 Function                             |
| ------------------- | ----------------------------------------- |
| Ctrl+`              | 显示集成终端 Show integrated terminal     |
| Ctrl+Shift+`        | 创建新终端 Create new terminal            |
| Ctrl+Shift+C        | 复制选定 Copy selection                   |
| Ctrl+Shift+V        | 粘贴到活动端子 Paste into active terminal |
| Ctrl+↑ / ↓          | 向上/向下滚动 Scroll up/down              |
| Shift+PgUp / PgDown | 向上/向下滚动页面 Scroll page up/down     |
| Ctrl+Home / End     | 滚动到顶部/底部 Scroll to top/bottom      |



## 常见问题

1. 输入时总在状态栏目输入，那是因为安装了vim插件删除就好