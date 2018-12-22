<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Module;

class ModuleSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Module::insert([
            'title' => "文章系统",
            'name' => 'Article',
            'is_default' => 1,
            'front_access'=>1
        ]);
        // $this->call("OthersTableSeeder");
    }
}
