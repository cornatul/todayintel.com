<?php

namespace Cornatul\Trends\Connectors;

use Saloon\Http\Connector;

class  NineGagConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'http://31.14.41.92:8191/';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'User-Agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
        ];
    }
}
