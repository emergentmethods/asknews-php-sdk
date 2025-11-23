# asknews-php-sdk

AskNews API


## Installation & Usage

### Requirements

PHP 8.0 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/emergentmethods/asknews-php-sdk.git"
    }
  ],
  "require": {
    "emergentmethods/asknews-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/asknews-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');





// Configure sdk credentials
$config = new AskNews\Configuration([
  'clientId' => 'YOUR_ASKNEWS_CLIENT_ID',
  'clientSecret' => 'YOUR_ASKNEWS_CLIENT_SECRET',
  'scopes' => ['news', 'chat', 'stories', 'analytics']
]);


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_alert_request = new \AskNews\Model\CreateAlertRequest(); // \AskNews\Model\CreateAlertRequest

try {
    $result = $apiInstance->createAlert($create_alert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlert: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.asknews.app*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AlertsApi* | [**createAlert**](docs/Api/AlertsApi.md#createalert) | **POST** /v1/chat/alerts | Create an alert
*AlertsApi* | [**deleteAlert**](docs/Api/AlertsApi.md#deletealert) | **DELETE** /v1/chat/alerts/{alert_id} | Delete an alert
*AlertsApi* | [**getAlert**](docs/Api/AlertsApi.md#getalert) | **GET** /v1/chat/alerts/{alert_id} | Get an alert
*AlertsApi* | [**getAlertLogs**](docs/Api/AlertsApi.md#getalertlogs) | **GET** /v1/chat/alerts/{alert_id}/logs | Get alert logs
*AlertsApi* | [**getAlerts**](docs/Api/AlertsApi.md#getalerts) | **GET** /v1/chat/alerts | Get all created alerts
*AlertsApi* | [**getAllAlertLogs**](docs/Api/AlertsApi.md#getallalertlogs) | **GET** /v1/chat/alerts/logs | Get all alert logs
*AlertsApi* | [**putAlert**](docs/Api/AlertsApi.md#putalert) | **PUT** /v1/chat/alerts/{alert_id} | Update an alert
*AlertsApi* | [**runAlert**](docs/Api/AlertsApi.md#runalert) | **GET** /v1/chat/alerts/{alert_id}/run | Run an existing alert
*AnalyticsApi* | [**getAssetSentiment**](docs/Api/AnalyticsApi.md#getassetsentiment) | **GET** /v1/analytics/finance/sentiment | Get a timeseries of finance news sentiment for assets
*AutofilterApi* | [**autofilter**](docs/Api/AutofilterApi.md#autofilter) | **GET** /v1/chat/autofilter | Generate filter params for AskNews endpoints
*ChartsApi* | [**createChartsEndpoint**](docs/Api/ChartsApi.md#createchartsendpoint) | **POST** /v1/chat/charts | Create a chart
*ChatApi* | [**deepNews**](docs/Api/ChatApi.md#deepnews) | **POST** /v1/chat/deepnews | Deep research into real-time news, archive news, and Google.
*ChatApi* | [**getChatCompletions**](docs/Api/ChatApi.md#getchatcompletions) | **POST** /v1/openai/chat/completions | Get chat completions from a news-infused AI assistant
*ChatApi* | [**getHeadlineQuestions**](docs/Api/ChatApi.md#getheadlinequestions) | **GET** /v1/chat/questions | Get example headline questions
*ChatApi* | [**listChatModels**](docs/Api/ChatApi.md#listchatmodels) | **GET** /v1/openai/models | List available chat models
*DistributionApi* | [**domainHitShare**](docs/Api/DistributionApi.md#domainhitshare) | **GET** /v1/distribution/stats/hit_share | Get the hit share for a list of domains in a time period
*DistributionApi* | [**findDomains**](docs/Api/DistributionApi.md#finddomains) | **GET** /v1/distribution/domains | Find domains
*DistributionApi* | [**getArticleHits**](docs/Api/DistributionApi.md#getarticlehits) | **GET** /v1/distribution/stats/count | Get article hits
*DistributionApi* | [**getDomain**](docs/Api/DistributionApi.md#getdomain) | **GET** /v1/distribution/domains/{name} | Get a domain by name
*DistributionApi* | [**getDomainQueries**](docs/Api/DistributionApi.md#getdomainqueries) | **GET** /v1/distribution/articles/domain_queries | Get queries that surfaced domain articles
*DistributionApi* | [**topNArticlesByHits**](docs/Api/DistributionApi.md#topnarticlesbyhits) | **GET** /v1/distribution/articles/top_n | Get the top N articles by hits
*DistributionApi* | [**topNArticlesForDomain**](docs/Api/DistributionApi.md#topnarticlesfordomain) | **GET** /v1/distribution/articles/top_n_for_domain | Get the top N articles by hits for domain
*DistributionApi* | [**topNDomainsByHits**](docs/Api/DistributionApi.md#topndomainsbyhits) | **GET** /v1/distribution/domains/top_n | Get the top N domains by hits
*DistributionApi* | [**updateDomain**](docs/Api/DistributionApi.md#updatedomain) | **PUT** /v1/distribution/domains/{name} | Update an existing domain
*ForecastApi* | [**getForecast**](docs/Api/ForecastApi.md#getforecast) | **GET** /v1/chat/forecast | Make an expert forecast for a news event.
*GraphApi* | [**buildGraph**](docs/Api/GraphApi.md#buildgraph) | **POST** /v1/news/graph | Build a custom mega-news-knowledge graph
*NewsApi* | [**getArticle**](docs/Api/NewsApi.md#getarticle) | **GET** /v1/news/{article_id} | Get an article by its UUID
*NewsApi* | [**getArticles**](docs/Api/NewsApi.md#getarticles) | **GET** /v1/news | Get multiple articles by UUID
*NewsApi* | [**getIndexCounts**](docs/Api/NewsApi.md#getindexcounts) | **GET** /v1/index_counts | Get the index counts underlying AskNews
*NewsApi* | [**getSourcesReport**](docs/Api/NewsApi.md#getsourcesreport) | **GET** /v1/sources | Get the sources underlying AskNews
*NewsApi* | [**searchNews**](docs/Api/NewsApi.md#searchnews) | **GET** /v1/news/search | Search for enriched real-time news context
*NewslettersApi* | [**deleteNewsletter**](docs/Api/NewslettersApi.md#deletenewsletter) | **DELETE** /v1/chat/newsletters/{newsletter_id} | Delete a newsletter
*NewslettersApi* | [**deleteNewsletterContact**](docs/Api/NewslettersApi.md#deletenewslettercontact) | **DELETE** /v1/chat/newsletters/{newsletter_id}/contacts/{contact_id} | Delete a newsletter contact
*NewslettersApi* | [**getNewsletter**](docs/Api/NewslettersApi.md#getnewsletter) | **GET** /v1/chat/newsletters/{newsletter_id} | Get a newsletter
*NewslettersApi* | [**getNewsletterContact**](docs/Api/NewslettersApi.md#getnewslettercontact) | **GET** /v1/chat/newsletters/{newsletter_id}/contacts/{contact_id} | Get a newsletter contact
*NewslettersApi* | [**getNewsletterContacts**](docs/Api/NewslettersApi.md#getnewslettercontacts) | **GET** /v1/chat/newsletters/{newsletter_id}/contacts | Get newsletter contacts
*NewslettersApi* | [**getNewsletters**](docs/Api/NewslettersApi.md#getnewsletters) | **GET** /v1/chat/newsletters | Get all created newsletters
*NewslettersApi* | [**getPublicNewsletters**](docs/Api/NewslettersApi.md#getpublicnewsletters) | **GET** /v1/chat/newsletters/public | Get all public newsletters
*NewslettersApi* | [**patchNewsletterContact**](docs/Api/NewslettersApi.md#patchnewslettercontact) | **PATCH** /v1/chat/newsletters/{newsletter_id}/contacts/{contact_id} | Update a newsletter contact
*NewslettersApi* | [**postNewsletter**](docs/Api/NewslettersApi.md#postnewsletter) | **POST** /v1/chat/newsletters | Create a newsletter
*NewslettersApi* | [**postNewsletterContacts**](docs/Api/NewslettersApi.md#postnewslettercontacts) | **POST** /v1/chat/newsletters/{newsletter_id}/contacts | Create a newsletter contact
*NewslettersApi* | [**putNewsletter**](docs/Api/NewslettersApi.md#putnewsletter) | **PUT** /v1/chat/newsletters/{newsletter_id} | Update a newsletter
*NewslettersApi* | [**unsubscribeNewsletter**](docs/Api/NewslettersApi.md#unsubscribenewsletter) | **POST** /v1/chat/newsletters/{newsletter_id}/unsubscribe | Unsubscribe from a newsletter
*PingApi* | [**ping**](docs/Api/PingApi.md#ping) | **GET** / | Ping
*ProfileApi* | [**getUserProfile**](docs/Api/ProfileApi.md#getuserprofile) | **GET** /v1/profiles/me | Get the current user&#39;s profile
*RedditApi* | [**searchReddit**](docs/Api/RedditApi.md#searchreddit) | **GET** /v1/reddit/search | Search Reddit, summarize threads, and return analysis.
*StoriesApi* | [**getStories**](docs/Api/StoriesApi.md#getstories) | **GET** /v1/stories | Filter and search for top news narratives
*StoriesApi* | [**getStory**](docs/Api/StoriesApi.md#getstory) | **GET** /v1/stories/{story_id} | Get a story containing updates
*WebsearchApi* | [**liveWebSearch**](docs/Api/WebsearchApi.md#livewebsearch) | **GET** /v1/chat/websearch | Run a live websearch.
*WikiApi* | [**searchWiki**](docs/Api/WikiApi.md#searchwiki) | **GET** /v1/wiki/search | Search for Wikipedia context with natural language

## Models

- [AbcAPIErrorModel1](docs/Model/AbcAPIErrorModel1.md)
- [AbcAPIErrorModel10](docs/Model/AbcAPIErrorModel10.md)
- [AbcAPIErrorModel11](docs/Model/AbcAPIErrorModel11.md)
- [AbcAPIErrorModel12](docs/Model/AbcAPIErrorModel12.md)
- [AbcAPIErrorModel13](docs/Model/AbcAPIErrorModel13.md)
- [AbcAPIErrorModel14](docs/Model/AbcAPIErrorModel14.md)
- [AbcAPIErrorModel15](docs/Model/AbcAPIErrorModel15.md)
- [AbcAPIErrorModel16](docs/Model/AbcAPIErrorModel16.md)
- [AbcAPIErrorModel17](docs/Model/AbcAPIErrorModel17.md)
- [AbcAPIErrorModel18](docs/Model/AbcAPIErrorModel18.md)
- [AbcAPIErrorModel19](docs/Model/AbcAPIErrorModel19.md)
- [AbcAPIErrorModel2](docs/Model/AbcAPIErrorModel2.md)
- [AbcAPIErrorModel20](docs/Model/AbcAPIErrorModel20.md)
- [AbcAPIErrorModel21](docs/Model/AbcAPIErrorModel21.md)
- [AbcAPIErrorModel22](docs/Model/AbcAPIErrorModel22.md)
- [AbcAPIErrorModel23](docs/Model/AbcAPIErrorModel23.md)
- [AbcAPIErrorModel24](docs/Model/AbcAPIErrorModel24.md)
- [AbcAPIErrorModel25](docs/Model/AbcAPIErrorModel25.md)
- [AbcAPIErrorModel26](docs/Model/AbcAPIErrorModel26.md)
- [AbcAPIErrorModel27](docs/Model/AbcAPIErrorModel27.md)
- [AbcAPIErrorModel28](docs/Model/AbcAPIErrorModel28.md)
- [AbcAPIErrorModel29](docs/Model/AbcAPIErrorModel29.md)
- [AbcAPIErrorModel3](docs/Model/AbcAPIErrorModel3.md)
- [AbcAPIErrorModel30](docs/Model/AbcAPIErrorModel30.md)
- [AbcAPIErrorModel31](docs/Model/AbcAPIErrorModel31.md)
- [AbcAPIErrorModel32](docs/Model/AbcAPIErrorModel32.md)
- [AbcAPIErrorModel33](docs/Model/AbcAPIErrorModel33.md)
- [AbcAPIErrorModel34](docs/Model/AbcAPIErrorModel34.md)
- [AbcAPIErrorModel35](docs/Model/AbcAPIErrorModel35.md)
- [AbcAPIErrorModel36](docs/Model/AbcAPIErrorModel36.md)
- [AbcAPIErrorModel37](docs/Model/AbcAPIErrorModel37.md)
- [AbcAPIErrorModel38](docs/Model/AbcAPIErrorModel38.md)
- [AbcAPIErrorModel39](docs/Model/AbcAPIErrorModel39.md)
- [AbcAPIErrorModel4](docs/Model/AbcAPIErrorModel4.md)
- [AbcAPIErrorModel40](docs/Model/AbcAPIErrorModel40.md)
- [AbcAPIErrorModel41](docs/Model/AbcAPIErrorModel41.md)
- [AbcAPIErrorModel42](docs/Model/AbcAPIErrorModel42.md)
- [AbcAPIErrorModel43](docs/Model/AbcAPIErrorModel43.md)
- [AbcAPIErrorModel44](docs/Model/AbcAPIErrorModel44.md)
- [AbcAPIErrorModel45](docs/Model/AbcAPIErrorModel45.md)
- [AbcAPIErrorModel46](docs/Model/AbcAPIErrorModel46.md)
- [AbcAPIErrorModel47](docs/Model/AbcAPIErrorModel47.md)
- [AbcAPIErrorModel48](docs/Model/AbcAPIErrorModel48.md)
- [AbcAPIErrorModel49](docs/Model/AbcAPIErrorModel49.md)
- [AbcAPIErrorModel5](docs/Model/AbcAPIErrorModel5.md)
- [AbcAPIErrorModel50](docs/Model/AbcAPIErrorModel50.md)
- [AbcAPIErrorModel51](docs/Model/AbcAPIErrorModel51.md)
- [AbcAPIErrorModel52](docs/Model/AbcAPIErrorModel52.md)
- [AbcAPIErrorModel53](docs/Model/AbcAPIErrorModel53.md)
- [AbcAPIErrorModel54](docs/Model/AbcAPIErrorModel54.md)
- [AbcAPIErrorModel55](docs/Model/AbcAPIErrorModel55.md)
- [AbcAPIErrorModel56](docs/Model/AbcAPIErrorModel56.md)
- [AbcAPIErrorModel57](docs/Model/AbcAPIErrorModel57.md)
- [AbcAPIErrorModel58](docs/Model/AbcAPIErrorModel58.md)
- [AbcAPIErrorModel59](docs/Model/AbcAPIErrorModel59.md)
- [AbcAPIErrorModel6](docs/Model/AbcAPIErrorModel6.md)
- [AbcAPIErrorModel60](docs/Model/AbcAPIErrorModel60.md)
- [AbcAPIErrorModel61](docs/Model/AbcAPIErrorModel61.md)
- [AbcAPIErrorModel62](docs/Model/AbcAPIErrorModel62.md)
- [AbcAPIErrorModel63](docs/Model/AbcAPIErrorModel63.md)
- [AbcAPIErrorModel64](docs/Model/AbcAPIErrorModel64.md)
- [AbcAPIErrorModel65](docs/Model/AbcAPIErrorModel65.md)
- [AbcAPIErrorModel66](docs/Model/AbcAPIErrorModel66.md)
- [AbcAPIErrorModel67](docs/Model/AbcAPIErrorModel67.md)
- [AbcAPIErrorModel68](docs/Model/AbcAPIErrorModel68.md)
- [AbcAPIErrorModel69](docs/Model/AbcAPIErrorModel69.md)
- [AbcAPIErrorModel7](docs/Model/AbcAPIErrorModel7.md)
- [AbcAPIErrorModel70](docs/Model/AbcAPIErrorModel70.md)
- [AbcAPIErrorModel71](docs/Model/AbcAPIErrorModel71.md)
- [AbcAPIErrorModel72](docs/Model/AbcAPIErrorModel72.md)
- [AbcAPIErrorModel73](docs/Model/AbcAPIErrorModel73.md)
- [AbcAPIErrorModel74](docs/Model/AbcAPIErrorModel74.md)
- [AbcAPIErrorModel75](docs/Model/AbcAPIErrorModel75.md)
- [AbcAPIErrorModel76](docs/Model/AbcAPIErrorModel76.md)
- [AbcAPIErrorModel77](docs/Model/AbcAPIErrorModel77.md)
- [AbcAPIErrorModel78](docs/Model/AbcAPIErrorModel78.md)
- [AbcAPIErrorModel79](docs/Model/AbcAPIErrorModel79.md)
- [AbcAPIErrorModel8](docs/Model/AbcAPIErrorModel8.md)
- [AbcAPIErrorModel80](docs/Model/AbcAPIErrorModel80.md)
- [AbcAPIErrorModel81](docs/Model/AbcAPIErrorModel81.md)
- [AbcAPIErrorModel82](docs/Model/AbcAPIErrorModel82.md)
- [AbcAPIErrorModel83](docs/Model/AbcAPIErrorModel83.md)
- [AbcAPIErrorModel84](docs/Model/AbcAPIErrorModel84.md)
- [AbcAPIErrorModel85](docs/Model/AbcAPIErrorModel85.md)
- [AbcAPIErrorModel86](docs/Model/AbcAPIErrorModel86.md)
- [AbcAPIErrorModel87](docs/Model/AbcAPIErrorModel87.md)
- [AbcAPIErrorModel88](docs/Model/AbcAPIErrorModel88.md)
- [AbcAPIErrorModel89](docs/Model/AbcAPIErrorModel89.md)
- [AbcAPIErrorModel9](docs/Model/AbcAPIErrorModel9.md)
- [AbcAPIErrorModel90](docs/Model/AbcAPIErrorModel90.md)
- [AbcAPIErrorModel91](docs/Model/AbcAPIErrorModel91.md)
- [AbcAPIErrorModel92](docs/Model/AbcAPIErrorModel92.md)
- [AlertLog](docs/Model/AlertLog.md)
- [AlertResponse](docs/Model/AlertResponse.md)
- [Article](docs/Model/Article.md)
- [AskNewsSource](docs/Model/AskNewsSource.md)
- [AsknewsApiErrorsAPIErrorModel](docs/Model/AsknewsApiErrorsAPIErrorModel.md)
- [AsknewsApiSchemaV1CommonGraphRelationships](docs/Model/AsknewsApiSchemaV1CommonGraphRelationships.md)
- [AsknewsApiSchemaV1StoriesGraphRelationships](docs/Model/AsknewsApiSchemaV1StoriesGraphRelationships.md)
- [Assets](docs/Model/Assets.md)
- [Assets1](docs/Model/Assets1.md)
- [Author](docs/Model/Author.md)
- [Author1](docs/Model/Author1.md)
- [BadDomainUrl](docs/Model/BadDomainUrl.md)
- [BadDomainUrl1](docs/Model/BadDomainUrl1.md)
- [BadDomainUrl2](docs/Model/BadDomainUrl2.md)
- [BlueskySource](docs/Model/BlueskySource.md)
- [BlueskySourceParams](docs/Model/BlueskySourceParams.md)
- [BodyBuildGraph](docs/Model/BodyBuildGraph.md)
- [ChartParameters](docs/Model/ChartParameters.md)
- [ChartResponse](docs/Model/ChartResponse.md)
- [Choice](docs/Model/Choice.md)
- [CirrusMetadata](docs/Model/CirrusMetadata.md)
- [Classification](docs/Model/Classification.md)
- [ClusterProbabilitiesValue](docs/Model/ClusterProbabilitiesValue.md)
- [Continent](docs/Model/Continent.md)
- [CountResponse](docs/Model/CountResponse.md)
- [CreateAlertRequest](docs/Model/CreateAlertRequest.md)
- [CreateChartRequest](docs/Model/CreateChartRequest.md)
- [CreateChatCompletionRequest](docs/Model/CreateChatCompletionRequest.md)
- [CreateChatCompletionRequestMessage](docs/Model/CreateChatCompletionRequestMessage.md)
- [CreateChatCompletionRequestMessage1](docs/Model/CreateChatCompletionRequestMessage1.md)
- [CreateChatCompletionResponse](docs/Model/CreateChatCompletionResponse.md)
- [CreateChatCompletionResponse1](docs/Model/CreateChatCompletionResponse1.md)
- [CreateChatCompletionResponseChoice](docs/Model/CreateChatCompletionResponseChoice.md)
- [CreateChatCompletionResponseChoice1](docs/Model/CreateChatCompletionResponseChoice1.md)
- [CreateChatCompletionResponseStream](docs/Model/CreateChatCompletionResponseStream.md)
- [CreateChatCompletionResponseStream1](docs/Model/CreateChatCompletionResponseStream1.md)
- [CreateChatCompletionResponseStreamChoice](docs/Model/CreateChatCompletionResponseStreamChoice.md)
- [CreateChatCompletionResponseStreamChoice1](docs/Model/CreateChatCompletionResponseStreamChoice1.md)
- [CreateChatCompletionResponseUsage](docs/Model/CreateChatCompletionResponseUsage.md)
- [CreateChatCompletionResponseUsage1](docs/Model/CreateChatCompletionResponseUsage1.md)
- [CreateDeepNewsRequest](docs/Model/CreateDeepNewsRequest.md)
- [CreateDeepNewsRequestMessage](docs/Model/CreateDeepNewsRequestMessage.md)
- [CreateDeepNewsRequestMessage1](docs/Model/CreateDeepNewsRequestMessage1.md)
- [CreateDeepNewsResponse](docs/Model/CreateDeepNewsResponse.md)
- [CreateDeepNewsResponse1](docs/Model/CreateDeepNewsResponse1.md)
- [CreateDeepNewsResponseChoice](docs/Model/CreateDeepNewsResponseChoice.md)
- [CreateDeepNewsResponseChoice1](docs/Model/CreateDeepNewsResponseChoice1.md)
- [CreateDeepNewsResponseStreamChunk](docs/Model/CreateDeepNewsResponseStreamChunk.md)
- [CreateDeepNewsResponseStreamChunk1](docs/Model/CreateDeepNewsResponseStreamChunk1.md)
- [CreateDeepNewsResponseStreamChunkChoice](docs/Model/CreateDeepNewsResponseStreamChunkChoice.md)
- [CreateDeepNewsResponseStreamChunkChoice1](docs/Model/CreateDeepNewsResponseStreamChunkChoice1.md)
- [CreateDeepNewsResponseStreamSource](docs/Model/CreateDeepNewsResponseStreamSource.md)
- [CreateDeepNewsResponseStreamSourcesChartSource](docs/Model/CreateDeepNewsResponseStreamSourcesChartSource.md)
- [CreateDeepNewsResponseStreamSourcesGraphSource](docs/Model/CreateDeepNewsResponseStreamSourcesGraphSource.md)
- [CreateDeepNewsResponseStreamSourcesNewsSource](docs/Model/CreateDeepNewsResponseStreamSourcesNewsSource.md)
- [CreateDeepNewsResponseStreamSourcesWebSource](docs/Model/CreateDeepNewsResponseStreamSourcesWebSource.md)
- [CreateDeepNewsResponseUsage](docs/Model/CreateDeepNewsResponseUsage.md)
- [CreateDeepNewsResponseUsage1](docs/Model/CreateDeepNewsResponseUsage1.md)
- [CreateNewsletterRequest](docs/Model/CreateNewsletterRequest.md)
- [DeepNewsResponseSources](docs/Model/DeepNewsResponseSources.md)
- [DeepNewsResponseSources1](docs/Model/DeepNewsResponseSources1.md)
- [DisplayImageUrl](docs/Model/DisplayImageUrl.md)
- [DomainQueriesResponse](docs/Model/DomainQueriesResponse.md)
- [DomainQueryArticleItem](docs/Model/DomainQueryArticleItem.md)
- [DomainQueryClusterItem](docs/Model/DomainQueryClusterItem.md)
- [DomainQueryItem](docs/Model/DomainQueryItem.md)
- [DomainUrl](docs/Model/DomainUrl.md)
- [DomainUrl1](docs/Model/DomainUrl1.md)
- [EmailAction](docs/Model/EmailAction.md)
- [EmailParams](docs/Model/EmailParams.md)
- [Entities](docs/Model/Entities.md)
- [Entities1](docs/Model/Entities1.md)
- [FilterParams](docs/Model/FilterParams.md)
- [FilterParams1](docs/Model/FilterParams1.md)
- [FilterParamsMetadata](docs/Model/FilterParamsMetadata.md)
- [FilterParamsResponse](docs/Model/FilterParamsResponse.md)
- [FinanceResponse](docs/Model/FinanceResponse.md)
- [FinanceResponseTimeSeries](docs/Model/FinanceResponseTimeSeries.md)
- [FinanceResponseTimeSeriesData](docs/Model/FinanceResponseTimeSeriesData.md)
- [ForecastResponse](docs/Model/ForecastResponse.md)
- [GeoCoordinate](docs/Model/GeoCoordinate.md)
- [GeoCoordinate1](docs/Model/GeoCoordinate1.md)
- [GoogleDocsAction](docs/Model/GoogleDocsAction.md)
- [GoogleDocsParams](docs/Model/GoogleDocsParams.md)
- [GraphRelationships](docs/Model/GraphRelationships.md)
- [GraphResponse](docs/Model/GraphResponse.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [HitShareItem](docs/Model/HitShareItem.md)
- [HitShareResponse](docs/Model/HitShareResponse.md)
- [IndexCountItem](docs/Model/IndexCountItem.md)
- [IntraClusterStatistics](docs/Model/IntraClusterStatistics.md)
- [KeyPerson](docs/Model/KeyPerson.md)
- [ListModelResponse](docs/Model/ListModelResponse.md)
- [ModelItem](docs/Model/ModelItem.md)
- [NewsletterContactCreateResponse](docs/Model/NewsletterContactCreateResponse.md)
- [NewsletterContactRequest](docs/Model/NewsletterContactRequest.md)
- [NewsletterContactResponse](docs/Model/NewsletterContactResponse.md)
- [NewsletterContactUpdateResponse](docs/Model/NewsletterContactUpdateResponse.md)
- [NewsletterPublicResponse](docs/Model/NewsletterPublicResponse.md)
- [NewsletterResponse](docs/Model/NewsletterResponse.md)
- [Offset](docs/Model/Offset.md)
- [Offset1](docs/Model/Offset1.md)
- [Offset2](docs/Model/Offset2.md)
- [Offset3](docs/Model/Offset3.md)
- [Offset4](docs/Model/Offset4.md)
- [OrganizationProfile](docs/Model/OrganizationProfile.md)
- [OrganizationProfileSubscription](docs/Model/OrganizationProfileSubscription.md)
- [PaginatedResponseAlertLog](docs/Model/PaginatedResponseAlertLog.md)
- [PaginatedResponseAlertResponse](docs/Model/PaginatedResponseAlertResponse.md)
- [PaginatedResponseNewsletterPublicResponse](docs/Model/PaginatedResponseNewsletterPublicResponse.md)
- [PaginatedResponseNewsletterResponse](docs/Model/PaginatedResponseNewsletterResponse.md)
- [PaginatedResponseReadDomainResponse](docs/Model/PaginatedResponseReadDomainResponse.md)
- [PingModel](docs/Model/PingModel.md)
- [Profile](docs/Model/Profile.md)
- [ProfileResponse](docs/Model/ProfileResponse.md)
- [ReadDomainResponse](docs/Model/ReadDomainResponse.md)
- [RedditComment](docs/Model/RedditComment.md)
- [RedditEntities](docs/Model/RedditEntities.md)
- [RedditPerspective](docs/Model/RedditPerspective.md)
- [RedditResponse](docs/Model/RedditResponse.md)
- [RedditThread](docs/Model/RedditThread.md)
- [ReplyTo](docs/Model/ReplyTo.md)
- [ReportRequest](docs/Model/ReportRequest.md)
- [ReportingVoice](docs/Model/ReportingVoice.md)
- [ReportingVoice1](docs/Model/ReportingVoice1.md)
- [ReportingVoice2](docs/Model/ReportingVoice2.md)
- [ResendBroadcastAction](docs/Model/ResendBroadcastAction.md)
- [ResendBroadcastParams](docs/Model/ResendBroadcastParams.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [SearchResponseDictItem](docs/Model/SearchResponseDictItem.md)
- [SearchResponseDictItem1](docs/Model/SearchResponseDictItem1.md)
- [Sentiment](docs/Model/Sentiment.md)
- [SeriesConfig](docs/Model/SeriesConfig.md)
- [Source](docs/Model/Source.md)
- [SourceReportItem](docs/Model/SourceReportItem.md)
- [Sources1](docs/Model/Sources1.md)
- [SourcesInner](docs/Model/SourcesInner.md)
- [Stop](docs/Model/Stop.md)
- [StoriesResponse](docs/Model/StoriesResponse.md)
- [StoryResponse](docs/Model/StoryResponse.md)
- [StoryUpdate](docs/Model/StoryUpdate.md)
- [StoryUpdateDisplayImageUrlsInner](docs/Model/StoryUpdateDisplayImageUrlsInner.md)
- [TelegramSource](docs/Model/TelegramSource.md)
- [TelegramSourceParams](docs/Model/TelegramSourceParams.md)
- [ThreadId](docs/Model/ThreadId.md)
- [ThreadId1](docs/Model/ThreadId1.md)
- [TopNArticlesByHitsItem](docs/Model/TopNArticlesByHitsItem.md)
- [TopNArticlesByHitsResponse](docs/Model/TopNArticlesByHitsResponse.md)
- [TopNArticlesForDomainItem](docs/Model/TopNArticlesForDomainItem.md)
- [TopNArticlesForDomainResponse](docs/Model/TopNArticlesForDomainResponse.md)
- [TopNDomainsByHitsItem](docs/Model/TopNDomainsByHitsItem.md)
- [TopNDomainsByHitsResponse](docs/Model/TopNDomainsByHitsResponse.md)
- [TriggersInner](docs/Model/TriggersInner.md)
- [UpdateAlertRequest](docs/Model/UpdateAlertRequest.md)
- [UpdateDomainRequest](docs/Model/UpdateDomainRequest.md)
- [UpdateNewsletterRequest](docs/Model/UpdateNewsletterRequest.md)
- [User](docs/Model/User.md)
- [UserProfile](docs/Model/UserProfile.md)
- [UserProfileOrganization](docs/Model/UserProfileOrganization.md)
- [UserProfileSubscription](docs/Model/UserProfileSubscription.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorItem](docs/Model/ValidationErrorItem.md)
- [ValidationErrorLocInner](docs/Model/ValidationErrorLocInner.md)
- [ValidationErrorModel](docs/Model/ValidationErrorModel.md)
- [Value](docs/Model/Value.md)
- [WebSearchResponse](docs/Model/WebSearchResponse.md)
- [WebSearchResult](docs/Model/WebSearchResult.md)
- [WebSearchResult1](docs/Model/WebSearchResult1.md)
- [WebSource](docs/Model/WebSource.md)
- [WebSourceParams](docs/Model/WebSourceParams.md)
- [WebhookAction](docs/Model/WebhookAction.md)
- [WebhookParams](docs/Model/WebhookParams.md)
- [WikiResponseDictItem](docs/Model/WikiResponseDictItem.md)
- [WikiSearchResponse](docs/Model/WikiSearchResponse.md)

## Authorization








Find full details at the [AskNews API documentation](https://docs.asknews.app).

## Support

Join our [Discord](https://discord.gg/2Yw66XXEhY) to see what other people are building, and to get support with your projects.
