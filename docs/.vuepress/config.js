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
        sidebarDepth: 1,
        displayAllHeaders: true,
        sidebar: 'auto',
        nav: [
            {
                text: '文档列表',
                items: [
                    { text: 'PHP', link: '/php/1' }
                ]
            },
            {
                text: '在线学习',
                items: [
                    { text: '在线教育', link: 'https://www.houdunren.com' },
                    { text: '系统学习', link: 'https://www.houdunren.com/edu/front/system?sid=1&mid=2' },
                    { text: '实战课程', link: 'https://www.houdunren.com/edu/front/lesson?sid=1&mid=2' },
                    { text: '最近更新', link: 'https://www.houdunren.com/edu/front/video?sid=1&mid=2' },
                    { text: '话题讨论', link: 'https://www.houdunren.com/edu/front/topic' },
                    { text: '签到打卡', link: 'https://www.houdunren.com/edu/front/sign' },
                ]
            },
            { text: '八点直播', link: 'https://www.houdunren.com/edu/front/live' }
        ],
        lastUpdated: 'Last Updated'
        //     sidebar: [
        //         ['/php/1 前言', '前言'],
        //         ['/php/2 基础知识', '基础知识']
        //     ]
    }
}