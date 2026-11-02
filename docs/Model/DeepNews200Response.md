# # DeepNews200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**created** | **int** |  |
**object** | **string** |  | [optional] [default to 'chat.completion.source.batch']
**model** | **string** |  | [optional] [default to 'claude-sonnet-5']
**usage** | [**\AskNews\Model\CreateDeepNewsResponseUsage2**](CreateDeepNewsResponseUsage2.md) |  |
**choices** | [**\AskNews\Model\CreateDeepNewsResponseStreamChunkChoiceV21[]**](CreateDeepNewsResponseStreamChunkChoiceV21.md) |  |
**source** | [**\AskNews\Model\Source**](Source.md) |  |
**turn_index** | **int** |  |
**call_index** | **int** |  |
**calls_in_turn** | **int** |  |
**tool_call_id** | **string** |  |
**tool_name** | **string** |  |
**kind** | **string** |  |
**status** | **string** |  |
**source_ids** | **string[]** |  | [optional]
**sources** | [**\AskNews\Model\CreateDeepNewsResponseStreamSourceBatch1SourcesInner[]**](CreateDeepNewsResponseStreamSourceBatch1SourcesInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
