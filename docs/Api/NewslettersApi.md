# AskNews\NewslettersApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteNewsletter()**](NewslettersApi.md#deleteNewsletter) | **DELETE** /v1/chat/newsletters/{newsletter_id} | Delete a newsletter |
| [**deleteNewsletterContact()**](NewslettersApi.md#deleteNewsletterContact) | **DELETE** /v1/chat/newsletters/{newsletter_id}/contacts/{contact_id} | Delete a newsletter contact |
| [**getNewsletter()**](NewslettersApi.md#getNewsletter) | **GET** /v1/chat/newsletters/{newsletter_id} | Get a newsletter |
| [**getNewsletterContact()**](NewslettersApi.md#getNewsletterContact) | **GET** /v1/chat/newsletters/{newsletter_id}/contacts/{contact_id} | Get a newsletter contact |
| [**getNewsletterContacts()**](NewslettersApi.md#getNewsletterContacts) | **GET** /v1/chat/newsletters/{newsletter_id}/contacts | Get newsletter contacts |
| [**getNewsletters()**](NewslettersApi.md#getNewsletters) | **GET** /v1/chat/newsletters | Get all created newsletters |
| [**getPublicNewsletters()**](NewslettersApi.md#getPublicNewsletters) | **GET** /v1/chat/newsletters/public | Get all public newsletters |
| [**patchNewsletterContact()**](NewslettersApi.md#patchNewsletterContact) | **PATCH** /v1/chat/newsletters/{newsletter_id}/contacts/{contact_id} | Update a newsletter contact |
| [**postNewsletter()**](NewslettersApi.md#postNewsletter) | **POST** /v1/chat/newsletters | Create a newsletter |
| [**postNewsletterContacts()**](NewslettersApi.md#postNewsletterContacts) | **POST** /v1/chat/newsletters/{newsletter_id}/contacts | Create a newsletter contact |
| [**putNewsletter()**](NewslettersApi.md#putNewsletter) | **PUT** /v1/chat/newsletters/{newsletter_id} | Update a newsletter |
| [**unsubscribeNewsletter()**](NewslettersApi.md#unsubscribeNewsletter) | **POST** /v1/chat/newsletters/{newsletter_id}/unsubscribe | Unsubscribe from a newsletter |


## `deleteNewsletter()`

```php
deleteNewsletter($newsletter_id)
```

Delete a newsletter

Delete a newsletter.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID

try {
    $apiInstance->deleteNewsletter($newsletter_id);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->deleteNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |

### Return type

void (empty response body)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNewsletterContact()`

```php
deleteNewsletterContact($newsletter_id, $contact_id)
```

Delete a newsletter contact

Delete a newsletter contact.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID
$contact_id = 'contact_id_example'; // string | The contact ID

try {
    $apiInstance->deleteNewsletterContact($newsletter_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->deleteNewsletterContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |
| **contact_id** | **string**| The contact ID | |

### Return type

void (empty response body)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletter()`

```php
getNewsletter($newsletter_id): \AskNews\Model\NewsletterResponse
```

Get a newsletter

Get a newsletter.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID

try {
    $result = $apiInstance->getNewsletter($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |

### Return type

[**\AskNews\Model\NewsletterResponse**](../Model/NewsletterResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletterContact()`

```php
getNewsletterContact($newsletter_id, $contact_id): \AskNews\Model\NewsletterContactResponse
```

Get a newsletter contact

Get a newsletter contact.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID
$contact_id = 'contact_id_example'; // string | The contact ID

try {
    $result = $apiInstance->getNewsletterContact($newsletter_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletterContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |
| **contact_id** | **string**| The contact ID | |

### Return type

[**\AskNews\Model\NewsletterContactResponse**](../Model/NewsletterContactResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletterContacts()`

```php
getNewsletterContacts($newsletter_id): \AskNews\Model\NewsletterContactResponse[]
```

Get newsletter contacts

Get newsletter contacts.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID

try {
    $result = $apiInstance->getNewsletterContacts($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletterContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |

### Return type

[**\AskNews\Model\NewsletterContactResponse[]**](../Model/NewsletterContactResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletters()`

```php
getNewsletters(): \AskNews\Model\PaginatedResponseNewsletterResponse
```

Get all created newsletters

Get all created newsletters.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNewsletters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getNewsletters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AskNews\Model\PaginatedResponseNewsletterResponse**](../Model/PaginatedResponseNewsletterResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicNewsletters()`

```php
getPublicNewsletters($page, $per_page, $all): \AskNews\Model\PaginatedResponseNewsletterPublicResponse
```

Get all public newsletters

Get all public newsletters.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to get
$per_page = 10; // int | The number of items per page
$all = false; // bool | Whether to get all the public newsletters

try {
    $result = $apiInstance->getPublicNewsletters($page, $per_page, $all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->getPublicNewsletters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number to get | [optional] [default to 1] |
| **per_page** | **int**| The number of items per page | [optional] [default to 10] |
| **all** | **bool**| Whether to get all the public newsletters | [optional] [default to false] |

### Return type

[**\AskNews\Model\PaginatedResponseNewsletterPublicResponse**](../Model/PaginatedResponseNewsletterPublicResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchNewsletterContact()`

```php
patchNewsletterContact($newsletter_id, $contact_id, $newsletter_contact_request): \AskNews\Model\NewsletterContactUpdateResponse
```

Update a newsletter contact

Update a newsletter contact.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID
$contact_id = 'contact_id_example'; // string | The contact ID
$newsletter_contact_request = new \AskNews\Model\NewsletterContactRequest(); // \AskNews\Model\NewsletterContactRequest

try {
    $result = $apiInstance->patchNewsletterContact($newsletter_id, $contact_id, $newsletter_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->patchNewsletterContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |
| **contact_id** | **string**| The contact ID | |
| **newsletter_contact_request** | [**\AskNews\Model\NewsletterContactRequest**](../Model/NewsletterContactRequest.md)|  | |

### Return type

[**\AskNews\Model\NewsletterContactUpdateResponse**](../Model/NewsletterContactUpdateResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postNewsletter()`

```php
postNewsletter($create_newsletter_request): \AskNews\Model\NewsletterResponse
```

Create a newsletter

Create a newsletter.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_newsletter_request = new \AskNews\Model\CreateNewsletterRequest(); // \AskNews\Model\CreateNewsletterRequest

try {
    $result = $apiInstance->postNewsletter($create_newsletter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->postNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_newsletter_request** | [**\AskNews\Model\CreateNewsletterRequest**](../Model/CreateNewsletterRequest.md)|  | |

### Return type

[**\AskNews\Model\NewsletterResponse**](../Model/NewsletterResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postNewsletterContacts()`

```php
postNewsletterContacts($newsletter_id, $newsletter_contact_request): \AskNews\Model\NewsletterContactCreateResponse
```

Create a newsletter contact

Create a newsletter contact.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID
$newsletter_contact_request = new \AskNews\Model\NewsletterContactRequest(); // \AskNews\Model\NewsletterContactRequest

try {
    $result = $apiInstance->postNewsletterContacts($newsletter_id, $newsletter_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->postNewsletterContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |
| **newsletter_contact_request** | [**\AskNews\Model\NewsletterContactRequest**](../Model/NewsletterContactRequest.md)|  | |

### Return type

[**\AskNews\Model\NewsletterContactCreateResponse**](../Model/NewsletterContactCreateResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putNewsletter()`

```php
putNewsletter($newsletter_id, $update_newsletter_request): \AskNews\Model\NewsletterResponse
```

Update a newsletter

Update a newsletter.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID
$update_newsletter_request = new \AskNews\Model\UpdateNewsletterRequest(); // \AskNews\Model\UpdateNewsletterRequest

try {
    $result = $apiInstance->putNewsletter($newsletter_id, $update_newsletter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->putNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |
| **update_newsletter_request** | [**\AskNews\Model\UpdateNewsletterRequest**](../Model/UpdateNewsletterRequest.md)|  | |

### Return type

[**\AskNews\Model\NewsletterResponse**](../Model/NewsletterResponse.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeNewsletter()`

```php
unsubscribeNewsletter($newsletter_id)
```

Unsubscribe from a newsletter

Unsubscribe from a newsletter.

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


$apiInstance = new AskNews\Api\NewslettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 'newsletter_id_example'; // string | The newsletter ID

try {
    $apiInstance->unsubscribeNewsletter($newsletter_id);
} catch (Exception $e) {
    echo 'Exception when calling NewslettersApi->unsubscribeNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **string**| The newsletter ID | |

### Return type

void (empty response body)

### Authorization

[APIKey](../../README.md#APIKey), [AccessToken](../../README.md#AccessToken), [AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
