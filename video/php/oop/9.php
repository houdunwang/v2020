<?php
class Code
{
    protected $width;
    public function __construct(int $width = 300)
    {
        $this->width = $width;
    }
    public function make()
    {
        return '你生成了' . $this->width . '宽度的验证码';
    }
    public function __destruct()
    {
        echo 'destruct';
    }
}

$a = (new Code());
$b = $a;
echo $a->make();
echo '<hr/>';
