# AskNews\ChartsApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChartsEndpoint()**](ChartsApi.md#createChartsEndpoint) | **POST** /v1/chat/charts | Create a chart |


## `createChartsEndpoint()`

```php
createChartsEndpoint($create_chart_request): \AskNews\Model\ChartResponse
```

Create a chart

Create charts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_chart_request = new \AskNews\Model\CreateChartRequest(); // \AskNews\Model\CreateChartRequest

try {
    $result = $apiInstance->createChartsEndpoint($create_chart_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->createChartsEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_chart_request** | [**\AskNews\Model\CreateChartRequest**](../Model/CreateChartRequest.md)|  | |

### Return type

[**\AskNews\Model\ChartResponse**](../Model/ChartResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
