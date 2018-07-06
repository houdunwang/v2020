<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 权限配置
 * 为了避免其他模块有同名的权限，权限标识要以 '模块标识::' 开始
 */
return [
    [
        'group' => '系统管理',
        'permissions' => [
            ['title' => '网站配置', 'name' => 'Admin::config-site', 'guard' => 'admin'],
            ['title' => '微信配置', 'name' => 'Admin::config-wechat', 'guard' => 'admin'],
            ['title' => '邮件配置', 'name' => 'Admin::config-mail', 'guard' => 'admin'],
            ['title' => '权限管理', 'name' => 'Admin::role-manage', 'guard' => 'admin'],
        ],
    ],
    [
        'group' => '会员管理',
        'permissions' => [
            ['title' => '会员列表', 'name' => 'Admin::user-index', 'guard' => 'admin'],
            ['title' => '编辑会员', 'name' => 'Admin::user-edit', 'guard' => 'admin'],
        ],
    ],
];
