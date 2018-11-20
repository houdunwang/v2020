<?php

namespace App\Models;

use App\Models\Traits\Common;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];
    use Common;

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink($param)
    {
        return route('edu.topic.show', $this) . $param;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
