<?php

namespace AskNews;

/**
 * AskNewsSDK Class Doc Comment
 * PHP version 8.0
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AskNewsSDK
{
    protected Configuration $configuration;
    public Api\AnalyticsApi $analytics;
    public Api\AutofilterApi $autofilter;
    public Api\ChatApi $chat;
    public Api\ForecastApi $forecast;
    public Api\GraphApi $graph;
    public Api\NewsApi $news;
    public Api\PingApi $ping;
    public Api\ProfileApi $profile;
    public Api\RedditApi $reddit;
    public Api\StoriesApi $stories;
    public Api\WebsearchApi $websearch;

    /**
     * Constructor
     */
    public function __construct(Configuration|array|null $_configuration)
    {
        if (!($_configuration instanceof Configuration)) {
            $_configuration = new Configuration($_configuration);
        }
        $this->configuration = $_configuration;
        $this->analytics = new Api\AnalyticsApi(null, $_configuration);
        $this->autofilter = new Api\AutofilterApi(null, $_configuration);
        $this->chat = new Api\ChatApi(null, $_configuration);
        $this->forecast = new Api\ForecastApi(null, $_configuration);
        $this->graph = new Api\GraphApi(null, $_configuration);
        $this->news = new Api\NewsApi(null, $_configuration);
        $this->ping = new Api\PingApi(null, $_configuration);
        $this->profile = new Api\ProfileApi(null, $_configuration);
        $this->reddit = new Api\RedditApi(null, $_configuration);
        $this->stories = new Api\StoriesApi(null, $_configuration);
        $this->websearch = new Api\WebsearchApi(null, $_configuration);
    }
}
