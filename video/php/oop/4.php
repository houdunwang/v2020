<?php
interface InterFaceCache
{
    public function set($name, $value);
    public function get($name);
}

class Mysql implements InterFaceCache
{
    public function set($name, $value)
    { }
    public function get($name)
    { }
}

class Redis implements InterFaceCache
{
    public function set($name, $value)
    { }
    public function get($name)
    { }
}

class Cache
{
    public static function instance(string $driver)
    {
        switch (strtolower($driver)) {
            case 'mysql':
                return new Mysql;
            case 'redis':
                return new Redis;
        }
    }
}
$cahce  = Cache::instance('redis');
var_dump($cahce->get('name'));
