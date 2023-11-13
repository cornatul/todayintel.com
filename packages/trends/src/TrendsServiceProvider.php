<?php
declare(strict_types=1);

namespace Cornatul\Trends;
use Illuminate\Support\ServiceProvider;

class TrendsServiceProvider extends ServiceProvider
{
    public final function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'trends');
    }

    public final function register(): void
    {

    }
}
