<?php
declare(strict_types=1);
namespace Cornatul\Trends\Interfaces;

use Illuminate\Support\Collection;

/**
 * @todo Remove this implementation
 */
interface TrendingInterface
{
    public function getTrends(): Collection;

}
