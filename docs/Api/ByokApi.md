# AskNews\ByokApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteByokKey()**](ByokApi.md#deleteByokKey) | **DELETE** /v1/chat/byok/{provider} | Delete a stored BYOK API key for a provider |
| [**getByokKey()**](ByokApi.md#getByokKey) | **GET** /v1/chat/byok/{provider} | Get a stored BYOK API key hint for a provider |
| [**upsertByokKey()**](ByokApi.md#upsertByokKey) | **PUT** /v1/chat/byok/{provider} | Store a BYOK API key for a provider |


## `deleteByokKey()`

```php
deleteByokKey($provider)
```

Delete a stored BYOK API key for a provider

Delete a stored BYOK API key for a provider. Bring your own key is reserved for enterprise clients. If you want to use this feature, please contact us at contact@asknews.app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ByokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = 'provider_example'; // string | The BYOK provider

try {
    $apiInstance->deleteByokKey($provider);
} catch (Exception $e) {
    echo 'Exception when calling ByokApi->deleteByokKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| The BYOK provider | |

### Return type

void (empty response body)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByokKey()`

```php
getByokKey($provider): \AskNews\Model\ApiKeyResponse
```

Get a stored BYOK API key hint for a provider

Get the stored BYOK API key hint for a provider. Bring your own key is reserved for enterprise clients. If you want to use this feature, please contact us at contact@asknews.app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ByokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = 'provider_example'; // string | The BYOK provider

try {
    $result = $apiInstance->getByokKey($provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByokApi->getByokKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| The BYOK provider | |

### Return type

[**\AskNews\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertByokKey()`

```php
upsertByokKey($provider, $upsert_api_key_request): \AskNews\Model\ApiKeyResponse
```

Store a BYOK API key for a provider

Store a BYOK API key for a provider. Bring your own key is reserved for enterprise clients. If you want to use this feature, please contact us at contact@asknews.app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ByokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = 'provider_example'; // string | The BYOK provider
$upsert_api_key_request = new \AskNews\Model\UpsertApiKeyRequest(); // \AskNews\Model\UpsertApiKeyRequest

try {
    $result = $apiInstance->upsertByokKey($provider, $upsert_api_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ByokApi->upsertByokKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| The BYOK provider | |
| **upsert_api_key_request** | [**\AskNews\Model\UpsertApiKeyRequest**](../Model/UpsertApiKeyRequest.md)|  | |

### Return type

[**\AskNews\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
