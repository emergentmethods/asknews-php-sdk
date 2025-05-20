# # CreateDeepNewsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** |  | [optional] [default to 'deepseek']
**messages** | [**\AskNews\Model\CreateDeepNewsRequestMessage[]**](CreateDeepNewsRequestMessage.md) |  |
**temperature** | **float** |  | [optional] [default to 0.9]
**top_p** | **float** |  | [optional] [default to 1.0]
**n** | **int** |  | [optional] [default to 1]
**stream** | **bool** |  | [optional] [default to false]
**stop** | [**\AskNews\Model\Stop**](Stop.md) |  | [optional]
**max_tokens** | **int** |  | [optional] [default to 9999]
**presence_penalty** | **int** |  | [optional] [default to 0]
**frequency_penalty** | **int** |  | [optional] [default to 0]
**user** | [**\AskNews\Model\User**](User.md) |  | [optional]
**thread_id** | [**\AskNews\Model\ThreadId1**](ThreadId1.md) |  | [optional]
**inline_citations** | **string** |  | [optional] [default to 'markdown_link']
**append_references** | **bool** |  | [optional] [default to true]
**journalist_mode** | **bool** |  | [optional] [default to true]
**asknews_watermark** | **bool** |  | [optional] [default to true]
**conversational_awareness** | **bool** |  | [optional] [default to true]
**filter_params** | [**\AskNews\Model\FilterParams1**](FilterParams1.md) |  | [optional]
**search_depth** | **int** |  | [optional] [default to 2]
**max_depth** | **int** |  | [optional] [default to 4]
**sources** | [**\AskNews\Model\Sources1**](Sources1.md) |  | [optional]
**return_sources** | **bool** |  | [optional] [default to true]
**include_coordinates** | **bool** |  | [optional] [default to false]
**include_entities** | **bool** |  | [optional] [default to true]
**include_graphs** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
