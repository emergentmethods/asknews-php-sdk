# AskNews\ChatApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deepNews()**](ChatApi.md#deepNews) | **POST** /v1/chat/deepnews | Deep research into real-time news, archive news, and Google. |
| [**listDeepnewsModels()**](ChatApi.md#listDeepnewsModels) | **GET** /v1/chat/deepnews-models | List available DeepNews models |


## `deepNews()`

```php
deepNews($create_deep_news_request): \AskNews\Model\CreateDeepNewsResponse1
```

Deep research into real-time news, archive news, and Google.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_deep_news_request = new \AskNews\Model\CreateDeepNewsRequest(); // \AskNews\Model\CreateDeepNewsRequest

try {
    $result = $apiInstance->deepNews($create_deep_news_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->deepNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_deep_news_request** | [**\AskNews\Model\CreateDeepNewsRequest**](../Model/CreateDeepNewsRequest.md)|  | |

### Return type

[**\AskNews\Model\CreateDeepNewsResponse1**](../Model/CreateDeepNewsResponse1.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeepnewsModels()`

```php
listDeepnewsModels(): \AskNews\Model\ListDeepNewsModelResponse
```

List available DeepNews models

List the available DeepNews models with their public type (standard/lite/advanced).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AskNews\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listDeepnewsModels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->listDeepnewsModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AskNews\Model\ListDeepNewsModelResponse**](../Model/ListDeepNewsModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
