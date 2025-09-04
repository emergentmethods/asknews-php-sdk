# AskNews\GraphApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buildGraph()**](GraphApi.md#buildGraph) | **POST** /v1/news/graph | Build a custom mega-news-knowledge graph |


## `buildGraph()`

```php
buildGraph($body_build_graph): \AskNews\Model\GraphResponse
```

Build a custom mega-news-knowledge graph

Explore our mega-news-knowledge-graph at which ever level of resolution you need.  Fully disambiguated and ready to be used in any downstream application.  Pass a natural language query to get a graph of the latest news. Add parameters to build a graph from our archive, filter your graph by language, country, reporting voice, sentiment, provocative levels, and much more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




// Configure sdk credentials
$config = new AskNews\Configuration([
  'clientId' => 'YOUR_ASKNEWS_CLIENT_ID',
  'clientSecret' => 'YOUR_ASKNEWS_CLIENT_SECRET',
  'scopes' => ['news', 'chat', 'stories', 'analytics']
]);


$apiInstance = new AskNews\Api\GraphApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body_build_graph = new \AskNews\Model\BodyBuildGraph(); // \AskNews\Model\BodyBuildGraph

try {
    $result = $apiInstance->buildGraph($body_build_graph);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraphApi->buildGraph: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body_build_graph** | [**\AskNews\Model\BodyBuildGraph**](../Model/BodyBuildGraph.md)|  | [optional] |

### Return type

[**\AskNews\Model\GraphResponse**](../Model/GraphResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
