# AskNews\StoriesApi

All URIs are relative to https://api.asknews.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStories()**](StoriesApi.md#getStories) | **GET** /v1/stories | Filter and search for top news narratives |
| [**getStory()**](StoriesApi.md#getStory) | **GET** /v1/stories/{story_id} | Get a story containing updates |


## `getStories()`

```php
getStories($query, $categories, $uuids, $start_timestamp, $end_timestamp, $sort_by, $sort_type, $continent, $offset, $limit, $expand_updates, $max_updates, $max_articles, $method, $obj_type, $reddit, $citation_method, $similarity_score_threshold, $provocative, $strategy): \AskNews\Model\StoriesResponse
```

Filter and search for top news narratives

Filter on our custom, in-house written, stories/events/narratives.  These stories are based on clusters of articles (which come through this endpoint as well, so you can consider this a clustering endpoint). We write stories and track them through time.  The enrichments include a full Reddit overview (including all the thread metadata), as well as descriptions of the reporting voice, the key takeaways, contradictions, all the entities, and much, much more.  You can see this data in action, and filter it similarly at `https://asknews.app/stories`

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


$apiInstance = new AskNews\Api\StoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Query to be used for the search. If method='nl', then this will beused as a natural language query. If method='kw', then this willbe used as a direct keyword query.
$categories = array('categories_example'); // string[] | Categories to use for filtering the stories search
$uuids = array('uuids_example'); // string[] | A list of UUIDs to retrieve.
$start_timestamp = 56; // int | Start timestamp to filter results on.
$end_timestamp = 56; // int | End timestamp to filter results on.
$sort_by = 'sort_by_example'; // string | Which type of sorting to perform. published: Sort by published date. coverage: Sort by coverage. sentiment: Sort by sentiment. relevance: Sort by relevance of similarity score/ranking.
$sort_type = 'sort_type_example'; // string | Whether to sort results in ascending or descending order.
$continent = new \AskNews\Model\Continent(); // Continent | Continents to filter by.
$offset = new \AskNews\Model\Offset1(); // Offset1 | Offset to use
$limit = 10; // int | Limit to use
$expand_updates = false; // bool | Whether to expand updates
$max_updates = 2; // int | Max updates to use
$max_articles = 5; // int | Max articles to use per update
$method = 'kw'; // string | Method to use for query, 'nl' means natural language, and will run a semantic search on the stories database. 'kw' means keyword, and will search by keyword on the stories database. 'both' means that both methods will be used and results will be ranked according to IRR.
$obj_type = array('obj_type_example'); // string[] | Object type to filter by, can be a list with 'story' and/or 'story_update'
$reddit = 0; // int | Whether or not to include Reddit analysiswhere the integer indicates the number of threadsto include in the response. 0 is default. Requirespaid plan to access.
$citation_method = 'brackets'; // string | Method to use for citation filtering.
$similarity_score_threshold = 0.75; // float | Similarity score threshold to use when using query
$provocative = 'all'; // string | Filter stories based on how provocative the underlying articles are deemed based on the use of provocative language and emotional vocabulary.
$strategy = 'default'; // string | Strategy to use for automatically controlling the search. 'default' is the default strategy, which follows all filters faithfully. 'topstories' aims to give a diverse look at top news stories that are relevant to the current filter combination.'topstories_categories' aims to give the top stories for each category. 'topstories_continents' aims to give the top stories for each continent.

try {
    $result = $apiInstance->getStories($query, $categories, $uuids, $start_timestamp, $end_timestamp, $sort_by, $sort_type, $continent, $offset, $limit, $expand_updates, $max_updates, $max_articles, $method, $obj_type, $reddit, $citation_method, $similarity_score_threshold, $provocative, $strategy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->getStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Query to be used for the search. If method&#x3D;&#39;nl&#39;, then this will beused as a natural language query. If method&#x3D;&#39;kw&#39;, then this willbe used as a direct keyword query. | [optional] |
| **categories** | [**string[]**](../Model/string.md)| Categories to use for filtering the stories search | [optional] |
| **uuids** | [**string[]**](../Model/string.md)| A list of UUIDs to retrieve. | [optional] |
| **start_timestamp** | **int**| Start timestamp to filter results on. | [optional] |
| **end_timestamp** | **int**| End timestamp to filter results on. | [optional] |
| **sort_by** | **string**| Which type of sorting to perform. published: Sort by published date. coverage: Sort by coverage. sentiment: Sort by sentiment. relevance: Sort by relevance of similarity score/ranking. | [optional] |
| **sort_type** | **string**| Whether to sort results in ascending or descending order. | [optional] |
| **continent** | [**Continent**](../Model/.md)| Continents to filter by. | [optional] |
| **offset** | [**Offset1**](../Model/.md)| Offset to use | [optional] |
| **limit** | **int**| Limit to use | [optional] [default to 10] |
| **expand_updates** | **bool**| Whether to expand updates | [optional] [default to false] |
| **max_updates** | **int**| Max updates to use | [optional] [default to 2] |
| **max_articles** | **int**| Max articles to use per update | [optional] [default to 5] |
| **method** | **string**| Method to use for query, &#39;nl&#39; means natural language, and will run a semantic search on the stories database. &#39;kw&#39; means keyword, and will search by keyword on the stories database. &#39;both&#39; means that both methods will be used and results will be ranked according to IRR. | [optional] [default to &#39;kw&#39;] |
| **obj_type** | [**string[]**](../Model/string.md)| Object type to filter by, can be a list with &#39;story&#39; and/or &#39;story_update&#39; | [optional] |
| **reddit** | **int**| Whether or not to include Reddit analysiswhere the integer indicates the number of threadsto include in the response. 0 is default. Requirespaid plan to access. | [optional] [default to 0] |
| **citation_method** | **string**| Method to use for citation filtering. | [optional] [default to &#39;brackets&#39;] |
| **similarity_score_threshold** | **float**| Similarity score threshold to use when using query | [optional] [default to 0.75] |
| **provocative** | **string**| Filter stories based on how provocative the underlying articles are deemed based on the use of provocative language and emotional vocabulary. | [optional] [default to &#39;all&#39;] |
| **strategy** | **string**| Strategy to use for automatically controlling the search. &#39;default&#39; is the default strategy, which follows all filters faithfully. &#39;topstories&#39; aims to give a diverse look at top news stories that are relevant to the current filter combination.&#39;topstories_categories&#39; aims to give the top stories for each category. &#39;topstories_continents&#39; aims to give the top stories for each continent. | [optional] [default to &#39;default&#39;] |

### Return type

[**\AskNews\Model\StoriesResponse**](../Model/StoriesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStory()`

```php
getStory($story_id, $expand_updates, $max_updates, $max_articles, $reddit, $citation_method, $condense_auxillary_updates): \AskNews\Model\StoryResponse
```

Get a story containing updates

Get a single news story given its UUID.

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


$apiInstance = new AskNews\Api\StoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$story_id = 'story_id_example'; // string | The story UUID, update UUID, or URL safe title
$expand_updates = true; // bool | Whether to expand updates
$max_updates = 10; // int | Max number of updates to include in the story object
$max_articles = 25; // int | Max articles to include per update
$reddit = 0; // int | Whether to include Reddit analysis
$citation_method = 'brackets'; // string | Method to use for citation filtering.
$condense_auxillary_updates = true; // bool | When requesting a particular story update, you can expand the assocaited updates by settined max_updates to the total you would like to get. If you want those updates to by condensed for reduced latency, you can set  condense_auxillary_updates to 'False'.

try {
    $result = $apiInstance->getStory($story_id, $expand_updates, $max_updates, $max_articles, $reddit, $citation_method, $condense_auxillary_updates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoriesApi->getStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **story_id** | **string**| The story UUID, update UUID, or URL safe title | |
| **expand_updates** | **bool**| Whether to expand updates | [optional] [default to true] |
| **max_updates** | **int**| Max number of updates to include in the story object | [optional] [default to 10] |
| **max_articles** | **int**| Max articles to include per update | [optional] [default to 25] |
| **reddit** | **int**| Whether to include Reddit analysis | [optional] [default to 0] |
| **citation_method** | **string**| Method to use for citation filtering. | [optional] [default to &#39;brackets&#39;] |
| **condense_auxillary_updates** | **bool**| When requesting a particular story update, you can expand the assocaited updates by settined max_updates to the total you would like to get. If you want those updates to by condensed for reduced latency, you can set  condense_auxillary_updates to &#39;False&#39;. | [optional] [default to true] |

### Return type

[**\AskNews\Model\StoryResponse**](../Model/StoryResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
