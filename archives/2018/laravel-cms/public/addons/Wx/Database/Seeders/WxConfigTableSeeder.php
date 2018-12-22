<?php

namespace Modules\Wx\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WxConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        \DB::table('wx_configs')->insert([
            ['name' => 'token', 'value' => '808c2b8e93acdda22e'],
            ['name' => 'encodingaeskey', 'value' => ''],
            ['name' => 'appid', 'value' => 'wxbf22595c137a3602'],
            ['name' => 'appsecret', 'value' => 'ed652c01f8b7b8d03d7694c67ae7dc6a'],
        ]);
    }
}
