<?php

declare(strict_types=1);

namespace Lexxusss\LaravelClickHouse;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\DatabaseManager;
use Lexxusss\LaravelClickHouse\Database\Connection;
use Lexxusss\LaravelClickHouse\Database\Eloquent\Model;

/**
 * Class ClickHouseServiceProvider
 * @package Lexxusss\LaravelClickHouse
 */
class ClickHouseServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /** @var DatabaseManager $db */
        $db = $this->app->get('db');

        $db->extend('clickhouse', function ($config, $name) {
            $config['name'] = $name;

            return new Connection($config);
        });

        Model::setConnectionResolver($db);
    }
}
