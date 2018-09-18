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

/**
 * 获取配置项
 * @param $path string 配置项
 * @return null
 */
function hd_config($path)
{
    static $cache = [];
    $info = explode('.', $path);
    $name = $info[0];
    if (empty($cache)) {
        $cache = Cache::get('hd_config', function () {
            return \App\Models\Config::pluck('data', 'name');
        });
    }
    return $cache[$name][$info[1]] ?? null;
}

/**
 * 获取模型类或模型实例对象
 * @return string\
 */
function hd_model()
{
    $name = Request::query('model');
    $id = Request::query('id');
    if (!strpos($name, '-')) {
        $name = 'App-Models-' . $name;
    }
    $class = '\\' . str_replace('-', '\\', $name);
    return $class::find($id);
}
