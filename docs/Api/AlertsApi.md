# AskNews\AlertsApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAlert()**](AlertsApi.md#createAlert) | **POST** /v1/chat/alerts | Create an alert |
| [**deleteAlert()**](AlertsApi.md#deleteAlert) | **DELETE** /v1/chat/alerts/{alert_id} | Delete an alert |
| [**getAlert()**](AlertsApi.md#getAlert) | **GET** /v1/chat/alerts/{alert_id} | Get an alert |
| [**getAlertLogs()**](AlertsApi.md#getAlertLogs) | **GET** /v1/chat/alerts/{alert_id}/logs | Get alert logs |
| [**getAlerts()**](AlertsApi.md#getAlerts) | **GET** /v1/chat/alerts | Get all created alerts |
| [**putAlert()**](AlertsApi.md#putAlert) | **PUT** /v1/chat/alerts/{alert_id} | Update an alert |


## `createAlert()`

```php
createAlert($create_alert_request): \AskNews\Model\AlertResponse
```

Create an alert

Create an alert.

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


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_alert_request = new \AskNews\Model\CreateAlertRequest(); // \AskNews\Model\CreateAlertRequest

try {
    $result = $apiInstance->createAlert($create_alert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_alert_request** | [**\AskNews\Model\CreateAlertRequest**](../Model/CreateAlertRequest.md)|  | |

### Return type

[**\AskNews\Model\AlertResponse**](../Model/AlertResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAlert()`

```php
deleteAlert($alert_id)
```

Delete an alert

Delete an alert.

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


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_id = 'alert_id_example'; // string | The alert ID

try {
    $apiInstance->deleteAlert($alert_id);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alert_id** | **string**| The alert ID | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlert()`

```php
getAlert($alert_id): \AskNews\Model\AlertResponse
```

Get an alert

Get an alert.

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


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_id = 'alert_id_example'; // string | The alert ID

try {
    $result = $apiInstance->getAlert($alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alert_id** | **string**| The alert ID | |

### Return type

[**\AskNews\Model\AlertResponse**](../Model/AlertResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlertLogs()`

```php
getAlertLogs($alert_id, $user_id, $page, $per_page, $all, $start_timestamp, $end_timestamp): \AskNews\Model\PaginatedResponseAlertLog
```

Get alert logs

Get alert logs.

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


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_id = 'alert_id_example'; // string | The alert ID
$user_id = 'user_id_example'; // string | The ID of the user to get logs for
$page = 1; // int | The page number to get
$per_page = 10; // int | The number of items per page
$all = false; // bool | Whether to get all the alert logs
$start_timestamp = 56; // int | Timestamp to start search from
$end_timestamp = 56; // int | Timestamp to end search at

try {
    $result = $apiInstance->getAlertLogs($alert_id, $user_id, $page, $per_page, $all, $start_timestamp, $end_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alert_id** | **string**| The alert ID | |
| **user_id** | **string**| The ID of the user to get logs for | [optional] |
| **page** | **int**| The page number to get | [optional] [default to 1] |
| **per_page** | **int**| The number of items per page | [optional] [default to 10] |
| **all** | **bool**| Whether to get all the alert logs | [optional] [default to false] |
| **start_timestamp** | **int**| Timestamp to start search from | [optional] |
| **end_timestamp** | **int**| Timestamp to end search at | [optional] |

### Return type

[**\AskNews\Model\PaginatedResponseAlertLog**](../Model/PaginatedResponseAlertLog.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlerts()`

```php
getAlerts($page, $per_page, $all): \AskNews\Model\PaginatedResponseAlertResponse
```

Get all created alerts

Get all created alerts.

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


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to get
$per_page = 10; // int | The number of items per page
$all = false; // bool | Whether to get all the alerts

try {
    $result = $apiInstance->getAlerts($page, $per_page, $all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number to get | [optional] [default to 1] |
| **per_page** | **int**| The number of items per page | [optional] [default to 10] |
| **all** | **bool**| Whether to get all the alerts | [optional] [default to false] |

### Return type

[**\AskNews\Model\PaginatedResponseAlertResponse**](../Model/PaginatedResponseAlertResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAlert()`

```php
putAlert($alert_id, $update_alert_request): \AskNews\Model\AlertResponse
```

Update an alert

Update an alert.

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


$apiInstance = new AskNews\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_id = 'alert_id_example'; // string | The alert ID
$update_alert_request = new \AskNews\Model\UpdateAlertRequest(); // \AskNews\Model\UpdateAlertRequest

try {
    $result = $apiInstance->putAlert($alert_id, $update_alert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->putAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alert_id** | **string**| The alert ID | |
| **update_alert_request** | [**\AskNews\Model\UpdateAlertRequest**](../Model/UpdateAlertRequest.md)|  | |

### Return type

[**\AskNews\Model\AlertResponse**](../Model/AlertResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
