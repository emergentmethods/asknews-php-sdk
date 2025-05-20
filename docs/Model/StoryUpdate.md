# # StoryUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** |  |
**cluster_articles** | [**\AskNews\Model\Article[]**](Article.md) |  |
**prompt_articles** | [**\AskNews\Model\Article[]**](Article.md) |  |
**n_articles** | **int** |  |
**entities** | [**\AskNews\Model\Entities**](Entities.md) |  |
**headline** | **string** |  |
**story** | **string** |  |
**story_update_ts** | **int** |  |
**sources_urls** | **array<string,int>** |  |
**languages_pct** | **array<string,float>** |  |
**countries_pct** | **array<string,float>** |  |
**key_takeaways** | **string[]** |  |
**contradictions** | **string[]** |  |
**continent** | **string** |  |
**people** | **string[]** |  |
**locations** | **string[]** |  |
**new_information** | **string** |  |
**image_url** | **string** |  |
**url_safe_title** | **string** |  |
**story_uuid** | **string** |  |
**categories** | **string[]** |  |
**image_prompt** | **string** |  |
**reddit_perspective** | [**\AskNews\Model\RedditPerspective**](RedditPerspective.md) |  |
**reddit_threads** | [**\AskNews\Model\RedditThread[]**](RedditThread.md) |  |
**languages** | **array<string,int>** |  |
**keywords** | **string[]** |  |
**intra_cluster_statistics** | [**\AskNews\Model\IntraClusterStatistics**](IntraClusterStatistics.md) |  |
**silhouette_score** | **array<string,mixed>** |  |
**article_ids** | **string[]** |  |
**countries** | **array<string,int>** |  |
**markdown_citations** | **string[]** |  |
**confidence** | **float** |  | [optional] [default to 0.0]
**provocative** | **string** |  | [optional] [default to 'unknown']
**reporting_voice** | **string** |  | [optional] [default to 'Reporting voice unknown.']
**relationships** | [**\AskNews\Model\AsknewsApiSchemaV1StoriesGraphRelationships**](AsknewsApiSchemaV1StoriesGraphRelationships.md) |  |
**mermaid** | **string** |  |
**cc_image_url** | **string** |  |
**display_image_urls** | [**\AskNews\Model\StoryUpdateDisplayImageUrlsInner[]**](StoryUpdateDisplayImageUrlsInner.md) |  |
**alignment** | **int** |  | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
