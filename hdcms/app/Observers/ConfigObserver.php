<?php

namespace App\Observers;

use App\Models\Config;

class ConfigObserver
{
    public function created(Config $config)
    {
        $this->cahce();
    }

    public function saved(Config $config)
    {
        $this->cahce();
    }

    public function updated(Config $config)
    {
        $this->cahce();
    }

    protected function cahce()
    {
        \Cache::forever('hd_config', Config::pluck('data', 'name'));
    }
}
