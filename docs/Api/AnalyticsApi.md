# AskNews\AnalyticsApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAssetSentiment()**](AnalyticsApi.md#getAssetSentiment) | **GET** /v1/analytics/finance/sentiment | Get a timeseries of finance news sentiment for assets |


## `getAssetSentiment()`

```php
getAssetSentiment($asset, $metric, $date_from, $date_to): \AskNews\Model\FinanceResponse
```

Get a timeseries of finance news sentiment for assets

Get the news sentiment for a given asset during a provided period of time.  This endpoint is good for narrow AI, like using in combination with a regressor to forecast prices etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure sdk credentials
$config = new AskNews\Configuration([
  'clientId' => 'YOUR_ASKNEWS_CLIENT_ID',
  'clientSecret' => 'YOUR_ASKNEWS_CLIENT_SECRET',
  'scopes' => ['news', 'chat']
]);


$apiInstance = new AskNews\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset = 'asset_example'; // string | The asset name to query for sentiment.
$metric = 'news_positive'; // string | The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily.
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date in ISO format
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date in ISO format

try {
    $result = $apiInstance->getAssetSentiment($asset, $metric, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAssetSentiment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| The asset name to query for sentiment. | |
| **metric** | **string**| The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily. | [optional] [default to &#39;news_positive&#39;] |
| **date_from** | **\DateTime**| The start date in ISO format | [optional] |
| **date_to** | **\DateTime**| The end date in ISO format | [optional] |

### Return type

[**\AskNews\Model\FinanceResponse**](../Model/FinanceResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
