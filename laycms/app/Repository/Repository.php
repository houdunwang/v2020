<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/11/24
 * Time: 20:53
 */

namespace App\Repository;

abstract class Repository
{
    //模型类
    protected $name;
    protected $model;

    public function __construct()
    {
        $this->model = app($this->name);
    }

    public function create(array $attributes)
    {
        $this->model->create($attributes);
    }

    public function update($model, array $attributes)
    {
        return $model->update($attributes);
    }

    public function all($attributes = ['*'])
    {
        return $this->model->get($attributes);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }
}
