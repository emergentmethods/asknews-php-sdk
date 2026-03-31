# AskNews\WikiApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchWiki()**](WikiApi.md#searchWiki) | **GET** /v1/wiki/search | Search for Wikipedia context with natural language |


## `searchWiki()`

```php
searchWiki($query, $neighbor_chunks, $n_documents, $full_articles, $hybrid_search, $string_guarantee, $diversify, $include_main_section): \AskNews\Model\WikiSearchResponse
```

Search for Wikipedia context with natural language

Search on Wikipedia content with natural language. Find exactly relevant chunks, with contextual neighbor chunks, and the full articles they came from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = ''; // string | Natural language query that can be any phrase, keyword, question, or paragraph.
$neighbor_chunks = 56; // int | Number of neighbor chunks to attach and return. If 0, then no neighbor chunks will be returned.
$n_documents = 56; // int | Number of documents to return. If 0, then no documents will be returned.
$full_articles = True; // bool | If true, then full articles will be returned. If false, then only chunks and their neighbors will be returned. Beware that returning full articles increases data size which increases token usage downstream.
$hybrid_search = True; // bool | If true, then hybrid search will be used. If false, then only vector search will be used.
$string_guarantee = array('string_guarantee_example'); // string[] | List of strings that must be present in the results. If empty, then no string guarantee will be applied.
$diversify = 3.4; // float | Diversity factor for MMR re-ranking. 0.0 means no diversity (pure relevance), 1.0 means full diversity.
$include_main_section = True; // bool | If true, then the main section of the article will be included at the start of each chunk's content. If false, then only the chunk content will be returned. Useful because the main section often contains important context.

try {
    $result = $apiInstance->searchWiki($query, $neighbor_chunks, $n_documents, $full_articles, $hybrid_search, $string_guarantee, $diversify, $include_main_section);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->searchWiki: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Natural language query that can be any phrase, keyword, question, or paragraph. | [optional] [default to &#39;&#39;] |
| **neighbor_chunks** | **int**| Number of neighbor chunks to attach and return. If 0, then no neighbor chunks will be returned. | [optional] |
| **n_documents** | **int**| Number of documents to return. If 0, then no documents will be returned. | [optional] |
| **full_articles** | **bool**| If true, then full articles will be returned. If false, then only chunks and their neighbors will be returned. Beware that returning full articles increases data size which increases token usage downstream. | [optional] |
| **hybrid_search** | **bool**| If true, then hybrid search will be used. If false, then only vector search will be used. | [optional] |
| **string_guarantee** | [**string[]**](../Model/string.md)| List of strings that must be present in the results. If empty, then no string guarantee will be applied. | [optional] |
| **diversify** | **float**| Diversity factor for MMR re-ranking. 0.0 means no diversity (pure relevance), 1.0 means full diversity. | [optional] |
| **include_main_section** | **bool**| If true, then the main section of the article will be included at the start of each chunk&#39;s content. If false, then only the chunk content will be returned. Useful because the main section often contains important context. | [optional] |

### Return type

[**\AskNews\Model\WikiSearchResponse**](../Model/WikiSearchResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
