<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function zan()
    {
        return $this->morphMany(Zan::class, 'zan');
    }

    public function isZan(User $user)
    {
        return $this->zan()->where('user_id', $user['id'])->first();
    }

    public function comment()
    {
        return $this->morphMany(Comment::class, 'comment');
    }

    //与收藏表的多态关联
    public function favorite()
    {
        return $this->morphMany(Favorite::class, 'favorite');
    }

    //用户是否收藏文章
    public function isFavorite(User $user)
    {
        return $this->favorite()->where('user_id', $user['id'])->first();
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink($param)
    {
        return route('edu.article.show', $this) . $param;
    }
}
