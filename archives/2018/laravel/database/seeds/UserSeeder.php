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
        factory(\App\User::class, 200)->create();
        $user = \App\User::find(1);
        $user->name = '向军大叔';
        $user->email = '2300071698@qq.com';
        $user->is_admin = true;
        $user->password = bcrypt('admin888');
        $user->save();
        $user = \App\User::find(2);
        $user->name = '华仔';
        $user->email = 'hua@houdunren.com';
        $user->is_admin = false;
        $user->password = bcrypt('admin888');
        $user->save();
    }
}
