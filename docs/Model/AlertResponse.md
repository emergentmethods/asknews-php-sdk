# # AlertResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**user_id** | **string** |  |
**query** | **string** |  | [optional]
**cron** | **string** |  |
**model** | **string** |  |
**share_link** | **string** |  | [optional]
**sources** | **array<string,mixed>[]** |  | [optional]
**report** | [**\AskNews\Model\Report**](Report.md) |  | [optional]
**triggers** | **array<string,mixed>[]** |  |
**always_trigger** | **bool** |  | [optional] [default to false]
**repeat** | **bool** |  | [optional] [default to true]
**active** | **bool** |  | [optional] [default to true]
**alert_type** | **string** |  | [optional]
**title** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
