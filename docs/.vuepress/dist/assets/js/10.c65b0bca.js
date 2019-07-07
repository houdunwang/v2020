(window.webpackJsonp=window.webpackJsonp||[]).push([[10],{234:function(t,a,n){t.exports=n.p+"assets/img/image-20180421012238440.e373cd73.png"},235:function(t,a,n){t.exports=n.p+"assets/img/image-20180421012330933.0de289f9.png"},236:function(t,a,n){t.exports=n.p+"assets/img/image-20180421012414784.834e6c88.png"},264:function(t,a,n){"use strict";n.r(a);var e=n(0),s=Object(e.a)({},function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[e("h1",{attrs:{id:"gitbook"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#gitbook","aria-hidden":"true"}},[t._v("#")]),t._v(" gitbook")]),t._v(" "),e("h2",{attrs:{id:"基本使用"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#基本使用","aria-hidden":"true"}},[t._v("#")]),t._v(" 基本使用")]),t._v(" "),e("h4",{attrs:{id:"安装"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#安装","aria-hidden":"true"}},[t._v("#")]),t._v(" 安装")]),t._v(" "),e("p",[t._v("需要注意的是：用户首先需要安装 nodejs，以便能够使用 npm 来安装 gitbook。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("npm install gitbook -g\n//查看安装的版本\ngitbook -V\n")])])]),e("h4",{attrs:{id:"初始化"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#初始化","aria-hidden":"true"}},[t._v("#")]),t._v(" 初始化")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("//创建目录\nmkdir houdunren\n//初始化图书\ngitbook init\n")])])]),e("h4",{attrs:{id:"构建"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#构建","aria-hidden":"true"}},[t._v("#")]),t._v(" 构建")]),t._v(" "),e("p",[t._v("使用下面的命令，会在项目的目录下生成一个 "),e("code",[t._v("_book")]),t._v(" 目录，里面的内容为静态站点的资源文件：")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("gitbook build\n")])])]),e("h4",{attrs:{id:"启动服务"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#启动服务","aria-hidden":"true"}},[t._v("#")]),t._v(" 启动服务")]),t._v(" "),e("p",[t._v("使用下列命令会运行一个 web 服务, 通过 "),e("code",[t._v("http://localhost:4000/")]),t._v(" 可以预览书籍")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("gitbook serve\n")])])]),e("h4",{attrs:{id:"目录结构"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#目录结构","aria-hidden":"true"}},[t._v("#")]),t._v(" 目录结构")]),t._v(" "),e("h3",{attrs:{id:"gitbook-项目结构"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#gitbook-项目结构","aria-hidden":"true"}},[t._v("#")]),t._v(" GitBook 项目结构")]),t._v(" "),e("p",[t._v("GitBook使用简单的目录结构。在 "),e("a",{attrs:{href:"https://toolchain.gitbook.com/pages.html",target:"_blank",rel:"noopener noreferrer"}},[t._v("SUMMARY"),e("OutboundLink")],1),t._v(" （即 "),e("code",[t._v("SUMMARY.md")]),t._v(" 文件）中列出的所有 Markdown / Asciidoc 文件将被转换为 HTML。多语言书籍结构略有不同。")]),t._v(" "),e("p",[t._v("一个基本的 GitBook 电子书结构通常如下：")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v(".\n├── book.json\n├── README.md\n├── SUMMARY.md\n├── chapter-1/\n|   ├── README.md\n|   └── something.md\n└── chapter-2/\n    ├── README.md\n    └── something.md\n")])])]),e("p",[t._v("文件说明：")]),t._v(" "),e("table",[e("thead",[e("tr",[e("th",[t._v("文件")]),t._v(" "),e("th",[t._v("描述")])])]),t._v(" "),e("tbody",[e("tr",[e("td",[e("code",[t._v("book.json")])]),t._v(" "),e("td",[t._v("配置数据 ("),e("strong",[t._v("optional")]),t._v(")")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("README.md")])]),t._v(" "),e("td",[t._v("电子书的前言或简介 ("),e("strong",[t._v("required")]),t._v(")")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("SUMMARY.md")])]),t._v(" "),e("td",[t._v("电子书目录 ("),e("strong",[t._v("optional")]),t._v(")")])]),t._v(" "),e("tr",[e("td",[e("code",[t._v("GLOSSARY.md")])]),t._v(" "),e("td",[t._v("词汇/注释术语列表 ("),e("strong",[t._v("optional")]),t._v(")")])])])]),t._v(" "),e("h4",{attrs:{id:"目录"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#目录","aria-hidden":"true"}},[t._v("#")]),t._v(" 目录")]),t._v(" "),e("p",[t._v("GitBook 使用 "),e("code",[t._v("SUMMARY.md")]),t._v(" 文件来定义本书的章节和子章节的结构。 "),e("code",[t._v("SUMMARY.md")]),t._v(" 文件用于生成本书的目录。")]),t._v(" "),e("p",[e("code",[t._v("SUMMARY.md")]),t._v(" 的格式是一个链接列表。链接的标题将作为章节的标题，链接的目标是该章节文件的路径。")]),t._v(" "),e("p",[t._v("向父章节添加嵌套列表将创建子章节。")]),t._v(" "),e("p",[e("strong",[t._v("示例：")])]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("# Summary\n\n* [Part I](part1/README.md)\n    * [Writing is nice](part1/writing.md)\n    * [GitBook is nice](part1/gitbook.md)\n* [Part II](part2/README.md)\n    * [We love feedback](part2/feedback_please.md)\n    * [Better tools for authors](part2/better_tools.md)\n")])])]),e("p",[e("strong",[t._v("部分")])]),t._v(" "),e("p",[t._v("目录可以分为以标题或水平线 "),e("code",[t._v("----")]),t._v(" 分隔的部分：")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("# Summary\n\n### Part I\n\n* [Writing is nice](part1/writing.md)\n* [GitBook is nice](part1/gitbook.md)\n\n### Part II\n\n* [We love feedback](part2/feedback_please.md)\n* [Better tools for authors](part2/better_tools.md)\n\n----\n\n* [Last part without title](part3/title.md)\n")])])]),e("p",[t._v("Parts 只是章节组，没有专用页面，但根据主题，它将在导航中显示。")]),t._v(" "),e("h4",{attrs:{id:"常用命令"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#常用命令","aria-hidden":"true"}},[t._v("#")]),t._v(" 常用命令")]),t._v(" "),e("ol",[e("li",[t._v("gitbook help //列出gitbook所有的命令")]),t._v(" "),e("li",[t._v("gitbook --help //输出gitbook-cli的帮助信息")]),t._v(" "),e("li",[t._v("gitbook build //生成静态网页")]),t._v(" "),e("li",[t._v("gitbook serve //生成静态网页并运行服务器")]),t._v(" "),e("li",[t._v("gitbook update //更新到gitbook的最新版本")])]),t._v(" "),e("h5",{attrs:{id:"配置"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#配置","aria-hidden":"true"}},[t._v("#")]),t._v(" 配置")]),t._v(" "),e("p",[t._v("配置在 "),e("code",[t._v("book.json")]),t._v(" 文件中设置。下面是一个标准的配置文件。")]),t._v(" "),e("p",[t._v("需要执行  "),e("code",[t._v("gitbook install")]),t._v(" 安装配置文件中的插件")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v('{\n    "title": "向军大叔",\n    "description": "向军大叔技术分享",\n    "author": "向军大叔",\n    "output.name": "site",\n    "language": "zh-hans",\n    "gitbook": "3.2.3",\n    "root": ".",\n    "structure": {\n        "readme": "README.md"\n    },\n    "links": {\n        "sidebar": {\n            "后盾人": "http://www.houdunren.com"\n        }\n    },\n    "plugins": [\n        "-lunr",\n        "-search",\n        "-highlight",\n        "-livereload",\n        "search-plus@^0.0.11",\n        "simple-page-toc@^0.1.1",\n        "github@^2.0.0",\n        "github-buttons@2.1.0",\n        "edit-link@^2.0.2",\n        "disqus@^0.1.0",\n        "prism@^2.1.0",\n        "prism-themes@^0.0.2",\n        "advanced-emoji@^0.2.1",\n        "anchors@^0.7.1",\n        "include-codeblock@^3.0.2",\n        "ace@^0.3.2",\n        "emphasize@^1.1.0",\n        "katex@^1.1.3",\n        "splitter@^0.0.8",\n        "mermaid-gb3@2.1.0",\n        "tbfed-pagefooter@^0.0.1",\n        "expandable-chapters-small@^0.1.7",\n        "sectionx@^3.1.0",\n        "donate@^1.0.2",\n        "local-video@^1.0.1",\n        "sitemap-general@^0.1.1",\n        "anchor-navigation-ex@0.1.8",\n        "favicon@^0.0.2",\n        "todo@^0.1.3",\n        "3-ba@^0.9.0",\n        "terminal@^0.3.2",\n        "alerts@^0.2.0",\n        "include-csv@^0.1.0",\n        "puml@^1.0.1",\n        "musicxml@^1.0.2",\n        "klipse@^1.2.0",\n        "versions-select@^0.1.1",\n        "rss@^3.0.2",\n        "-sharing",\n        "sharing-plus@^0.0.2",\n        "graph@^0.1.0",\n        "chart@^0.2.0"\n    ],\n    "pluginsConfig": {\n        "theme-default": {\n            "showLevel": true\n        },\n        "disqus": {\n            "shortName": "xiangjun"\n        },\n        "prism": {\n            "css": [\n                "prism-themes/themes/prism-base16-ateliersulphurpool.light.css"\n            ]\n        },\n        "github": {\n            "url": "https://github.com/houdunwang/book"\n        },\n        "github-buttons": {\n            "repo": "houdunwang/book",\n            "types": [\n                "star"\n            ],\n            "size": "small"\n        },\n        "include-codeblock": {\n            "template": "ace",\n            "unindent": true,\n            "edit": true\n        },\n        "sharing": {\n           "douban": false,\n           "hatenaBookmark": false,\n           "instapaper": false,\n           "line": false,\n           "linkedin": false,\n           "messenger": false,\n           "pocket": false,\n           "qq": true,\n           "qzone": true,\n           "stumbleupon": false,\n           "twitter": false,\n           "viber": false,\n           "vk": false,\n           "weibo": true,\n           "whatsapp": false,\n           "all": [\n               "douban", "twitter", "line","facebook"\n           ]\n       },\n        "tbfed-pagefooter": {\n            "copyright": "Copyright © <a href=\'http://aoxiangjun.com\'>aoxiangjun.com</a> 2019",\n            "modify_label": "该文件修订时间：",\n            "modify_format": "YYYY-MM-DD HH:mm:ss"\n        },\n        "3-ba": {\n            "token": "ff100361cdce95dd4c8fb96b4009f7bc"\n        },\n        "donate": {\n            "wechat": "http://www.hdcms.com/xiangjunpayqr/wechat.JPG",\n            "alipay": "http://www.hdcms.com/xiangjunpayqr/alipay.JPG",\n            "title": "",\n            "button": "赏",\n            "alipayText": "支付宝打赏",\n            "wechatText": "微信打赏"\n        },\n        "simple-page-toc": {\n            "maxDepth": 3,\n            "skipFirstH1": true\n        },\n        "edit-link": {\n            "base": "https://github.com/houdunwang/book/edit/master",\n            "label": "Edit This Page"\n        },\n        "sitemap-general": {\n            "prefix": "http://gitbook.houdunren.com"\n        },\n        "anchor-navigation-ex": {\n            "isRewritePageTitle": false,\n            "tocLevel1Icon": "fa fa-hand-o-right",\n            "tocLevel2Icon": "fa fa-hand-o-right",\n            "tocLevel3Icon": "fa fa-hand-o-right"\n        },\n        "sectionx": {\n            "tag": "b"\n        },\n        "favicon": {\n            "shortcut": "favicon.ico",\n            "bookmark": "favicon.ico"\n        },\n        "terminal": {\n            "copyButtons": true,\n            "fade": false,\n            "style": "flat"\n        },\n        "rss": {\n            "title": "向军大叔技术文档分享",\n            "description": "向军大叔技术文档分享",\n            "author": "向军大叔",\n            "feed_url": "http://gitbook.zhangjikai.com/rss",\n            "site_url": "http://www.houdunren.com/",\n            "managingEditor": "2300071698@qq.com",\n            "webMaster": "2300071698@qq.com",\n            "categories": [\n                "gitbook"\n            ]\n        }\n    }\n}\n')])])]),e("h2",{attrs:{id:"gitbook-com"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#gitbook-com","aria-hidden":"true"}},[t._v("#")]),t._v(" gitbook.com")]),t._v(" "),e("h4",{attrs:{id:"新建书籍"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#新建书籍","aria-hidden":"true"}},[t._v("#")]),t._v(" 新建书籍")]),t._v(" "),e("p",[e("img",{attrs:{src:n(234),alt:"image-20180421012238440"}})]),t._v(" "),e("p",[e("img",{attrs:{src:n(235),alt:"image-20180421012330933"}})]),t._v(" "),e("p",[e("img",{attrs:{src:n(236),alt:"image-20180421012414784"}})])])},[],!1,null,null,null);a.default=s.exports}}]);