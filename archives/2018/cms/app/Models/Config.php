<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['name', 'data'];
    //帮助我们自动将数据转为JSON储存，读取时自动转为数组
    protected $casts = ['data' => 'array'];
}
