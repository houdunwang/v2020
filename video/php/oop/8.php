<?php
class Notify
{
    private function  send()
    {
        return 'notify send';
    }
}
class User extends Notify
{
    public function say()
    {
        return '你好后盾人' . $this->send();
    }
}

$user = new User;
echo $user->say();
