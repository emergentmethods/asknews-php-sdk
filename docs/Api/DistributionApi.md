# AskNews\DistributionApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomain()**](DistributionApi.md#createDomain) | **POST** /v1/distribution/domains | Create a new domain |
| [**findDomains()**](DistributionApi.md#findDomains) | **GET** /v1/distribution/domains | Find domains |
| [**getArticleHits()**](DistributionApi.md#getArticleHits) | **GET** /v1/distribution/stats/count | Get article hits |
| [**getDomain()**](DistributionApi.md#getDomain) | **GET** /v1/distribution/domains/{domain_idOrName} | Get a domain by ID or name |
| [**topNArticlesByHits()**](DistributionApi.md#topNArticlesByHits) | **GET** /v1/distribution/articles/top_n | Get the top N articles by hits |
| [**topNArticlesForDomain()**](DistributionApi.md#topNArticlesForDomain) | **GET** /v1/distribution/articles/top_n_for_domain | Get the top N articles by hits for domain |
| [**topNDomainsByHits()**](DistributionApi.md#topNDomainsByHits) | **GET** /v1/distribution/domains/top_n | Get the top N domains by hits |
| [**updateDomain()**](DistributionApi.md#updateDomain) | **PUT** /v1/distribution/domains/{domain_id} | Update an existing domain |


## `createDomain()`

```php
createDomain($create_domain_request): \AskNews\Model\ReadDomainResponse
```

Create a new domain

Create a new domain.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_domain_request = new \AskNews\Model\CreateDomainRequest(); // \AskNews\Model\CreateDomainRequest

try {
    $result = $apiInstance->createDomain($create_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_domain_request** | [**\AskNews\Model\CreateDomainRequest**](../Model/CreateDomainRequest.md)|  | |

### Return type

[**\AskNews\Model\ReadDomainResponse**](../Model/ReadDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findDomains()`

```php
findDomains($page, $per_page, $names, $include_ids, $exclude_ids, $is_tollbit): \AskNews\Model\PaginatedResponseReadDomainResponse
```

Find domains

Find domains with optional filters.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number for pagination
$per_page = 10; // int | Number of items per page
$names = array('names_example'); // string[] | List of domain names to filter by
$include_ids = array('include_ids_example'); // string[] | List of domain IDs to include in the response
$exclude_ids = array('exclude_ids_example'); // string[] | List of domain IDs to exclude from the response
$is_tollbit = True; // bool | Filter by tollbit status

try {
    $result = $apiInstance->findDomains($page, $per_page, $names, $include_ids, $exclude_ids, $is_tollbit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->findDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page | [optional] [default to 10] |
| **names** | [**string[]**](../Model/string.md)| List of domain names to filter by | [optional] |
| **include_ids** | [**string[]**](../Model/string.md)| List of domain IDs to include in the response | [optional] |
| **exclude_ids** | [**string[]**](../Model/string.md)| List of domain IDs to exclude from the response | [optional] |
| **is_tollbit** | **bool**| Filter by tollbit status | [optional] |

### Return type

[**\AskNews\Model\PaginatedResponseReadDomainResponse**](../Model/PaginatedResponseReadDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticleHits()`

```php
getArticleHits($domain, $start_date, $end_date): \AskNews\Model\CountResponse
```

Get article hits

Get the number of hits for articles in a specific domain.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain name to filter by
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)

try {
    $result = $apiInstance->getArticleHits($domain, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->getArticleHits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name to filter by | |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |

### Return type

[**\AskNews\Model\CountResponse**](../Model/CountResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($domain_id_or_name): \AskNews\Model\ReadDomainResponse
```

Get a domain by ID or name

Get a new domain.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id_or_name = 'domain_id_or_name_example'; // string

try {
    $result = $apiInstance->getDomain($domain_id_or_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id_or_name** | **string**|  | |

### Return type

[**\AskNews\Model\ReadDomainResponse**](../Model/ReadDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topNArticlesByHits()`

```php
topNArticlesByHits($limit, $start_date, $end_date): \AskNews\Model\TopNArticlesByHitsResponse
```

Get the top N articles by hits

Get the top N articles by hits.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of top domains to return
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)

try {
    $result = $apiInstance->topNArticlesByHits($limit, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->topNArticlesByHits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of top domains to return | [optional] [default to 10] |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |

### Return type

[**\AskNews\Model\TopNArticlesByHitsResponse**](../Model/TopNArticlesByHitsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topNArticlesForDomain()`

```php
topNArticlesForDomain($domain, $limit, $start_date, $end_date): \AskNews\Model\TopNArticlesForDomainResponse
```

Get the top N articles by hits for domain

Get the top N domain articles by hits.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain name to filter by
$limit = 10; // int | Number of top domain articles to return
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)

try {
    $result = $apiInstance->topNArticlesForDomain($domain, $limit, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->topNArticlesForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name to filter by | |
| **limit** | **int**| Number of top domain articles to return | [optional] [default to 10] |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |

### Return type

[**\AskNews\Model\TopNArticlesForDomainResponse**](../Model/TopNArticlesForDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topNDomainsByHits()`

```php
topNDomainsByHits($limit, $start_date, $end_date): \AskNews\Model\TopNDomainsByHitsResponse
```

Get the top N domains by hits

Get the top N domains by hits.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of top domains to return
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)

try {
    $result = $apiInstance->topNDomainsByHits($limit, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->topNDomainsByHits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of top domains to return | [optional] [default to 10] |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |

### Return type

[**\AskNews\Model\TopNDomainsByHitsResponse**](../Model/TopNDomainsByHitsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomain()`

```php
updateDomain($domain_id, $update_domain_request): \AskNews\Model\ReadDomainResponse
```

Update an existing domain

Update an existing domain.

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


$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 'domain_id_example'; // string
$update_domain_request = new \AskNews\Model\UpdateDomainRequest(); // \AskNews\Model\UpdateDomainRequest

try {
    $result = $apiInstance->updateDomain($domain_id, $update_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
| **update_domain_request** | [**\AskNews\Model\UpdateDomainRequest**](../Model/UpdateDomainRequest.md)|  | |

### Return type

[**\AskNews\Model\ReadDomainResponse**](../Model/ReadDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
