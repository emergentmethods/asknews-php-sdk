# # RateLimitStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_rate** | **float** | Configured requests replenished per second |
**request_rate_capacity** | **float** | Maximum burst token capacity |
**request_rate_remaining** | **float** | Effective available requests right now (accounts for time elapsed since last request) |
**retry_after** | **float** |  | [optional]
**concurrency_limit** | **int** | Maximum allowed concurrent requests |
**concurrency_remaining** | **int** | Available concurrent request slots right now |
**deepnews_request_rate** | **float** | Configured deepnews requests replenished per second |
**deepnews_request_rate_capacity** | **float** | Maximum deepnews burst token capacity |
**deepnews_request_rate_remaining** | **float** | Effective available deepnews requests right now (accounts for time elapsed since last request) |
**deepnews_retry_after** | **float** |  | [optional]
**deepnews_concurrency_limit** | **int** | Maximum allowed concurrent deepnews requests |
**deepnews_concurrency_remaining** | **int** | Available concurrent deepnews request slots right now |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
