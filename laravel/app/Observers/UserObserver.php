<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/6/6
 * Time: 20:28
 */

namespace App\Observers;

use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        $user->email_token = str_random(10);
    }
}