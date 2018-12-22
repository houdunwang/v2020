<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['title','url','pic','click','enable'];
}
