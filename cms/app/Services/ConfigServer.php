<?php namespace App\Services;

use App\Models\Config;

class ConfigServer
{
    //获取配置项
    public function get($name)
    {
        return Config::firstOrNew(['name' => $name]);
    }

    public function save($name, array $data)
    {
        return Config::updateOrCreate(['name' => $name], ['name'=>$name,'data'=>$data]);
    }
}
