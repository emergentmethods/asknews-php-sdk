# AskNews\IndexUrlsApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**indexUrls()**](IndexUrlsApi.md#indexUrls) | **POST** /v1/news/index_urls | Index a list of URLs into AskNews |


## `indexUrls()`

```php
indexUrls($url_indexing_request): \AskNews\Model\IndexUrlsResponse
```

Index a list of URLs into AskNews

Index a list of news article URLs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\IndexUrlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_indexing_request = new \AskNews\Model\URLIndexingRequest(); // \AskNews\Model\URLIndexingRequest

try {
    $result = $apiInstance->indexUrls($url_indexing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndexUrlsApi->indexUrls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url_indexing_request** | [**\AskNews\Model\URLIndexingRequest**](../Model/URLIndexingRequest.md)|  | |

### Return type

[**\AskNews\Model\IndexUrlsResponse**](../Model/IndexUrlsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
