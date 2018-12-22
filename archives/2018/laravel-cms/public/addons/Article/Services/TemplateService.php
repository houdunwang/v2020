<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/7/18
 * Time: 21:31
 */

namespace Modules\Article\Services;

class TemplateService
{
    public function all()
    {
        $dirs = glob(public_path('templates/*'));
        $configs = [];
        foreach ($dirs as $dir) {
            if ($config = $this->parseConfig($dir)) {
                $configs[] = $config;
            }
        }
        return $configs;
    }

    protected function parseConfig($dir)
    {
        $file = $dir . '/package.json';
        if (is_file($file)) {
            $jsonContent = file_get_contents($file);
            $config = json_decode(trim($jsonContent));
            if (is_object($config)) {
                $config = (array)$config;
                $name = basename($dir);
                $config['preview'] = url('templates/' . $name . '/' . $config['preview']);
                $config['name'] = $name;
                return $config;
            }
        }
    }
}