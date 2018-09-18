<?php

namespace App\Models;

use App\Observers\ConfigObserver;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['name', 'data'];

    protected $casts = ['data' => 'array'];

    protected static function boot()
    {
        parent::boot();
        Config::observe(ConfigObserver::class);
    }
}
