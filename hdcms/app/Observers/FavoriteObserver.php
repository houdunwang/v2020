<?php

namespace App\Observers;

use App\Models\Favorite;

class FavoriteObserver
{
    public function created(Favorite $favorite)
    {
        $favorite->belongModel()->increment('favorite_num');
    }

    public function deleted(Favorite $favorite)
    {
        $favorite->belongModel()->decrement('favorite_num');
    }
}
