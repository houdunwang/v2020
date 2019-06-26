<?php
namespace App;

use App\Module\Shop\Controller\User;
use App\Module\Shop\Server\Pay;
use App\Module\Shop\Server\User as UserServer;

include 'Module/Shop/Controller/User.php';
include 'Module/Shop/Server/Pay.php';
include 'Module/Shop/Server/User.php';
// User::make();
Pay::make();
UserServer::make();
User::make();
