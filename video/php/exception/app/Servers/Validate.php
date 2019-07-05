<?php

namespace App\Servers;

use App\Exceptions\ValidateException;

class Validate
{
    public static function make()
    {
        if (empty($_POST['title'])) {
            throw new ValidateException('标题不能为空');
        }
    }
}
