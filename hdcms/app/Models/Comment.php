<?php

namespace App\Models;

use App\Observers\CommentObserver;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id'];

    protected static function boot()
    {
        Comment::observe(CommentObserver::class);
        parent::boot();
    }

    public function belongModel()
    {
        return $this->morphTo('comment');
    }

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
}
