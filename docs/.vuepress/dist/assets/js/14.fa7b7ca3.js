(window.webpackJsonp=window.webpackJsonp||[]).push([[14],{226:function(a,t,e){a.exports=e.p+"assets/img/image-20181110171158894.a536f2c2.png"},227:function(a,t,e){a.exports=e.p+"assets/img/image-20180629160604023.c1dc9133.png"},266:function(a,t,e){"use strict";e.r(t);var s=e(0),r=Object(s.a)({},function(){var a=this,t=a.$createElement,s=a._self._c||t;return s("ContentSlotsDistributor",{attrs:{"slot-key":a.$parent.slotKey}},[s("h1",{attrs:{id:"homestead-win"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#homestead-win","aria-hidden":"true"}},[a._v("#")]),a._v(" Homestead Win")]),a._v(" "),s("blockquote",[s("p",[a._v("后盾人 www.houdunren.com  作者："),s("a",{attrs:{href:"http://www.aoxiangjun.com",target:"_blank",rel:"noopener noreferrer"}},[a._v("向军大叔"),s("OutboundLink")],1)])]),a._v(" "),s("p",[a._v("Laravel 致力于让整个 PHP 开发体验变得愉快， 包括你的本地开发环境。 Vagrant 提供了一种简单，优雅的方式来管理和配置虚拟机。\nLaravel Homestead 是一个官方预封装的 Vagrant box，它为你提供了一个完美的开发环境，而无需在本地机器安装 PHP 、Web 服务器和其他服务器软件。不用担心会搞乱你的操作系统！Vagrant boxes 是一次性的。如果出现问题，你可以在几分钟内销毁并创建 Box!\nHomestead 可以运行在任何 Windows，Mac，或 Linux 系统，它包括了 Nginx web 服务器， PHP 7.2，PHP 7.1，PHP 7.0，PHP 5.6， MySQL，PostgreSQL，Redis，Memcached， Node，以及开发 Laravel 应用程序所需要的东西。")]),a._v(" "),s("blockquote",[s("p",[a._v("以下代码都是在windows 使用 "),s("a",{attrs:{href:"https://gitforwindows.org/",target:"_blank",rel:"noopener noreferrer"}},[a._v("git for windows"),s("OutboundLink")],1),a._v(" 命令行工具操作的")])]),a._v(" "),s("h2",{attrs:{id:"virtualbox"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#virtualbox","aria-hidden":"true"}},[a._v("#")]),a._v(" VirtualBox")]),a._v(" "),s("p",[a._v("https://www.virtualbox.org/\nVirtualBox 是 Oracle 公司的开源虚拟机软件。VirtualBox 号称是最强的免费虚拟机软件，它不仅功能齐全，而且性能也很优异！VirtualBox 支持大部分流行的系统，如：Mac, Windows, Linux 等。")]),a._v(" "),s("h2",{attrs:{id:"vagrant"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#vagrant","aria-hidden":"true"}},[a._v("#")]),a._v(" Vagrant")]),a._v(" "),s("p",[s("a",{attrs:{href:"https://www.vagrantup.com/",target:"_blank",rel:"noopener noreferrer"}},[a._v("Vagrant by HashiCorp"),s("OutboundLink")],1),a._v("\nVagrant 是用来管理虚拟机的工具，支持当前主流的虚拟机系统如 VirtualBox、VMware、AWS 等。Vagrant 的主要作用是提供一个可配置、可移植和复用的软件环境。Vagrant 让你通过编写一个 Vagrantfile 文件来控制虚拟机的启动、虚拟机网络环境的配置、虚拟机与主机间的文件共享，以及启动后自动执行一些配置脚本，如自动执行一个 Shell Script 来安装一些必备的开发工具，如安装配置MySQL、PHP，甚至是自动配置 Nginx 站点。这意味着，在一个多人开发的项目中，你只需要同步 Vagrantfile 文件，就可以保证参与项目的每个人各自的机器上拥有一致的开发环境。\n可以在下面网站上搜索需要的vagrant box\nhttps://app.vagrantup.com/boxes/search")]),a._v(" "),s("h4",{attrs:{id:"卸载程序和依赖"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#卸载程序和依赖","aria-hidden":"true"}},[a._v("#")]),a._v(" 卸载程序和依赖")]),a._v(" "),s("p",[a._v("在下载的安装包里有一个删除工具，可以直播删除 Vagrant软件。")]),a._v(" "),s("p",[s("img",{attrs:{src:e(226),alt:"image-20181110171158894"}})]),a._v(" "),s("p",[a._v("也可以使用下面命令删除")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("# 删除软件\nrm -rf /opt/vagrant\nrm -f /usr/local/bin/vagrant\nsudo pkgutil --forget com.vagrant.vagrant\n\n#删除用户数据\nrm -rf ~/.vagrant \nrm -rf ~/.vagrant.d\n")])])]),s("h2",{attrs:{id:"homestead-box"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#homestead-box","aria-hidden":"true"}},[a._v("#")]),a._v(" Homestead box")]),a._v(" "),s("p",[a._v("Homestead是一个官方预封装的 Vagrant box，它为你提供了一个完美的开发环境，而无需在本地机器安装 PHP 、Web 服务器和其他服务器软件。不用担心会搞乱你的操作系统！Vagrant boxes 是一次性的。如果出现问题，你可以在几分钟内销毁并创建 Box!")]),a._v(" "),s("p",[a._v("内置软件：Ubuntu 16.04、Git、PHP 7.2、PHP 7.1、Nginx、Apache (Optional)、MySQL ……")]),a._v(" "),s("p",[a._v("在线安装 Homestead Vagrant Box，这样安装下载会非常慢，可以使用第二种本地文件安装方式")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("vagrant box add laravel/homestead\n")])])]),s("p",[a._v("本地文件安装\n先下载离线 "),s("code",[a._v("homestead.box")]),a._v("  https://pan.baidu.com/s/1-obdVwlryRdtVV-8-iD56A  然后执行")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("vagrant box add laravel/homestead d:/code/homestead.box\n")])])]),s("p",[a._v("安装的box 镜像储存的位置：以我电脑为例在 "),s("code",[a._v("~/.vagrant.d/boxes")])]),a._v(" "),s("h2",{attrs:{id:"安装-homestead-管理脚本"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#安装-homestead-管理脚本","aria-hidden":"true"}},[a._v("#")]),a._v(" 安装 Homestead 管理脚本")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("#clone管理脚本\ngit clone https://github.com/laravel/homestead.git ~/Homestead\ncd ~/Homestead\n\n#创建 Homestead.yaml 配置文件\n./init.bat\n")])])]),s("p",[a._v("如果是本地安装的 homestead.box 版本为0，所以需要修改下面步骤生成的配置文件 /Users/xj/Homestead/scripts/homestead.rb 以下内容")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v('config.vm.box_version = settings["version"] ||= ">= 0"\n')])])]),s("h2",{attrs:{id:"ssh-秘钥登录"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#ssh-秘钥登录","aria-hidden":"true"}},[a._v("#")]),a._v(" SSH 秘钥登录")]),a._v(" "),s("p",[a._v("用于实现 SSH 免密码登录\n修改 Homestead.yaml 文件以下内容：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("keys:\n    - ~/.ssh/id_rsa\n    - ~/.ssh/id_rsa.pub\n")])])]),s("p",[a._v("生成 key")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v('ssh-keygen -t rsa -C "2300071698@qq.com"\n#后面一真按enter键，设置密码\n')])])]),s("h2",{attrs:{id:"配置共享文件夹"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#配置共享文件夹","aria-hidden":"true"}},[a._v("#")]),a._v(" 配置共享文件夹")]),a._v(" "),s("p",[a._v("Homestead.yaml 文件的 folders 属性里列出所有与 Homestead 环境共享的文件夹。这些文件夹中的文件若有变更，它们会保持本地机器与 Homestead 环境之间同步。你可以根据需要配置多个共享文件夹：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("folders:\n    - map: d:/code\n      to: /home/vagrant/Code\n# map 对应的是我们本机的文件夹\n* to 对应的是 Homestead 上的文件夹\n")])])]),s("h2",{attrs:{id:"显示文件列表"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#显示文件列表","aria-hidden":"true"}},[a._v("#")]),a._v(" 显示文件列表")]),a._v(" "),s("p",[a._v("在开发环境下我们希望在浏览器中显示文件列表")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("vim /etc/nginx/nginx.conf\n")])])]),s("p",[a._v("添加")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("http {\n\t...\n\tautoindex on; # 显示文件列表\n\t...\n}\n")])])]),s("h2",{attrs:{id:"vagrant命令"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#vagrant命令","aria-hidden":"true"}},[a._v("#")]),a._v(" vagrant命令")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("#启动 如果加上 --provision 选项那么添加的新站点会发布到虚拟机上。\ncd ~/Homestead && vagrant up\n\n#关闭\nvagrant halt\n\n#通过 SSH 登录 vagrant（需要先启动 vagrant）\nvagrant ssh\n\n#查看目前安装的box列表\nvagrant box list\n\n#删除box镜像\nvagrant box remove laravel/homestead\n\n#删除指定版本\nvagrant box remove laravel/homestead --box-version 6.4.0\n\n#查看当前 Homestead 虚拟机的状态。\nvagrant status\n")])])]),s("h2",{attrs:{id:"通过-ssh-连接"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#通过-ssh-连接","aria-hidden":"true"}},[a._v("#")]),a._v(" 通过 SSH 连接")]),a._v(" "),s("p",[a._v("这样就可以登录的 homestead 虚拟主机了，此地可以查看上面定义的本地目录与虚拟机目录同步的情况")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("vagrant ssh\n")])])]),s("h2",{attrs:{id:"数据库"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#数据库","aria-hidden":"true"}},[a._v("#")]),a._v(" 数据库")]),a._v(" "),s("ul",[s("li",[a._v("要从主机的数据库客户端连接到 MySQL，就连接到 127.0.0.1和端口 33060 (MySQL) 。账号密码分别是 homestead／secret。")]),a._v(" "),s("li",[a._v("PHP程序连接（虚拟机中连接）端口为 3306")])]),a._v(" "),s("h2",{attrs:{id:"全局命令"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#全局命令","aria-hidden":"true"}},[a._v("#")]),a._v(" 全局命令")]),a._v(" "),s("p",[s("strong",[a._v("Git for Windows环境中使用")])]),a._v(" "),s("p",[a._v("如果我们想在任何目录都可以执行 vagrant 命令，需要进行以下设置\n修改 ~/.bash_profile 文件内容，这种设置只在 "),s("code",[a._v("git for windows")]),a._v(" 软件中使用")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("function homestead() {\n    ( cd ~/Homestead && vagrant $* )\n}\n")])])]),s("p",[a._v("这样我们就可以使用 homestead up 等方式执行了。")]),a._v(" "),s("p",[s("strong",[a._v("设置Windows全局命令")])]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("@echo off\n\nset cwd=%cd%\nset homesteadVagrant=C:\\Users\\xj\\Homestead\n\ncd /d %homesteadVagrant% && vagrant %*\ncd /d %cwd%\n\nset cwd=\nset homesteadVagrant=\n")])])]),s("p",[a._v("你需要将脚本中实例路径 C:\\Homestead 调整为 Homestead 实际安装路径。创建文件之后，添加文件路径到 PATH，这样你就可以在系统的任意位置运行 homestead up 或 homestead ssh 命令了。")]),a._v(" "),s("p",[a._v("如果想让计算机启动时执行  homestead ，在"),s("code",[a._v("开始菜单->所有程序->启动")]),a._v(" 文件夹中设置 homestead.bat内容如下。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("homestead up\n")])])]),s("h2",{attrs:{id:"开机自启"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#开机自启","aria-hidden":"true"}},[a._v("#")]),a._v(" 开机自启")]),a._v(" "),s("p",[a._v("在 "),s("code",[a._v("开始菜单>启动")]),a._v(" 文件夹中创建 "),s("code",[a._v("homestead.bat")]),a._v(" 文件内容如下")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("homestead up\n")])])]),s("p",[a._v("要在360或腾讯电脑管家中的启动项中不要禁用。")]),a._v(" "),s("h2",{attrs:{id:"响应缓慢"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#响应缓慢","aria-hidden":"true"}},[a._v("#")]),a._v(" 响应缓慢")]),a._v(" "),s("p",[a._v("解决WINDOS系统下Homestead运行缓慢的问题")]),a._v(" "),s("blockquote",[s("p",[a._v("一定要先备份")])]),a._v(" "),s("p",[a._v("首先，命令行进入 Homestead 启动 vagrant")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("> cd ~/Homestead && vagrant up\n")])])]),s("p",[a._v("然后运行安装命令（如果下载失败可能被墙了）")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("$ vagrant plugin install vagrant-winnfsd\n")])])]),s("p",[a._v("修改文件1："),s("code",[a._v("homestead/scripts/homestead.rb")])]),a._v(" "),s("p",[a._v("查找此段代码（可能略有不同），替换为以下内容")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v('if settings.include? \'folders\'\n  settings["folders"].sort! { |a,b| a["map"].length <=> b["map"].length }\n\n  settings["folders"].each do |folder|\n    config.vm.synced_folder folder["map"], folder["to"], \n    id: folder["map"],\n    :nfs => true,\n    :mount_options => [\'nolock,vers=3,udp,noatime\']\n  end\nend\n')])])]),s("p",[a._v("文件2："),s("code",[a._v("Homestead.yaml")])]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("folders:\n    - map: ~/Code\n      to: /home/vagrant/Code\n      type: nfs\n")])])]),s("p",[a._v("重启 Homestead 使配置文件生效，大功告成。")]),a._v(" "),s("h2",{attrs:{id:"配置域名"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#配置域名","aria-hidden":"true"}},[a._v("#")]),a._v(" 配置域名")]),a._v(" "),s("p",[a._v("修改 "),s("code",[a._v("c:/windows/System32/drivers/etc/hosts")]),a._v(" 文件，因为 "),s("code",[a._v("hosts")]),a._v(" 文件不能直接修改，需要先移动到桌面或其他文件夹，然后添加如下内容，添加好后再将文件移动回来。")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("192.168.10.10  hdcms.hd\n")])])]),s("p",[a._v("上面定义了一个域名 hdcms.hd 指向我们的homestead服务器，在homestead.yaml文件内定义域名解析配置：")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v("sites:\n    - map: hdcms.hd\n      to: /home/vagrant/code/hdcms\n")])])]),s("p",[a._v("现在当我们访问 hdcms.hd 时会访问到 homestead服务器下的 "),s("code",[a._v("/home/vagrant/code/hdcms")]),a._v(" 目录")]),a._v(" "),s("h2",{attrs:{id:"win10安装错误"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#win10安装错误","aria-hidden":"true"}},[a._v("#")]),a._v(" Win10安装错误")]),a._v(" "),s("p",[a._v("执行 "),s("code",[a._v("cd ~/Homestead && vagrant up")]),a._v(" 开启虚拟机出现以下错误")]),a._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[a._v('Timed out while waiting for the machine to boot. This means that\nVagrant was unable to communicate with the guest machine within\nthe configured ("config.vm.boot_timeout" value) time period.\n\nIf you look above, you should be able to see the error(s) that\nVagrant had when attempting to connect to the machine. These errors\nare usually good hints as to what may be wrong.\n...\n')])])]),s("p",[a._v("进入你的BIOS，然后将virtualization（CPU虚拟化）设置为enable即可")]),a._v(" "),s("p",[a._v("BIOS界面：Configuratio > Intel Virtual Technology > Enabled")]),a._v(" "),s("p",[s("img",{attrs:{src:e(227),alt:"image-20180629160604023"}})])])},[],!1,null,null,null);t.default=r.exports}}]);