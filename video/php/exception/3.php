<?php
class ValidateException extends Exception
{
    public function __toString()
    {
        return '后盾人' . $this->getFile() . $this->getCode() .
            $this->getLine() . $this->getMessage();
    }
}
try {
    throw new ValidateException('验证错误', 403);
} catch (ValidateException $e) {
    // echo $e->getFile() . "<br/>";
    // echo $e->getCode() . "<br/>";
    // echo $e->getLine() . "<br/>";
    // echo $e->getMessage() . "<br/>";
    // echo 'validateException' . $e->getMessage();
    //__toString 
    echo $e;
} catch (Exception $e) {
    // echo 'Exception' . $e->getMessage();
}
