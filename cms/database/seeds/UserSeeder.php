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
        $user = new \App\User();
        $user['name'] = '向军大叔';
        $user['email'] = '2300071698@qq.com';
        $user['password'] = bcrypt('admin888');
        $user['email_valid'] = true;
        $user['is_admin'] = true;
        $user->save();
    }
}
