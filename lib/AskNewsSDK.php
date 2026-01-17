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
    public Api\AlertsApi $alerts;
    public Api\AnalyticsApi $analytics;
    public Api\AutofilterApi $autofilter;
    public Api\ChartsApi $charts;
    public Api\ChatApi $chat;
    public Api\DistributionApi $distribution;
    public Api\ForecastApi $forecast;
    public Api\GraphApi $graph;
    public Api\IndexUrlsApi $indexUrls;
    public Api\NewsApi $news;
    public Api\NewslettersApi $newsletters;
    public Api\PingApi $ping;
    public Api\ProfileApi $profile;
    public Api\RedditApi $reddit;
    public Api\StoriesApi $stories;
    public Api\WebsearchApi $websearch;
    public Api\WikiApi $wiki;

    /**
     * Constructor
     */
    public function __construct(Configuration|array|null $_configuration)
    {
        if (!($_configuration instanceof Configuration)) {
            $_configuration = new Configuration($_configuration);
        }
        $this->configuration = $_configuration;
        $this->alerts = new Api\AlertsApi(null, $_configuration);
        $this->analytics = new Api\AnalyticsApi(null, $_configuration);
        $this->autofilter = new Api\AutofilterApi(null, $_configuration);
        $this->charts = new Api\ChartsApi(null, $_configuration);
        $this->chat = new Api\ChatApi(null, $_configuration);
        $this->distribution = new Api\DistributionApi(null, $_configuration);
        $this->forecast = new Api\ForecastApi(null, $_configuration);
        $this->graph = new Api\GraphApi(null, $_configuration);
        $this->indexUrls = new Api\IndexUrlsApi(null, $_configuration);
        $this->news = new Api\NewsApi(null, $_configuration);
        $this->newsletters = new Api\NewslettersApi(null, $_configuration);
        $this->ping = new Api\PingApi(null, $_configuration);
        $this->profile = new Api\ProfileApi(null, $_configuration);
        $this->reddit = new Api\RedditApi(null, $_configuration);
        $this->stories = new Api\StoriesApi(null, $_configuration);
        $this->websearch = new Api\WebsearchApi(null, $_configuration);
        $this->wiki = new Api\WikiApi(null, $_configuration);
    }
}
