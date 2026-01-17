# AskNews\ChatApi

All URIs are relative to https://api.asknews.dev, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deepNews()**](ChatApi.md#deepNews) | **POST** /v1/chat/deepnews | Deep research into real-time news, archive news, and Google. |
| [**getChatCompletions()**](ChatApi.md#getChatCompletions) | **POST** /v1/openai/chat/completions | Get chat completions from a news-infused AI assistant |
| [**getHeadlineQuestions()**](ChatApi.md#getHeadlineQuestions) | **GET** /v1/chat/questions | Get example headline questions |
| [**listChatModels()**](ChatApi.md#listChatModels) | **GET** /v1/openai/models | List available chat models |


## `deepNews()`

```php
deepNews($create_deep_news_request): \AskNews\Model\CreateDeepNewsResponse1
```

Deep research into real-time news, archive news, and Google.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_deep_news_request = new \AskNews\Model\CreateDeepNewsRequest(); // \AskNews\Model\CreateDeepNewsRequest

try {
    $result = $apiInstance->deepNews($create_deep_news_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->deepNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_deep_news_request** | [**\AskNews\Model\CreateDeepNewsRequest**](../Model/CreateDeepNewsRequest.md)|  | |

### Return type

[**\AskNews\Model\CreateDeepNewsResponse1**](../Model/CreateDeepNewsResponse1.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatCompletions()`

```php
getChatCompletions($create_chat_completion_request): \AskNews\Model\CreateChatCompletionResponse1
```

Get chat completions from a news-infused AI assistant

Get the chat completions for a given user message. This endpoint follows the OpenAI API spec. It includes a couple extra params, which include:  - **journalist_mode**: Whether to activate an auto prompt that is more keen on AP styling, citations, and fair reporting. Setting to false, you get a vanilla LLM with the news pre added to the system prompt. No other prompting. - **inline_citations**: Decides how you want the bot to cite sources. It can use brackets, or it can also include the markdown with URL automatically. - **asknews_watermark**: Whether to include the AskNews watermark in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_chat_completion_request = new \AskNews\Model\CreateChatCompletionRequest(); // \AskNews\Model\CreateChatCompletionRequest

try {
    $result = $apiInstance->getChatCompletions($create_chat_completion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatCompletions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_chat_completion_request** | [**\AskNews\Model\CreateChatCompletionRequest**](../Model/CreateChatCompletionRequest.md)|  | |

### Return type

[**\AskNews\Model\CreateChatCompletionResponse1**](../Model/CreateChatCompletionResponse1.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeadlineQuestions()`

```php
getHeadlineQuestions($queries): array<string,string[]>
```

Get example headline questions

Get the headline example questions related to the given queries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queries = array('queries_example'); // string[] | Queries to get questions for

try {
    $result = $apiInstance->getHeadlineQuestions($queries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getHeadlineQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queries** | [**string[]**](../Model/string.md)| Queries to get questions for | [optional] |

### Return type

**array<string,string[]>**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChatModels()`

```php
listChatModels(): \AskNews\Model\ListModelResponse
```

List available chat models

List the available chat models.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new AskNews\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listChatModels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->listChatModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AskNews\Model\ListModelResponse**](../Model/ListModelResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
