<?php

namespace App;

use App\Models\Attachment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable {
        notify as protected systemNotify;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'email_valid',
        'mobile_valid',
        'is_admin',
        'icon',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }

    public function getIconAttribute($value)
    {
        return empty($value) ? asset('org/Dashkit-1.1.2/img/files/file-3.jpg') : $value;
    }

    //获取我的粉丝
    public function fans()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
    }

    //获取我关注的人
    public function follower()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
    }

    //我是否关注了指定用户
    public function following(User $user)
    {
        return $this->follower->contains($user);
    }

    //用户是否是我的粉丝
    public function hasFans(User $user)
    {
        return $this->fans->contains($user);
    }

    public function notify($instance)
    {
        if ($this['id'] != auth()->id()) {
            return $this->systemNotify($instance);
        }
    }
}
