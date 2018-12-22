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

    /**
     * @param $model
     * @param array $attributes
     * @return mixed
     */
    public function update($model, array $attributes)
    {
        return $model->update($attributes);
    }

    public function all($columns = ['*'])
    {
        return $this->model->get($columns);
    }

    public function find(int $id, array $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    public function paginate($row = 10, array $columns = ['*'])
    {
        return $this->model->paginate($row, $columns);
    }
}
