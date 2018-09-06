<?php
/**
 * 生成随机数值
 * @param $num int 生成个数
 * @return string
 */
function hd_random($num)
{
    $str = '';
    for ($i = 0; $i < $num; $i++) {
        $str .= substr(mt_rand(1, 9999), 0, 1);
    }
    return $str;
}

//hd_config('site.webname')
function hd_config($path)
{
    static $cache = [];
    $info = explode('.', $path);
    $name = $info[0];
    if (!isset($cache[$name])) {
        $config = \App\Models\Config::where('name', $name)->value('data');
        $cache[$name] = $config;
    }
    return $cache[$name][$info[1]];
}
