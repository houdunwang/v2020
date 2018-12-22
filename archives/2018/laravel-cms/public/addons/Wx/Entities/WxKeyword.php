<?php

namespace Modules\Wx\Entities;

use Illuminate\Database\Eloquent\Model;

class WxKeyword extends Model
{
    protected $fillable = ['key'];

    public function rule()
    {
        return $this->belongsTo(WxRule::class,'wx_rule_id');
    }
}
