<?php

namespace Modules\Wx\Entities;

use Illuminate\Database\Eloquent\Model;

class WxRule extends Model
{
    protected $fillable = [];

    public function keyword()
    {
        return $this->hasMany(WxKeyword::class);
    }
}
