<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/11/24
 * Time: 20:51
 */

namespace App\Repository;

interface RepositoryInterface
{
    public function create(array $attributes);

    public function update($model, array $attributes);

    public function all($attributes = ['*']);

    public function find(int $id);
}
