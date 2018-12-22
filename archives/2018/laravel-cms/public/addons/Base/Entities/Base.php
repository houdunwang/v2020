<?php

namespace Modules\Base\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Wx\Entities\WxRule;

class Base extends Model
{
    protected $fillable = ['content','rule_id'];
    public function rule(){
        return $this->belongsTo(WxRule::class,'rule_id');
    }
}
