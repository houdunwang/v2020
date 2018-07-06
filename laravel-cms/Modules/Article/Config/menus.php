<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 后台菜单配置
 * 下面是属性说明：
 * title 菜单栏目
 * icon 图标参考 http://fontawesome.dashgame.com/
 * menus 子菜单
 * permission 权限标识，必须在permission.php配置文件中存在
 */
return [
    [
        "title"      => "文章管理",
        "icon"       => "fa fa-navicon",
        'permission' => '权限标识',
        "menus"      => [
            ["title" => "栏目管理", "permission" => "Article::catetory article", "url" => "链接地址"],
            ["title" => "文章管理", "permission" => "Article::content mangae", "url" => "链接地址"],
        ],
    ],
];
