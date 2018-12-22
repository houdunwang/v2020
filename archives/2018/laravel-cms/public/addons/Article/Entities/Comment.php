<?php

namespace Modules\Article\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'content', 'content_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
