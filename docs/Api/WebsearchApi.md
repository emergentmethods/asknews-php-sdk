# AskNews\WebsearchApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**liveWebSearch()**](WebsearchApi.md#liveWebSearch) | **GET** /v1/chat/websearch | Run a live websearch. |


## `liveWebSearch()`

```php
liveWebSearch($queries, $lookback, $domains, $strict, $offset): \AskNews\Model\WebSearchResponse
```

Run a live websearch.

Run a live websearch on a set of queries, get back a fully structured and LLM-distilled response (in addition to the raw text if you need that as well).  Your response includes as_string and as_dicts, where as_string is a prompt-optimized distillation of the information, done by an LLM. as_dicts contains all the details necessary to feed into other parts of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\WebsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queries = array('queries_example'); // string[] | A list of queries to be live searched, analyzed, distilled, and structured.
$lookback = 56; // int | Number of hours back to allow the websearch to look. Defaults to All time
$domains = array('domains_example'); // string[] | A list of domains to search.
$strict = false; // bool | If true, the websearch will only return results that have a known publication date and are within the lookback period.
$offset = 56; // int | The number of results to offset for followup queries.

try {
    $result = $apiInstance->liveWebSearch($queries, $lookback, $domains, $strict, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsearchApi->liveWebSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queries** | [**string[]**](../Model/string.md)| A list of queries to be live searched, analyzed, distilled, and structured. | |
| **lookback** | **int**| Number of hours back to allow the websearch to look. Defaults to All time | [optional] |
| **domains** | [**string[]**](../Model/string.md)| A list of domains to search. | [optional] |
| **strict** | **bool**| If true, the websearch will only return results that have a known publication date and are within the lookback period. | [optional] [default to false] |
| **offset** | **int**| The number of results to offset for followup queries. | [optional] |

### Return type

[**\AskNews\Model\WebSearchResponse**](../Model/WebSearchResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
