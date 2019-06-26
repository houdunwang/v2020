<?php
namespace App\Module\Shop\Controller;

use App\Module\Shop\Server\User as UserServer;

class User
{
    public static function make()
    {
        UserServer::make();
    }
}
