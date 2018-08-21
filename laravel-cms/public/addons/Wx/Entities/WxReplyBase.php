<?php

namespace Modules\Wx\Entities;

use Illuminate\Database\Eloquent\Model;

class WxReplyBase extends Model
{
    protected $fillable = ['content'];
}
