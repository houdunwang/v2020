<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class UploadException extends Exception
{
    public function __construct(string $message = "", int $code = 401, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        return response()->json(['message' => $this->getMessage(), 'code' => 401], $this->code);
    }
}
