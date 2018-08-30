<?php
//hd_config('site.webname');
function hd_config($path)
{
    $info = explode('.', $path);
    $data = \App\Models\Config::where('name', array_shift($info))->value('data');
    return array_get($data, implode('.', $info));
}
