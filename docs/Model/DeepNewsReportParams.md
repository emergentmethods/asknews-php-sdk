# # DeepNewsReportParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sources** | [**\AskNews\Model\Sources2**](Sources2.md) |  | [optional]
**filter_params** | [**\AskNews\Model\FilterParams**](FilterParams.md) |  | [optional]
**include_entities** | **bool** | Whether to provide extracted entities to the agent. Defaults to True. | [optional] [default to true]
**include_graphs** | **bool** | Whether to provide knowledge graphs to the agent. Defaults to False. | [optional] [default to false]
**include_coordinates** | **bool** | Whether to provide geo coordinates to the agent. Defaults to False. | [optional] [default to false]
**model** | [**\AskNews\Model\DeepNewsModel**](DeepNewsModel.md) |  | [optional]
**search_depth** | **int** | The search depth for deep research. Higher values mean more thorough research. Defaults to 2. | [optional] [default to 2]
**max_depth** | **int** | The maximum research depth allowed. Defaults to 4. | [optional] [default to 4]
**start_citation_number** | **int** | Starting number for inline citations. Offsets fetched source citation keys. Useful if you are providing the agent outside sources with numbered citation keys. Defaults to 1. | [optional] [default to 1]
**journalist_mode** | **bool** | Whether to use journalist mode for more factual reporting. Defaults to True. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
