<?php
class Code
{
    // protected $error;
    public function make(int $len)
    {
        $this->line($len);
        // if ($this->line($len) === false) {
        //     return false;
        // }
    }
    //绘制干扰线
    protected function line(int $len)
    {
        if ($len > 5) {
            // $this->error = '验证码线数量不能超过五个';
            // return false;
            throw new Exception('验证码线数量不能超过五个');
        }
        //...继续操作
    }
    // public function getError()
    // {
    //     return $this->error;
    // }
}
