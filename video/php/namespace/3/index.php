<?php
namespace App;

include 'Order.php';
include 'Comment.php';
class User
{
    public static function make()
    {
        echo __METHOD__;
    }
}
// User::make();
// Controller\Order::make();
\Common\Comment::make();
