<?php

namespace Modules\Wx\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WxDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(WxConfigTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}
