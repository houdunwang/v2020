<?php
class Captcha
{
    protected $width;
    protected $height;
    protected $res;
    protected $code;
    //验证码位数
    protected $len;
    public function __construct(int $width = 100, int $height = 30, int $len = 5)
    {
        $this->width = $width;
        $this->height = $height;
        $this->len = $len;
    }
    public function render()
    {
        $res = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->res = $res, 0, 0, imagecolorallocate($res, 200, 200, 200));
        $this->text();
        $this->pix();
        $this->line();
        $this->show();
        return $this->code;
    }
    //绘制验证码
    protected function text()
    {
        $font = realpath('source.otf');
        $text = 'abcdeftlksdiewklsdiok235665326532';
        for ($i = 0; $i < $this->len; $i++) {
            $x = $this->width / $this->len;
            $angle = mt_rand(-20, 20);
            $box = imagettfbbox(20, $angle, $font, 'A');
            $this->code .= $code = strtoupper($text[mt_rand(0, strlen($text) - 1)]);
            imagettftext(
                $this->res,
                20,
                mt_rand(-20, 20),
                $x * $i + 10,
                $this->height / 2 - ($box[7] - $box[0]) / 2,
                $this->textColor(),
                $font,
                $code
            );
        }
    }
    //绘制干扰点
    protected function pix()
    {
        for ($i = 0; $i < 300; $i++) {
            imagesetpixel(
                $this->res,
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                $this->color()
            );
        }
    }
    //显示渲染
    protected function show()
    {
        header("Content-type:image/png");
        imagepng($this->res);
    }
    //绘制干扰线
    protected function line()
    {
        for ($i = 0; $i < 6; $i++) {
            imagesetthickness($this->res, mt_rand(1, 3));
            imageline(
                $this->res,
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                $this->color()
            );
        }
    }
    //生成随机颜色
    protected function color()
    {
        return imagecolorallocate($this->res, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }
    protected function textColor()
    {
        return imagecolorallocate($this->res, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
    }
}
