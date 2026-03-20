# # DeepNewsSourceParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sources** | [**\AskNews\Model\Sources2**](Sources2.md) |  | [optional]
**filter_params** | [**\AskNews\Model\MCPFilterParams**](MCPFilterParams.md) |  | [optional]
**include_entities** | **bool** | Whether to provide extracted entities to the agent. Defaults to True. | [optional] [default to true]
**include_graphs** | **bool** | Whether to provide knowledge graphs to the agent. Defaults to False. | [optional] [default to false]
**include_coordinates** | **bool** | Whether to provide geo coordinates to the agent. Defaults to False. | [optional] [default to false]
**engine** | **string** | Legacy vs new DeepNews engine | [optional] [default to 'v1']
**max_parallel_tool_calls** | **int** | The number of tool calls the agent can run in parallel. | [optional] [default to 1]
**model** | [**\AskNews\Model\DeepNewsModel**](DeepNewsModel.md) |  | [optional]
**search_depth** | **int** | The search depth for deep research. Higher values mean more thorough research. Defaults to 1. | [optional] [default to 1]
**max_depth** | **int** | The maximum research depth allowed. Defaults to 4. | [optional] [default to 4]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
