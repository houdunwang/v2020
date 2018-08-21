<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/13
 * Time: 23:05
 */

namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use Modules\Article\Entities\Category;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(Category $category)
    {
        return [
            'id' => $category['id'],
            'title' => $category['name'],
        ];
    }
}