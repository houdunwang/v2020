<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Wx\Entities\WxRule;

class News extends Model
{
    protected $fillable = ['data','rule_id'];
    public function rule(){
        return $this->belongsTo(WxRule::class,'rule_id');
    }
}
