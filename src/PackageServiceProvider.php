<?php

declare(strict_types=1);

namespace Dub\Laravel;

use Dub\Dub;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/services.php',
            'services',
        );
    }

    public function register(): void
    {
        $this->app->singleton(
            abstract: Dub::class,
            concrete: fn (): Dub => Dub::builder()->setSecurity(
                token: config('services.dub.api_token'),
            )->build(),
        );
    }
}
