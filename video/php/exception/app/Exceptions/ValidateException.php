<?php

namespace App\Exceptions;

use Exception;

class ValidateException extends Exception
{
    public function render()
    {
        $_SESSION['VALIDATE_MESSAGE'] = $this->getMessage();
        header("location:index.php");
    }
}
