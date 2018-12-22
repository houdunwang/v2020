<?php

namespace App\Repository;

use App\Models\Category;
use Houdunwang\Arr\Arr;

class CategoryRepository extends Repository implements RepositoryInterface
{
    protected $name = Category::class;

    /**
     * 获取无限级分类结构数据
     * @return \Houdunwang\Arr\Collection
     */
    public function tree(Category $category = null)
    {
        $categories = $this->model->get();
        $arr = new Arr();
        $data = $arr->category($categories, 0, 'name', 'id', 'parent_id');
        foreach ($data as $key => $cat) {
            $data[$key]['_select'] = $category && $cat['id'] == $category['parent_id'] ? 'selected' : '';
            $data[$key]['_disabled'] = $category &&
            ($cat['id'] == $category['id'] || $arr->isChild($data, $cat['id'], $category['id'],'id', 'parent_id')) ? 'disabled' : '';
        }
        return $data;
    }
}
