# # BodyBuildGraph

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Query string that can be any phrase, keyword, question, or paragraph. If method&#x3D;&#39;nl&#39;, then this will be used as a natural language query. If method&#x3D;&#39;kw&#39;, then this will be used as a direct keyword query. | [optional] [default to '']
**return_articles** | **bool** | Whether to return articles or not. | [optional] [default to false]
**min_cluster_probability** | **float** | Minimum cluster probability to use for disambiguation | [optional] [default to 0.9]
**geo_disambiguation** | **bool** | Whether to use geo disambiguation or not. | [optional] [default to false]
**filter_params** | **array<string,mixed>** |  | [optional]
**constrained_disambiguations** | **array<string,mixed>[]** |  | [optional]
**docs_upload** | **array<string,mixed>[]** |  | [optional]
**visualize_with** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
