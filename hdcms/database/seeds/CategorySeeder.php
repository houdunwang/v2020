<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => '技术分享', 'icon' => 'fa fa-address-book'],
            ['title' => '问答求助', 'icon' => 'fa fa-cube'],
            ['title' => '桌面文化', 'icon' => 'fa fa-file-word-o'],
        ];
        foreach ($data as $category) {
            \App\Models\Category::firstOrCreate(['title' => $category['title']], $category);
        }
    }
}
