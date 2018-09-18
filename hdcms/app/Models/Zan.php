<?php

namespace App\Models;

use App\Observers\ZanObserver;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Zan extends Model
{
    protected $fillable = ['user_id'];

    protected static function boot()
    {
        self::observe(ZanObserver::class);
        parent::boot();
    }


    public function belongModel()
    {
        return $this->morphTo('zan');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
