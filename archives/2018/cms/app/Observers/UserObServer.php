<?php

namespace App\Observers;

use App\User;

class UserObServer
{
    public function creating(User $user)
    {
        $user->token = str_random(20);
    }
}
