<?php

declare(strict_types=1);

namespace Dub\Laravel\Tests;

use Dub\Laravel\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

abstract class PackageTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
