# # MCPFilterParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Query string that can be any phrase, keyword, question, or paragraph. If method&#x3D;&#39;nl&#39;, then this will be used as a natural language query. If method&#x3D;&#39;kw&#39;, then this will be used as a direct keyword query. This is not required, if it is not passed, then the search is based on the remaining filters only. | [optional] [default to '']
**n_articles** | **int** | Number of articles to return | [optional] [default to 10]
**start_timestamp** | **int** |  | [optional]
**end_timestamp** | **int** |  | [optional]
**time_filter** | **string** | Control which date type to filter on. &#39;crawl_date&#39; is the date the article was crawled, &#39;pub_date&#39; is the date the article was published. | [optional] [default to 'crawl_date']
**offset** | [**\AskNews\Model\Offset3**](Offset3.md) |  | [optional]
**categories** | **string[]** | Categories of news to filter on | [optional]
**provocative** | **string** | Filter articles based on how provocative they are deemed based on the use of provocative language and emotional vocabulary. | [optional] [default to 'all']
**authors** | **string[]** |  | [optional]
**reporting_voice** | [**\AskNews\Model\ReportingVoice2**](ReportingVoice2.md) |  | [optional]
**domain_url** | [**\AskNews\Model\DomainUrl1**](DomainUrl1.md) |  | [optional]
**bad_domain_url** | [**\AskNews\Model\BadDomainUrl2**](BadDomainUrl2.md) |  | [optional]
**page_rank** | **int** |  | [optional]
**hours_back** | **int** | Can be set to easily control the look back on the search. This is the same as controlling the &#39;start_timestamp&#39; parameter. The difference is that this is not a timestamp, it is the number of hours back to look from the current time. Defaults to 24 hours. | [optional] [default to 24]
**string_guarantee** | **string[]** |  | [optional]
**string_guarantee_op** | **string** | Operator to use for string guarantee list. | [optional] [default to 'AND']
**reverse_string_guarantee** | **string[]** |  | [optional]
**entity_guarantee** | **string[]** |  | [optional]
**reverse_entity_guarantee** | **string[]** |  | [optional]
**entity_guarantee_op** | **string** | Operator to use for entity guarantee list. | [optional] [default to 'OR']
**languages** | **string[]** |  | [optional]
**countries** | **string[]** |  | [optional]
**countries_blacklist** | **string[]** |  | [optional]
**continents** | **string[]** |  | [optional]
**sentiment** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
