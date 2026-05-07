# # RateLimitStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_rate** | **float** | Configured tokens replenished per second |
**request_rate_capacity** | **float** | Maximum burst token capacity |
**request_rate_remaining** | **float** | Effective available tokens right now (accounts for time elapsed since last request) |
**retry_after** | **float** |  | [optional]
**concurrency_limit** | **int** | Maximum allowed concurrent requests |
**concurrency_remaining** | **int** | Available concurrent request slots right now |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
