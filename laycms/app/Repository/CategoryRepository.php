<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/11/24
 * Time: 20:53
 */

namespace App\Repository;

use App\Models\Category;

class CategoryRepository extends Repository implements RepositoryInterface
{
    protected $name = Category::class;

    public function tree()
    {

    }
}
