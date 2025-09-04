# AskNews\ForecastApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getForecast()**](ForecastApi.md#getForecast) | **GET** /v1/chat/forecast | Make an expert forecast for a news event. |


## `getForecast()`

```php
getForecast($query, $lookback, $articles_to_use, $method, $model, $cutoff_date, $use_reddit, $additional_context, $web_search, $expert): \AskNews\Model\ForecastResponse
```

Make an expert forecast for a news event.

Make an expert forecast for a news event.  This endpoint reaches into the news archive, looking back `lookback` days to extract the most relevant news articles, building a timeline of events, and then making an expert forecast.  This endpoint is more expensive than the search endpoint, it is calling gpt-4o or claude 3-5 on approx 15k tokens to build the forecast. This endpoint counts toward \"deep\" calls in the billing system.  It returns the forecast, the reasoning, and the sources.

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


$apiInstance = new AskNews\Api\ForecastApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The requested forecast.
$lookback = 14; // int | The number of days to look back for the forecast.
$articles_to_use = 15; // int | The total number of relevant articles to be extracted from the news archive and used for the forecast.
$method = 'kw'; // string | Method to use for the context search Currently only 'kw' is supported.
$model = 'gpt-4.1-2025-04-14'; // string | The model to use for the forecast.
$cutoff_date = 'cutoff_date_example'; // string | The cutoff date for the forecast. String format is 'YYYY-MM-DD-HH:MM'. This is useful  for backtesting forecasts.
$use_reddit = false; // bool | Whether to use Reddit data for the forecast.enterprise customers only.
$additional_context = 'additional_context_example'; // string | Additional context to use for the forecast.
$web_search = false; // bool | Whether to run a live web search and include results in the forecast. enterprise customers only.
$expert = 'general'; // string | The type of expert to use for the forecast.

try {
    $result = $apiInstance->getForecast($query, $lookback, $articles_to_use, $method, $model, $cutoff_date, $use_reddit, $additional_context, $web_search, $expert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForecastApi->getForecast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The requested forecast. | |
| **lookback** | **int**| The number of days to look back for the forecast. | [optional] [default to 14] |
| **articles_to_use** | **int**| The total number of relevant articles to be extracted from the news archive and used for the forecast. | [optional] [default to 15] |
| **method** | **string**| Method to use for the context search Currently only &#39;kw&#39; is supported. | [optional] [default to &#39;kw&#39;] |
| **model** | **string**| The model to use for the forecast. | [optional] [default to &#39;gpt-4.1-2025-04-14&#39;] |
| **cutoff_date** | **string**| The cutoff date for the forecast. String format is &#39;YYYY-MM-DD-HH:MM&#39;. This is useful  for backtesting forecasts. | [optional] |
| **use_reddit** | **bool**| Whether to use Reddit data for the forecast.enterprise customers only. | [optional] [default to false] |
| **additional_context** | **string**| Additional context to use for the forecast. | [optional] |
| **web_search** | **bool**| Whether to run a live web search and include results in the forecast. enterprise customers only. | [optional] [default to false] |
| **expert** | **string**| The type of expert to use for the forecast. | [optional] [default to &#39;general&#39;] |

### Return type

[**\AskNews\Model\ForecastResponse**](../Model/ForecastResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
