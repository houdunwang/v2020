<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/8/13
 * Time: 23:00
 */

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use Modules\Article\Entities\Content;

class ContentTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['category'];

    public function transform(Content $content)
    {
        return [
            'id' => $content['id'],
            'title' => $content['title'],
            'thumb' => $content['thumb'],
            'content' => $content['content'],
            'created_at' => $content->created_at->toDateTimeString(),
        ];
    }

    public function includeCategory(Content $content)
    {
        return $this->item($content->category, new CategoryTransformer());
    }
}