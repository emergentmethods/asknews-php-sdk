# AskNews\RedditApi

All URIs are relative to http://localhost:8099, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchReddit()**](RedditApi.md#searchReddit) | **GET** /v1/reddit/search | Search Reddit, summarize threads, and return analysis. |


## `searchReddit()`

```php
searchReddit($keywords, $n_threads, $method, $deep, $return_type, $time_filter, $sort): \AskNews\Model\RedditResponse
```

Search Reddit, summarize threads, and return analysis.

Go to Reddit, search threads, summarize the threads, return analysis. `deep`=True is a live web scrape, AskNews searches Reddit, finds threads, summarizes them, analyzes them, and returns the results. `deep`=False is a search in AskNews' existing database of Reddit threads.

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


$apiInstance = new AskNews\Api\RedditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywords = array('keywords_example'); // string[] | Keywords used to search for relevant Reddit threads.
$n_threads = 5; // int | Number of Reddit threads to summarize and return
$method = 'kw'; // string | The search method. Can be 'nl' or 'kw'. If 'nl', then the query will be used as a natural language query. If 'kw', then the query will be used as a direct keyword query.
$deep = false; // bool | Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep=False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads
$return_type = 'string'; // string | The return type. Can be 'dicts', 'string', or 'both'.
$time_filter = 'day'; // string | The time filter.
$sort = 'relevance'; // string | The sort order.

try {
    $result = $apiInstance->searchReddit($keywords, $n_threads, $method, $deep, $return_type, $time_filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedditApi->searchReddit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywords** | [**string[]**](../Model/string.md)| Keywords used to search for relevant Reddit threads. | |
| **n_threads** | **int**| Number of Reddit threads to summarize and return | [optional] [default to 5] |
| **method** | **string**| The search method. Can be &#39;nl&#39; or &#39;kw&#39;. If &#39;nl&#39;, then the query will be used as a natural language query. If &#39;kw&#39;, then the query will be used as a direct keyword query. | [optional] [default to &#39;kw&#39;] |
| **deep** | **bool**| Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep&#x3D;False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads | [optional] [default to false] |
| **return_type** | **string**| The return type. Can be &#39;dicts&#39;, &#39;string&#39;, or &#39;both&#39;. | [optional] [default to &#39;string&#39;] |
| **time_filter** | **string**| The time filter. | [optional] [default to &#39;day&#39;] |
| **sort** | **string**| The sort order. | [optional] [default to &#39;relevance&#39;] |

### Return type

[**\AskNews\Model\RedditResponse**](../Model/RedditResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
