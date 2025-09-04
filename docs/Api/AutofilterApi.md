# AskNews\AutofilterApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**autofilter()**](AutofilterApi.md#autofilter) | **GET** /v1/chat/autofilter | Generate filter params for AskNews endpoints |


## `autofilter()`

```php
autofilter($query): \AskNews\Model\FilterParamsResponse
```

Generate filter params for AskNews endpoints

This is a helper endpoint designed to intelligently populate the \"parameters of the /news search endpoint of AskNews. It takes a description of the type of news that you want to access, and then maps it to the available parameters automatically.  This endpoint returns the parameters, called filter_params, which can be used in a variety of other AskNews endpoints, for example, /news, /graph, /chat.

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


$apiInstance = new AskNews\Api\AutofilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | A description of what kind of news you want to get.

try {
    $result = $apiInstance->autofilter($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutofilterApi->autofilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| A description of what kind of news you want to get. | |

### Return type

[**\AskNews\Model\FilterParamsResponse**](../Model/FilterParamsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
