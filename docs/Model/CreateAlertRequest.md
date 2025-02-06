# # CreateAlertRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** |  | [optional]
**cron** | **string** | The cron schedule for the alert. For example hourly is &#39;0 * * * *&#39;. See https://crontab.run/ for more examples |
**model** | **string** |  |
**share_link** | **string** |  | [optional]
**sources** | [**\AskNews\Model\SourcesInner[]**](SourcesInner.md) |  |
**report** | [**\AskNews\Model\ReportRequest**](ReportRequest.md) |  | [optional]
**triggers** | [**\AskNews\Model\TriggersInner[]**](TriggersInner.md) |  |
**always_trigger** | **bool** | Whether to always trigger the alert. Default is False. This skips the alert check and run triggers immediately | [optional] [default to false]
**repeat** | **bool** | Whether to repeat the alert. Default is True. If False, the alert will be disabled after it triggers once | [optional] [default to true]
**active** | **bool** | Whether the alert is active or not. Default is True. | [optional] [default to true]
**expires_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
