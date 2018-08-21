<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['title', 'author', 'content', 'thumb', 'click', 'category_id', 'istop'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
