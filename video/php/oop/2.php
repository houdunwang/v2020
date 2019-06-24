<?php
class Model
{
    const EXISTS_VALIDATE = 1;
    public function validate()
    {
        return self::EXISTS_VALIDATE;
    }
}

echo (new Model)->validate();
