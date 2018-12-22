<?php return array(
    0 =>
        array(
            'title' => '系统管理',
            'icon' => 'fa fa-navicon',
            'permission' =>
                array(
                    0 => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                ),
            'menus' =>
                array(
                    array(
                        'title' => '角色管理',
                        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                        'url' => '/admin/role',
                    ),
                    array(
                        'title' => '模块管理',
                        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                        'url' => '/admin/role',
                    ),
                    array(
                        'title' => '网站配置',
                        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                        'url' => '/admin/role',
                    ),
                    array(
                        'title' => '邮件通知设置',
                        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                        'url' => '/admin/role',
                    ),
                ),
        ),
    1 =>
        array(
            'title' => '微信管理',
            'icon' => 'fa fa-navicon',
            'permission' =>
                array(
                    0 => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                ),
            'menus' =>
                array(
                    0 =>
                        array(
                            'title' => '微信配置',
                            'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
                            'url' => '/admin/role',
                        ),
                ),
        ),
    'admin' =>
        array(
            'title' => '模块管理',
            'icon' => 'fa fa-navicon',
            'permission' => '权限标识',
            'menus' =>
                array(
                        array(
                            'title' => '模块管理',
                            'permission' => '',
                            'url' => '/admin/module',
                        ),
                ),
        ),
);