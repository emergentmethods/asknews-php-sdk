# # CreateNewsletterRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the newsletter. |
**query** | **string** | The natural language query to run for the newsletter. |
**cron** | **string** | The cron schedule for the newsletter. For example daily at 00:00 UTC is &#39;0 0 * * *&#39;. See https://crontab.run/ for more examples |
**model** | **string** | The model to use for the newsletter. |
**subject** | **string** |  | [optional]
**sender** | **string** | The sender of the newsletter. |
**logo_url** | **string** |  | [optional]
**reply_to** | **string** |  | [optional]
**audience_id** | **string** |  | [optional]
**resend_api_key** | **string** |  | [optional]
**public** | **bool** | Whether the newsletter is public or not. If not provided, the newsletter will be public. If you make the newsletter public only title and query will be shown. | [optional] [default to true]
**active** | **bool** | Whether the newsletter is active or not. If not provided, the newsletter will be active. If you make the newsletter inactive, it will not be sent. | [optional] [default to true]
**expires_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
