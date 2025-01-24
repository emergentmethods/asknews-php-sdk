# AskNews\NewsApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getArticle()**](NewsApi.md#getArticle) | **GET** /v1/news/{article_id} | Get an article by its UUID |
| [**getArticles()**](NewsApi.md#getArticles) | **GET** /v1/news | Get multiple articles by UUID |
| [**getSourcesReport()**](NewsApi.md#getSourcesReport) | **GET** /v1/sources | Get the sources underlying AskNews |
| [**searchNews()**](NewsApi.md#searchNews) | **GET** /v1/news/search | Search for enriched real-time news context |


## `getArticle()`

```php
getArticle($article_id): \AskNews\Model\SearchResponseDictItem
```

Get an article by its UUID

Get a single article given a UUID.

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


$apiInstance = new AskNews\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$article_id = 'article_id_example'; // string | Article ID to retrieve

try {
    $result = $apiInstance->getArticle($article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_id** | **string**| Article ID to retrieve | |

### Return type

[**\AskNews\Model\SearchResponseDictItem**](../Model/SearchResponseDictItem.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticles()`

```php
getArticles($article_ids): \AskNews\Model\SearchResponseDictItem[]
```

Get multiple articles by UUID

Get articles given a list of UUIDs.

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


$apiInstance = new AskNews\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$article_ids = array('article_ids_example'); // string[] | Article UUIDs to fetch.

try {
    $result = $apiInstance->getArticles($article_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_ids** | [**string[]**](../Model/string.md)| Article UUIDs to fetch. | |

### Return type

[**\AskNews\Model\SearchResponseDictItem[]**](../Model/SearchResponseDictItem.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSourcesReport()`

```php
getSourcesReport($n_points, $start_timestamp, $end_timestamp, $metric, $sampling): \AskNews\Model\SourceReportItem[]
```

Get the sources underlying AskNews

This endpoint is primarly used for transparency and monitoring the diversity of the data.  Visualized at `https://asknews.app/transparency`.  Get the distribution of sources/languages/countries underlying AskNews content.

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


$apiInstance = new AskNews\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$n_points = 100; // int | Number of points to return
$start_timestamp = 56; // int | Start timestamp to filter by
$end_timestamp = 56; // int | End timestamp to filter by
$metric = 'countries_diversity'; // string | Metric to filter by
$sampling = '1h'; // string | Sampling to use

try {
    $result = $apiInstance->getSourcesReport($n_points, $start_timestamp, $end_timestamp, $metric, $sampling);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getSourcesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **n_points** | **int**| Number of points to return | [optional] [default to 100] |
| **start_timestamp** | **int**| Start timestamp to filter by | [optional] |
| **end_timestamp** | **int**| End timestamp to filter by | [optional] |
| **metric** | **string**| Metric to filter by | [optional] [default to &#39;countries_diversity&#39;] |
| **sampling** | **string**| Sampling to use | [optional] [default to &#39;1h&#39;] |

### Return type

[**\AskNews\Model\SourceReportItem[]**](../Model/SourceReportItem.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchNews()`

```php
searchNews($query, $n_articles, $start_timestamp, $end_timestamp, $time_filter, $return_type, $historical, $method, $similarity_score_threshold, $offset, $categories, $doc_start_delimiter, $doc_end_delimiter, $provocative, $reporting_voice, $domain_url, $page_rank, $diversify_sources, $strategy, $hours_back, $string_guarantee, $string_guarantee_op, $reverse_string_guarantee, $entity_guarantee, $entity_guarantee_op, $return_graphs, $return_geo, $languages, $countries, $continents, $sentiment, $premium): \AskNews\Model\SearchResponse
```

Search for enriched real-time news context

Search for any news, up to the last 5 minutes or in our extensive historical archive filled with 100s of millions of articles.  Geared toward low-latency applications, where time is of the essence. For example, this endpoint is commonly used for quickly getting news context for an LLM.  This endpoint is also commonly used for synthetic data curation. For example, say you are fine-tuning a model for sports. You could filter  with `classification=\"Sports\"` and build a dataset of sports articles.  News articles come with an abundance of valuable metadata, including full summaries, sentiment, entities, reporting voice, page rank, language, and much much more.  An example of this data in action can be found and interacted with at `https://asknews.app/chat`

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


$apiInstance = new AskNews\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = ''; // string | Query string that can be any phrase, keyword, question, or paragraph. If method='nl', then this will be used as a natural language query. If method='kw', then this will be used as a direct keyword query. This is not required, if it is not passed, then the search is based on the remaining filters only.
$n_articles = 10; // int | Number of articles to return
$start_timestamp = 56; // int | Timestamp to start search from
$end_timestamp = 56; // int | Timestamp to end search at
$time_filter = 'crawl_date'; // string | Control which date type to filter on. 'crawl_date' is the date the article was crawled, 'pub_date' is the date the article was published.
$return_type = 'dicts'; // string | Type of return value. 'string' means that the return is prompt-optimized and ready to be immediately injected into any prompt. 'dicts' means that the return is a structured dictionary, containing additional metadata (like a classic news api). Can be 'string' or 'dicts', or 'both'. 'string' guarantees the lowest-latency response 'dicts' requires more I/O, therefore increases latency (very slightly, depending on your network connection).
$historical = false; // bool | Search on archive of historical news. Defaults to False, meaning that the search will only look through the most recent news (48 hours)
$method = 'kw'; // string | Method to use for searching. 'nl' means Natural Language, which is a string that can be any phrase, keyword, question, or paragraph that will be used for semantic search on the news. 'kw' means Keyword, which can also be any keyword(s), phrase, or paragraph, however the search is a direct keyword search on the database. 'both' means both methods will be used and results will be ranked according to IRR. 'both' may reduce latency by 10 pct in exchange  for improved accuracy.
$similarity_score_threshold = 0.5; // float | Similarity score threshold to determine which articles to return. Lower means less similar results  are allowed.
$offset = new \AskNews\Model\Offset(); // Offset | Offset for pagination. The n_articles is your page size, while your offset is the number of articles to skip to get to your page of interest. For example, if you want to get page 3 for n_article page size of 10, you would set offset to 20.
$categories = array('categories_example'); // string[] | Categories of news to filter on
$doc_start_delimiter = '<doc>'; // string | Document start delimiter for string return.
$doc_end_delimiter = '</doc>'; // string | Document end delimiter for string return.
$provocative = 'all'; // string | Filter articles based on how provocative they are deemed based on the use of provocative language and emotional vocabulary.
$reporting_voice = new \AskNews\Model\ReportingVoice(); // ReportingVoice | Type of reporting voice to filer by.
$domain_url = new \AskNews\Model\DomainUrl(); // DomainUrl | filter by domain url of interest. This can be a single domain or a list of domains. For example, 'npr.org' or ['nature.com', 'npr.org']
$page_rank = 56; // int | Maximum allowed page rank for returned articles.
$diversify_sources = false; // bool | Ensure that the return set of articles are selected from diverse sources. This adds latency to the search, but attempts to balance the representation of sources by country and source origins. In summary, a net is cast around your search, then the diversity of sources is analyzed, and your final result matches the large net diversity distribution. This means that your search accuracy is reduced, but you gain more diverse perspectives.
$strategy = 'default'; // string | Strategy to use for searching. 'latest news' automatically setsmethod='nl', historical=False, and looks within the past 24 hours. 'news knowledge' automatically sets method='kw', historical=True, and looks within the past 60 days. 'news knowledge' will increase latency due to the  larger search space in the archive. Use 'default' if you want to control  start_timestamp, end_timestamp, historical, and method.
$hours_back = 24; // int | Can be set to easily control the look back on the search. This is the same as controlling the 'start_timestamp' parameter. The difference is that this is not a timestamp, it is the number of hours back to look from the current time. Defaults to 24 hours.
$string_guarantee = array(new \AskNews\Model\string[]()); // string[] | If defined, the search will only occur on articles that contain strings in this list.
$string_guarantee_op = 'AND'; // string | Operator to use for string guarantee list.
$reverse_string_guarantee = array(new \AskNews\Model\string[]()); // string[] | If defined, the search will only occur on articles that do not contain strings in this list.
$entity_guarantee = array(new \AskNews\Model\string[]()); // string[] | Entity guarantee to filter by. This is a list of strings, where each string includes entity type and entity value separated by a colon. The first element is the entity type and the second element is the entity value. For example ['Location:Paris', 'Person:John']
$entity_guarantee_op = 'OR'; // string | Operator to use for entity guarantee list.
$return_graphs = false; // bool | Return graphs for the articles. Only available to Analyst tier and above.
$return_geo = false; // bool | Return GeoCoordinates associated with locations discussed  inside the articles. Only available to Analyst tier and above.
$languages = array(new \AskNews\Model\string[]()); // string[] | Languages to filter by. This is the two-letter 'set 1' of the ISO 639-1 standard. For example: English is 'en'.
$countries = array(new \AskNews\Model\string[]()); // string[] | Countries to filter by, this is the two-letter ISO country codeFor example: United States is 'US', France is 'FR', Sweden is 'SE'.
$continents = array(new \AskNews\Model\string[]()); // string[] | Continents to filter by.
$sentiment = 'sentiment_example'; // string | Sentiment to filter articles by.
$premium = false; // bool | Include premium sources.

try {
    $result = $apiInstance->searchNews($query, $n_articles, $start_timestamp, $end_timestamp, $time_filter, $return_type, $historical, $method, $similarity_score_threshold, $offset, $categories, $doc_start_delimiter, $doc_end_delimiter, $provocative, $reporting_voice, $domain_url, $page_rank, $diversify_sources, $strategy, $hours_back, $string_guarantee, $string_guarantee_op, $reverse_string_guarantee, $entity_guarantee, $entity_guarantee_op, $return_graphs, $return_geo, $languages, $countries, $continents, $sentiment, $premium);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->searchNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Query string that can be any phrase, keyword, question, or paragraph. If method&#x3D;&#39;nl&#39;, then this will be used as a natural language query. If method&#x3D;&#39;kw&#39;, then this will be used as a direct keyword query. This is not required, if it is not passed, then the search is based on the remaining filters only. | [optional] [default to &#39;&#39;] |
| **n_articles** | **int**| Number of articles to return | [optional] [default to 10] |
| **start_timestamp** | **int**| Timestamp to start search from | [optional] |
| **end_timestamp** | **int**| Timestamp to end search at | [optional] |
| **time_filter** | **string**| Control which date type to filter on. &#39;crawl_date&#39; is the date the article was crawled, &#39;pub_date&#39; is the date the article was published. | [optional] [default to &#39;crawl_date&#39;] |
| **return_type** | **string**| Type of return value. &#39;string&#39; means that the return is prompt-optimized and ready to be immediately injected into any prompt. &#39;dicts&#39; means that the return is a structured dictionary, containing additional metadata (like a classic news api). Can be &#39;string&#39; or &#39;dicts&#39;, or &#39;both&#39;. &#39;string&#39; guarantees the lowest-latency response &#39;dicts&#39; requires more I/O, therefore increases latency (very slightly, depending on your network connection). | [optional] [default to &#39;dicts&#39;] |
| **historical** | **bool**| Search on archive of historical news. Defaults to False, meaning that the search will only look through the most recent news (48 hours) | [optional] [default to false] |
| **method** | **string**| Method to use for searching. &#39;nl&#39; means Natural Language, which is a string that can be any phrase, keyword, question, or paragraph that will be used for semantic search on the news. &#39;kw&#39; means Keyword, which can also be any keyword(s), phrase, or paragraph, however the search is a direct keyword search on the database. &#39;both&#39; means both methods will be used and results will be ranked according to IRR. &#39;both&#39; may reduce latency by 10 pct in exchange  for improved accuracy. | [optional] [default to &#39;kw&#39;] |
| **similarity_score_threshold** | **float**| Similarity score threshold to determine which articles to return. Lower means less similar results  are allowed. | [optional] [default to 0.5] |
| **offset** | [**Offset**](../Model/.md)| Offset for pagination. The n_articles is your page size, while your offset is the number of articles to skip to get to your page of interest. For example, if you want to get page 3 for n_article page size of 10, you would set offset to 20. | [optional] |
| **categories** | [**string[]**](../Model/string.md)| Categories of news to filter on | [optional] |
| **doc_start_delimiter** | **string**| Document start delimiter for string return. | [optional] [default to &#39;&lt;doc&gt;&#39;] |
| **doc_end_delimiter** | **string**| Document end delimiter for string return. | [optional] [default to &#39;&lt;/doc&gt;&#39;] |
| **provocative** | **string**| Filter articles based on how provocative they are deemed based on the use of provocative language and emotional vocabulary. | [optional] [default to &#39;all&#39;] |
| **reporting_voice** | [**ReportingVoice**](../Model/.md)| Type of reporting voice to filer by. | [optional] |
| **domain_url** | [**DomainUrl**](../Model/.md)| filter by domain url of interest. This can be a single domain or a list of domains. For example, &#39;npr.org&#39; or [&#39;nature.com&#39;, &#39;npr.org&#39;] | [optional] |
| **page_rank** | **int**| Maximum allowed page rank for returned articles. | [optional] |
| **diversify_sources** | **bool**| Ensure that the return set of articles are selected from diverse sources. This adds latency to the search, but attempts to balance the representation of sources by country and source origins. In summary, a net is cast around your search, then the diversity of sources is analyzed, and your final result matches the large net diversity distribution. This means that your search accuracy is reduced, but you gain more diverse perspectives. | [optional] [default to false] |
| **strategy** | **string**| Strategy to use for searching. &#39;latest news&#39; automatically setsmethod&#x3D;&#39;nl&#39;, historical&#x3D;False, and looks within the past 24 hours. &#39;news knowledge&#39; automatically sets method&#x3D;&#39;kw&#39;, historical&#x3D;True, and looks within the past 60 days. &#39;news knowledge&#39; will increase latency due to the  larger search space in the archive. Use &#39;default&#39; if you want to control  start_timestamp, end_timestamp, historical, and method. | [optional] [default to &#39;default&#39;] |
| **hours_back** | **int**| Can be set to easily control the look back on the search. This is the same as controlling the &#39;start_timestamp&#39; parameter. The difference is that this is not a timestamp, it is the number of hours back to look from the current time. Defaults to 24 hours. | [optional] [default to 24] |
| **string_guarantee** | [**string[]**](../Model/.md)| If defined, the search will only occur on articles that contain strings in this list. | [optional] |
| **string_guarantee_op** | **string**| Operator to use for string guarantee list. | [optional] [default to &#39;AND&#39;] |
| **reverse_string_guarantee** | [**string[]**](../Model/.md)| If defined, the search will only occur on articles that do not contain strings in this list. | [optional] |
| **entity_guarantee** | [**string[]**](../Model/.md)| Entity guarantee to filter by. This is a list of strings, where each string includes entity type and entity value separated by a colon. The first element is the entity type and the second element is the entity value. For example [&#39;Location:Paris&#39;, &#39;Person:John&#39;] | [optional] |
| **entity_guarantee_op** | **string**| Operator to use for entity guarantee list. | [optional] [default to &#39;OR&#39;] |
| **return_graphs** | **bool**| Return graphs for the articles. Only available to Analyst tier and above. | [optional] [default to false] |
| **return_geo** | **bool**| Return GeoCoordinates associated with locations discussed  inside the articles. Only available to Analyst tier and above. | [optional] [default to false] |
| **languages** | [**string[]**](../Model/.md)| Languages to filter by. This is the two-letter &#39;set 1&#39; of the ISO 639-1 standard. For example: English is &#39;en&#39;. | [optional] |
| **countries** | [**string[]**](../Model/.md)| Countries to filter by, this is the two-letter ISO country codeFor example: United States is &#39;US&#39;, France is &#39;FR&#39;, Sweden is &#39;SE&#39;. | [optional] |
| **continents** | [**string[]**](../Model/.md)| Continents to filter by. | [optional] |
| **sentiment** | **string**| Sentiment to filter articles by. | [optional] |
| **premium** | **bool**| Include premium sources. | [optional] [default to false] |

### Return type

[**\AskNews\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
