# AskNews\ProfileApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserProfile()**](ProfileApi.md#getUserProfile) | **GET** /v1/profiles/me | Get the current user&#39;s profile |


## `getUserProfile()`

```php
getUserProfile(): \AskNews\Model\ProfileResponse
```

Get the current user's profile

Get the current profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AskNews\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
