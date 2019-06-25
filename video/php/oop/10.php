<?php
abstract class Query
{
    abstract protected function record(array $data);
    public function select()
    {
        $this->record(['name' => '后盾人', 'age' => 21, 'mobile' => 19999999999]);
    }
}
class Model extends Query
{
    protected $field = [];
    protected $deny = [];
    public function all()
    {
        $this->select();
        return $this->field;
    }
    protected function record(array $data)
    {
        $this->field = $data;
    }
    protected function __mobile()
    {
        return substr($this->field['mobile'], 0, 8) . '***';
    }
    public function __get($name)
    {
        if (method_exists($this, '__' . $name)) {
            return call_user_func_array([$this, '__' . $name], []);
        }
        if (isset($this->field[$name])) {
            return $this->field[$name];
        }
        throw new Exception('参数错误');
    }
    public function __set($name, $value)
    {
        if (isset($this->field[$name])) {
            $this->field[$name] = $value;
        } else {
            throw new Exception('参数错误');
        }
    }
    public function __unset($name)
    {
        if (!isset($this->field[$name]) || in_array($name, $this->deny)) {
            throw new Exception('属性不存在或禁止操作');
        }
        $this->field[$name] = '';
    }
    public function __isset($name)
    {
        return isset($this->field[$name]);
    }
    public function __call($name, $arguments)
    {
        $action = 'getAttribute' . ucfirst($name);
        if (method_exists($this, $action)) {
            return call_user_func_array([$this, $action], $arguments);
        }
    }
    public static function __callStatic($name, $arguments)
    {
        switch ($name) {
            case 'getAll':
                return call_user_func_array([new static(), 'all'], $arguments);
                break;
            default:
                $obj = new static();
                $obj->all();
                return call_user_func([$obj, '__call'], $name, $arguments);
        }
    }
}
class User extends Model
{
    protected function getAttributeMobile(int $len = 9)
    {
        return substr($this->field['mobile'], 0, $len) . '***';
    }
}
try {
    echo User::mobile();
    // print_r(User::getAll());
    // $user = new User;
    // $res =  $user->all();
    // echo $user->mobile();
} catch (Exception $e) {
    echo $e->getMessage();
}
