<?php

declare(strict_types=1);

namespace Lexxusss\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use Lexxusss\LaravelClickHouse\Database\Connection;
use Lexxusss\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
