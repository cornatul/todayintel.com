<?php
declare(strict_types=1);

namespace Cornatul\Trends;
use Illuminate\Support\ServiceProvider;

class TrendsServiceProvider extends ServiceProvider
{
    final public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'trends');
        $this->loadRoutesFrom(__DIR__ . '/../routes/trends.php');
    }

    final public function register(): void
    {

    }
}
