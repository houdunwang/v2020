<?php

namespace Modules\Article\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Article\Entities\Category;
use Modules\Article\Entities\Content;

class ContentSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Category::insert([
            ['name'=>'文章','pid'=>0],
            ['name'=>'游戏','pid'=>0],
            ['name'=>'评测','pid'=>0],
            ['name'=>'编程','pid'=>0],
        ]);
        // $this->call("OthersTableSeeder");
        factory(Content::class,100)->create();
    }
}
