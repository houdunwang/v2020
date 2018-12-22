<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 300)->create();
        $user = \App\User::find(1);
        $user->name = '向军大叔';
        $user->email = '2300071698@qq.com';
        $user->password = bcrypt('admin888');
        $user->is_admin = true;
        $user->save();
        $user = \App\User::find(2);
        $user->name = '后盾人';
        $user->email = 'hdcms@houdunren.com';
        $user->password = bcrypt('admin888');
        $user->save();
    }
}
