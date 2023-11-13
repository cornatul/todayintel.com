<?php
declare(strict_types=1);

namespace Cornatul\Trends\Clients;

use Cornatul\News\Interfaces\TrendingInterface;
use Cornatul\Trends\Connectors\NineGagConnector;
use Cornatul\Trends\Connectors\RedditConnector;
use Cornatul\Trends\Connectors\TwitterTrendsConnector;
use Cornatul\Trends\Requests\NineGangRequest;
use Cornatul\Trends\Requests\RedditRequest;
use Cornatul\Trends\Requests\TwitterTrendsRequest;
use Exception;
use Illuminate\Support\Collection;
use ReflectionException;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Symfony\Component\DomCrawler\Crawler;

class TrendingClient implements TrendingInterface
{
    /**
     * @throws Exception
     */
    final public function getTrends(): Collection
    {

        return new Collection([
            'reddit' => $this->getRedditTrends(),
            'twitter' => $this->getTwitterTrends(),
            'ninegag' => $this->getNineGagTrends(),
        ]);
    }


    /**
     * @throws InvalidResponseClassException
     * @throws ReflectionException
     * @throws PendingRequestException
     * @throws Exception
     */
    private function getRedditTrends(): Collection
    {
        $connection = new RedditConnector();

        $response = $connection->send(
            new RedditRequest()
        );

        if($response->status() !== 200){
            throw new Exception('Reddit API returned a non 200 response');
        }

        $xmlBody = simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $jsonBody = json_encode($xmlBody);
        $array = json_decode($jsonBody,TRUE);
        $response = collect();
        foreach ($array['entry'] as $entry) {
            $response->push([
                'title' => $entry['title'],
                'content' => $entry['content'],
                'link' => $entry['link']['@attributes']['href'],
            ]);
        }

        return ($response);
    }

    private function getTwitterTrends(): Collection
    {
        $connector = new TwitterTrendsConnector();
        $request = $connector->send(new TwitterTrendsRequest());
        $content  = ($request->body());
        $crawler = new Crawler($content);
        $trends = $crawler->filter('.trend-card__list li a')
            ->each(function (Crawler $node) {
            return [
                 'title' => $node->text(),
                 'url' => $node->attr('href'),
                 'content' => $node->text(),
            ];
        });

        return collect($trends);
    }

    private function getNineGagTrends():Collection
    {
        //todo clean this more maybe find a way the logic for decoding to put it straight into the request or something
        $connector = new NineGagConnector();
        $request = $connector->send(new NineGangRequest());
        $content = json_decode($request->body());
        $htmlContent = $content->solution->response;
        $crawler = new Crawler($htmlContent);
        $jsonEncoded = $crawler->filter('body > pre');
        $finalContent = json_decode($jsonEncoded->innerText());
        return collect($finalContent->data->posts)
            ->map(function ($item) {
                return [
                    'title' => $item->title,
                    'content' => $item->title,
                    'link' => $item->url,
                ];
            });
    }
}
