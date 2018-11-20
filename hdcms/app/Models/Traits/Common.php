<?php
/**
 * Created by PhpStorm.
 * User: hdxj
 * Date: 2018/9/20
 * Time: 1:15
 */

namespace App\Models\Traits;


use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Zan;
use App\User;

trait Common
{
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
}
