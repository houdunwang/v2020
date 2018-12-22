<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/7/17
 * Time: 21:44
 */

namespace Modules\Admin\Services;

use HDModule;
use Modules\Admin\Entities\Module;
use Modules\Admin\Http\Controllers\HomeController;

class ModuleService
{
    public function updateCache(): bool
    {
        \DB::table('modules')->truncate();
        $modules = HDModule::getModulesLists();
        foreach ($modules as $module) {
            $data = [
                'title' => $module['title'],
                'name' => $module['name'],
                'is_default' => 0,
                'front_access' => $this->frontAccess($module)
            ];
            Module::create($data);
        }
        return true;
    }

    protected function frontAccess($module)
    {
        $class = 'Modules\\' . $module['name'] . '\Http\Controllers\HomeController';
        return class_exists($class) && method_exists($class, 'index');
    }
}