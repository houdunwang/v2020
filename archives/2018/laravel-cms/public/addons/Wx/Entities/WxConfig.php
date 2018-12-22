<?php

namespace Modules\Wx\Entities;

use Illuminate\Database\Eloquent\Model;

class WxConfig extends Model
{
    protected $fillable = ['name','value'];
}
