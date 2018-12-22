<?php
//hd_config('site.webname');
function hd_config($path)
{
    $info = explode('.', $path);
    $data = \App\Models\Config::where('name', array_shift($info))->value('data');
    return array_get($data, implode('.', $info));
}

/**
 * 生成指定数量的随机数
 * @param $num int 数量
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
