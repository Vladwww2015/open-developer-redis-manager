<?php

namespace OpenDeveloper\Developer\RedisManager;

use OpenDeveloper\Developer\Facades\Developer;

trait BootExtension
{
    public static function boot()
    {
        static::registerRoutes();

        Developer::extend('redis-manager', __CLASS__);
    }

    /**
     * Register routes for open-developer.
     *
     * @return void
     */
    protected static function registerRoutes()
    {
        parent::routes(function ($router) {
            /* @var \Illuminate\Routing\Router $router */
            $router->get('redis', 'OpenDeveloper\Developer\RedisManager\RedisController@index')->name('redis-index');
            $router->delete('redis/key', 'OpenDeveloper\Developer\RedisManager\RedisController@destroy')->name('redis-key-delete');
            $router->get('redis/fetch', 'OpenDeveloper\Developer\RedisManager\RedisController@fetch')->name('redis-fetch-key');
            $router->get('redis/create', 'OpenDeveloper\Developer\RedisManager\RedisController@create')->name('redis-create-key');
            $router->post('redis/store', 'OpenDeveloper\Developer\RedisManager\RedisController@store')->name('redis-store-key');
            $router->get('redis/edit', 'OpenDeveloper\Developer\RedisManager\RedisController@edit')->name('redis-edit-key');
            $router->post('redis/key', 'OpenDeveloper\Developer\RedisManager\RedisController@update')->name('redis-update-key');
            $router->delete('redis/item', 'OpenDeveloper\Developer\RedisManager\RedisController@remove')->name('redis-remove-item');

            $router->get('redis/console', 'OpenDeveloper\Developer\RedisManager\RedisController@console')->name('redis-console');
            $router->post('redis/console', 'OpenDeveloper\Developer\RedisManager\RedisController@execute')->name('redis-execute');
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function import()
    {
        parent::createMenu('Redis manager', 'redis', 'icon-database');

        parent::createPermission('Redis Manager', 'ext.redis-manager', 'redis*');
    }
}
