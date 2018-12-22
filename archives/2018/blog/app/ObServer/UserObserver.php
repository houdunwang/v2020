<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/6/4
 * Time: 11:10
 */

namespace App\ObServer;

use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        $user->email_token = str_random(10);
        $user->email_active = false;
    }
}