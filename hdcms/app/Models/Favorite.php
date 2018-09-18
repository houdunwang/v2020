<?php

namespace App\Models;

use App\Observers\FavoriteObserver;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Favorite extends Model
{
    protected $fillable = ['user_id'];

    protected static function boot()
    {
        self::observe(FavoriteObserver::class);
        parent::boot();
    }

    public function belongModel()
    {
        return $this->morphTo('favorite');
    }
}
