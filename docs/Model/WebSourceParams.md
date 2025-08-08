# # WebSourceParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queries** | **string[]** | The queries to use for the web search. This is a list of strings. |
**domains** | **string[]** |  | [optional]
**strict** | **bool** | If true, the web search will only return results that have a known publication date and are within the lookback period. | [optional] [default to true]
**lookback** | **int** | The number of hours back to accept for the web search. If not provided, no lookback will be applied. | [optional] [default to 24]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
