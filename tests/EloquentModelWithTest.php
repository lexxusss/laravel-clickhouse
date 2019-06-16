<?php

declare(strict_types=1);

namespace Lexxusss\LaravelClickHouse\Tests;

use Mockery\MockInterface;
use Lexxusss\LaravelClickHouse\Database\Eloquent\Builder;

class EloquentModelWithTest extends EloquentModelTest
{
    use Helpers;

    /**
     * @return Builder|MockInterface
     */
    public function newQuery(): Builder
    {
        $builder = $this->mock(Builder::class);
        $builder->shouldReceive('with')
            ->once()
            ->with(['foo', 'bar'])
            ->andReturn('foo');

        return $builder;
    }
}
