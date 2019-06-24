<?php
class Users
{
    protected $name;
    protected static $classname = '三年一班';
    public function say()
    {
        return self::$classname . '的' . $this->getName() . '说：你好';
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public static function getClassName()
    {
        return self::$classname;
    }
}
$obj = new Users;
$obj->setName('后盾人');
echo $obj->say();
$obj->getClassName();
echo '<hr/>';
$lisi = new Users;
$lisi->setName('李四');
echo $lisi->say();
