<?php

namespace Cornatul\Trends\Requests;

/**
 *
 * @author Stefan aka Cornatul <https://github.com/cornatul>
 * @package Cornatul\News
 * @license MIT
 * @link https://github.com/cornatul/news#
 * @since 1.0.0
 * @version 1.0.2
 * @copyright Copyright (c) 2020, Stefan Corn
 */

use Illuminate\Support\Facades\Cache;
use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Contracts\Driver;
use Saloon\CachePlugin\Drivers\LaravelCacheDriver;
use Saloon\CachePlugin\Traits\HasCaching;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class NineGangRequest extends Request implements Cacheable, HasBody
{

    use HasCaching;

    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return 'v1';
    }


    protected function defaultBody(): array
    {
        return [
            "cmd" => "request.get",
            "url" => "https://9gag.com/v1/group-posts/type/top",
            "maxTimeout" => 60000
        ];
    }


    public function resolveCacheDriver(): Driver
    {
        return new LaravelCacheDriver(Cache::store('file'));
    }

    public function cacheExpiryInSeconds(): int
    {
        return 3600; // One Hour
    }

    protected function getCacheableMethods(): array
    {
        return [Method::POST];
    }
}
