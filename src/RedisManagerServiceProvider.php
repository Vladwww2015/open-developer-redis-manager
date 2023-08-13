<?php

namespace OpenDeveloper\Developer\RedisManager;

use Illuminate\Support\ServiceProvider;

class RedisManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'open-developer-redis-manager');

        RedisManager::boot();
    }
}
