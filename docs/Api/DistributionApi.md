# AskNews\DistributionApi

All URIs are relative to https://api.asknews.dev, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainHitShare()**](DistributionApi.md#domainHitShare) | **GET** /v1/distribution/stats/hit_share | Get the hit share for a list of domains in a time period |
| [**findDomains()**](DistributionApi.md#findDomains) | **GET** /v1/distribution/domains | Find domains |
| [**getArticleHits()**](DistributionApi.md#getArticleHits) | **GET** /v1/distribution/stats/count | Get article hits |
| [**getDomain()**](DistributionApi.md#getDomain) | **GET** /v1/distribution/domains/{name} | Get a domain by name |
| [**getDomainQueries()**](DistributionApi.md#getDomainQueries) | **GET** /v1/distribution/articles/domain_queries | Get queries that surfaced domain articles |
| [**topNArticlesByHits()**](DistributionApi.md#topNArticlesByHits) | **GET** /v1/distribution/articles/top_n | Get the top N articles by hits |
| [**topNArticlesForDomain()**](DistributionApi.md#topNArticlesForDomain) | **GET** /v1/distribution/articles/top_n_for_domain | Get the top N articles by hits for domain |
| [**topNDomainsByHits()**](DistributionApi.md#topNDomainsByHits) | **GET** /v1/distribution/domains/top_n | Get the top N domains by hits |
| [**updateDomain()**](DistributionApi.md#updateDomain) | **PUT** /v1/distribution/domains/{name} | Update an existing domain |


## `domainHitShare()`

```php
domainHitShare($domain_names, $start_date, $end_date, $is_publisher): \AskNews\Model\HitShareResponse
```

Get the hit share for a list of domains in a time period

Get the hit share for a list of domains in a time period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_names = array('domain_names_example'); // string[] | Domain names to filter by
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)
$is_publisher = true; // bool | Only calculate hit share for publisher domains

try {
    $result = $apiInstance->domainHitShare($domain_names, $start_date, $end_date, $is_publisher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->domainHitShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_names** | [**string[]**](../Model/string.md)| Domain names to filter by | |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |
| **is_publisher** | **bool**| Only calculate hit share for publisher domains | [optional] [default to true] |

### Return type

[**\AskNews\Model\HitShareResponse**](../Model/HitShareResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findDomains()`

```php
findDomains($page, $per_page, $names, $is_tollbit, $publisher): \AskNews\Model\PaginatedResponseReadDomainResponse
```

Find domains

Find domains with optional filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number for pagination
$per_page = 10; // int | Number of items per page
$names = array('names_example'); // string[] | List of domain names to filter by
$is_tollbit = True; // bool | Filter by tollbit status
$publisher = True; // bool | Filter by publisher status

try {
    $result = $apiInstance->findDomains($page, $per_page, $names, $is_tollbit, $publisher);
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
| **is_tollbit** | **bool**| Filter by tollbit status | [optional] |
| **publisher** | **bool**| Filter by publisher status | [optional] |

### Return type

[**\AskNews\Model\PaginatedResponseReadDomainResponse**](../Model/PaginatedResponseReadDomainResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticleHits()`

```php
getArticleHits($domain_name, $start_date, $end_date): \AskNews\Model\CountResponse
```

Get article hits

Get the number of hits for articles in a specific domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain name to filter by
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)

try {
    $result = $apiInstance->getArticleHits($domain_name, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->getArticleHits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain name to filter by | |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |

### Return type

[**\AskNews\Model\CountResponse**](../Model/CountResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($name): \AskNews\Model\ReadDomainResponse
```

Get a domain by name

Get a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->getDomain($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\AskNews\Model\ReadDomainResponse**](../Model/ReadDomainResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainQueries()`

```php
getDomainQueries($domain_names, $limit, $start_date, $end_date): \AskNews\Model\DomainQueriesResponse
```

Get queries that surfaced domain articles

Get article hits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_names = array('domain_names_example'); // string[] | Domain names to filter by
$limit = 10; // int | Limit for the number of articles
$start_date = 56; // int | Start date to filter by
$end_date = 56; // int | End date to filter by

try {
    $result = $apiInstance->getDomainQueries($domain_names, $limit, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->getDomainQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_names** | [**string[]**](../Model/string.md)| Domain names to filter by | |
| **limit** | **int**| Limit for the number of articles | [optional] [default to 10] |
| **start_date** | **int**| Start date to filter by | [optional] |
| **end_date** | **int**| End date to filter by | [optional] |

### Return type

[**\AskNews\Model\DomainQueriesResponse**](../Model/DomainQueriesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topNArticlesByHits()`

```php
topNArticlesByHits($limit, $start_date, $end_date, $domain_names): \AskNews\Model\TopNArticlesByHitsResponse
```

Get the top N articles by hits

Get the top N articles by hits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of top domains to return
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)
$domain_names = array('domain_names_example'); // string[] | List of domain names to filter by

try {
    $result = $apiInstance->topNArticlesByHits($limit, $start_date, $end_date, $domain_names);
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
| **domain_names** | [**string[]**](../Model/string.md)| List of domain names to filter by | [optional] |

### Return type

[**\AskNews\Model\TopNArticlesByHitsResponse**](../Model/TopNArticlesByHitsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topNArticlesForDomain()`

```php
topNArticlesForDomain($domain_name, $limit, $start_date, $end_date): \AskNews\Model\TopNArticlesForDomainResponse
```

Get the top N articles by hits for domain

Get the top N domain articles by hits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain name to filter by
$limit = 10; // int | Number of top domain articles to return
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)

try {
    $result = $apiInstance->topNArticlesForDomain($domain_name, $limit, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->topNArticlesForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain name to filter by | |
| **limit** | **int**| Number of top domain articles to return | [optional] [default to 10] |
| **start_date** | **int**| Start date to filter by (timestamp in seconds since epoch) | [optional] |
| **end_date** | **int**| End date to filter by (timestamp in seconds since epoch) | [optional] |

### Return type

[**\AskNews\Model\TopNArticlesForDomainResponse**](../Model/TopNArticlesForDomainResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topNDomainsByHits()`

```php
topNDomainsByHits($limit, $start_date, $end_date, $names): \AskNews\Model\TopNDomainsByHitsResponse
```

Get the top N domains by hits

Get the top N domains by hits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of top domains to return
$start_date = 56; // int | Start date to filter by (timestamp in seconds since epoch)
$end_date = 56; // int | End date to filter by (timestamp in seconds since epoch)
$names = array('names_example'); // string[] | List of domain names to filter by

try {
    $result = $apiInstance->topNDomainsByHits($limit, $start_date, $end_date, $names);
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
| **names** | [**string[]**](../Model/string.md)| List of domain names to filter by | [optional] |

### Return type

[**\AskNews\Model\TopNDomainsByHitsResponse**](../Model/TopNDomainsByHitsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomain()`

```php
updateDomain($name, $update_domain_request): \AskNews\Model\ReadDomainResponse
```

Update an existing domain

Update an existing domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$update_domain_request = new \AskNews\Model\UpdateDomainRequest(); // \AskNews\Model\UpdateDomainRequest

try {
    $result = $apiInstance->updateDomain($name, $update_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **update_domain_request** | [**\AskNews\Model\UpdateDomainRequest**](../Model/UpdateDomainRequest.md)|  | |

### Return type

[**\AskNews\Model\ReadDomainResponse**](../Model/ReadDomainResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
