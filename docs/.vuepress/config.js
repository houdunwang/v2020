module.exports = {
    title: '后盾人',
    description: '在线文档库',
    themeConfig: {
        updatePopup: true,
        title: '后盾人 - ',
        description: '后盾人 php/javascript/css/laravel在线文档库',
        repo: 'https://gitee.com/houdunren/code',
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
                    }
                ]
            },
            {
                text: '在线学习',
                items: [{
                        text: '在线教育',
                        link: 'https://www.houdunren.com'
                    },
                    {
                        text: '系统学习',
                        link: 'https://www.houdunren.com/edu/front/system?sid=1&mid=2'
                    },
                    {
                        text: '实战课程',
                        link: 'https://www.houdunren.com/edu/front/lesson?sid=1&mid=2'
                    },
                    {
                        text: '最近更新',
                        link: 'https://www.houdunren.com/edu/front/video?sid=1&mid=2'
                    },
                    {
                        text: '话题讨论',
                        link: 'https://www.houdunren.com/edu/front/topic'
                    },
                    {
                        text: '签到打卡',
                        link: 'https://www.houdunren.com/edu/front/sign'
                    },
                ]
            },
            {
                text: '八点直播',
                link: 'https://www.houdunren.com/edu/front/live'
            }
        ],
        lastUpdated: 'Last Updated',
        sidebarDepth: 2,
        displayAllHeaders: false,
        // sidebar: 'auto',
        // sidebar: [
        //     ['/php/php', 'PHP'],
        //     ['/linux/ubuntu', 'ubuntu'],
        // ],
        // sidebar: [{
        //         title: 'PHP',
        //         collapsable: false,
        //         children: [
        //             ['/php/1 前言', '1 前言'],
        //             ['/php/2 基础知识', '2 基础知识'],
        //             // '/php/1 前言',
        //             // '/php/2 基础知识',
        //             // '/php/3 函数编程'
        //         ]
        //     },
        //     {
        //         title: 'Linux',
        //         children: [
        //             ['/linux/ubuntu', 'ubuntu'],
        //             ['/linux/zsh', 'zsh'],
        //         ]
        //     }
        // ],
        sidebar: {
            '/php/': [
                ['/php/1 前言', '1 前言'],
                ['/php/2 基础知识', '2 基础知识'],
            ],

            '/linux/': [
                ['/linux/ubuntu', 'ubuntu'],
                ['/linux/zsh', 'zsh'],
            ],
        }
    }
}