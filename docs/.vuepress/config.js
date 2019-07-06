module.exports = {
    title: '后盾人',
    description: '在线文档库',
    base: '/code/',
    themeConfig: {
        updatePopup: true,
        title: '后盾人 - ',
        description: '后盾人 php/javascript/css/laravel在线文档库',
        repo: 'https://github.com/houdunwang/coding',
        docsDir: 'docs',
        repoLabel: '查看源码',
        editLinks: true,
        editLinkText: '帮助我们改善此页面！',
        nav: [{
            text: '文档列表',
            items: [{
                text: 'PHP',
                link: '/php/1 前言',
                desc: "系统学习PHP"
            },
            {
                text: 'Linux',
                link: '/linux/ubuntu',
                desc: "高效使用Linux"
            },
            {
                text: '环境与软件',
                link: '/environment/composer',
                desc: "配置高效的开发环境与工具软件"
            },
            {
                text: 'Docker',
                link: '/docker/laradock',
                desc: "开源的应用容器引擎DOKER"
            },
            {
                text: 'GIT',
                link: '/git/git',
                desc: "学习使用版本控制"
            }, {
                text: 'Laravel',
                link: '/laravel/Laravel',
                desc: "高效的后台开发框架"
            },
            {
                text: 'HDCMS',
                link: '/hdcms/HDCMS',
                desc: "模块化可扩展内容管理系统"
            }
            ]
        },
        // {
        //     text: '其他功能',
        //     items: [{
        //             text: '实战课程',
        //             link: 'https://www.houdunren.com/edu/front/lesson?sid=1&mid=2'
        //         },
        //         {
        //             text: '最近更新',
        //             link: 'https://www.houdunren.com/edu/front/video?sid=1&mid=2'
        //         },
        //         {
        //             text: '话题讨论',
        //             link: 'https://www.houdunren.com/edu/front/topic'
        //         },
        //         {
        //             text: '签到打卡',
        //             link: 'https://www.houdunren.com/edu/front/sign'
        //         },
        //     ]
        // },
        {
            text: '在线学习',
            link: 'https://www.houdunren.com'
        },
        {
            text: '八点直播',
            link: 'https://www.houdunren.com/edu/front/live'
        }
        ],
        lastUpdated: 'Last Updated',
        sidebarDepth: 2,
        displayAllHeaders: false,
        sidebar: {
            '/php/': [
                ['/php/1 前言', '前言'],
                ['/php/2 基础知识', '基础知识'],
                ['/php/3 函数编程', '函数编程'],
                ['/php/4 数组类型', '数组类型'],
                ['/php/5 正则表达式', '正则表达式'],
                ['/php/6 文件与目录', '文件与目录'],
                ['/php/7 文件上传', '文件上传'],
                ['/php/8 会话控制', '会话控制'],
                ['/php/9 图像处理', '图像处理'],
                ['/php/10 面向对象', '面向对象'],
                ['/php/11 命名空间', '命名空间'],
                ['/php/12 错误处理', '错误处理'],
                ['/php/13 异常处理', '异常处理'],
                ['/php/14 数据库操作', '数据库操作'],
            ],

            '/linux/': [
                ['/linux/ubuntu', 'ubuntu'],
                ['/linux/zsh', 'zsh'],
                ['/linux/Linux', 'Linux'],
            ],
            '/environment/': [
                ['composer', 'composer'],
                ['wamp', 'wamp'],
                ['xampp', 'xampp'],
                ['homestead Mac', 'homestead Mac'],
                ['Homestead Windows', 'Homestead Windows'],
                ['phpstorm', 'phpstorm'],
                ['sublime', 'sublime'],
                ['vscode', 'vscode'],
                ['WakaTime', 'WakaTime'],
            ],
            '/docker/': [
                ['laradock', 'laradock'],
                ['docker', 'docker'],
                ['lamp', '开发lamp镜像'],
                ['mac', '苹果配置'],
            ],
            '/git/': [
                ['git', 'git'],
            ],
            '/laravel/': [
                ['package', '开发扩展包'],
                ['API', 'API'],
                ['algolia', 'algolia'],
                ['package', '开发扩展包'],
                ['使用技巧', '使用技巧'],
                ['Laravel', 'Laravel'],
            ],
            '/hdcms/': [
                ['HDCMS', 'hdcms'],
            ],
        }
    }
}