# # CreateAlertRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | The query to run for the alert. |
**sources** | [**\AskNews\Model\SourcesInner[]**](SourcesInner.md) |  |
**alert_type** | **string** |  | [optional]
**model** | **string** | The model that is used to check if the alert conditions are satisfied by sources (this is not the same as the model used to write the report.)Defaults to gpt-4o. | [optional] [default to 'gpt-4o']
**cron** | **string** | How often or when to check sources for this alert, specified as a cron expression. Examples: &#39;*_/15 * * * *&#39; (every 15 minutes), &#39;0 * * * *&#39; (hourly), &#39;0 9 * * *&#39; (daily at 9am), &#39;0 9 * * 1&#39; (Mondays at 9am).  See https://crontab.run/ for more examples. |
**triggers** | [**\AskNews\Model\TriggersInner[]**](TriggersInner.md) |  |
**always_trigger** | **bool** | Whether to always trigger the actions when sources are scanned. This skips the check for if the alert conditions are satisfied and run triggers immediately. Defaults to False. | [optional] [default to false]
**repeat** | **bool** | Whether to repeat the alert. Default is True. If False, the alert will be disabled after it triggers once. | [optional] [default to true]
**active** | **bool** | Whether the alert is active or not. Default is True. | [optional] [default to true]
**expires_at** | **\DateTime** |  | [optional]
**report** | [**\AskNews\Model\ReportRequest**](ReportRequest.md) |  | [optional]
**title** | **string** |  | [optional]
**share_link** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
