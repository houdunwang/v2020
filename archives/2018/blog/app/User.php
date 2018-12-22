<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id');
    }

    //获取所有粉丝
    public function follower()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'follower');
    }

    //获取所有关注
    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'follower', 'user_id');
    }

    /**
     * 指写用户是为是粉丝
     * @param $uid
     * @return mixed
     */
    public function isFollow($uid)
    {
        return $this->follower()->wherePivot('follower', $uid)->first();
    }

    //关注或取关
    public function followToggle($ids)
    {
        $ids = is_array($ids) ?: [$ids];
        return $this->follower()->withTimestamps()->toggle($ids);
    }
}











