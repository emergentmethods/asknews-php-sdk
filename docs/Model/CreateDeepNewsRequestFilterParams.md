# # CreateDeepNewsRequestFilterParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Query string that can be any phrase, keyword, question, or paragraph. If method&#x3D;&#39;nl&#39;, then this will be used as a natural language query. If method&#x3D;&#39;kw&#39;, then this will be used as a direct keyword query. This is not required, if it is not passed, then the search is based on the remaining filters only. | [optional] [default to '']
**n_articles** | **int** | Number of articles to return | [optional] [default to 10]
**start_timestamp** | **int** |  | [optional]
**end_timestamp** | **int** |  | [optional]
**time_filter** | **string** | Control which date type to filter on. &#39;crawl_date&#39; is the date the article was crawled, &#39;pub_date&#39; is the date the article was published. | [optional] [default to 'crawl_date']
**return_type** | **string** | Type of return value. &#39;string&#39; means that the return is prompt-optimized and ready to be immediately injected into any prompt. &#39;dicts&#39; means that the return is a structured dictionary, containing additional metadata (like a classic news api). Can be &#39;string&#39; or &#39;dicts&#39;, or &#39;both&#39;. &#39;string&#39; guarantees the lowest-latency response &#39;dicts&#39; requires more I/O, therefore increases latency (very slightly, depending on your network connection). | [optional] [default to 'dicts']
**historical** | **bool** | Search on archive of historical news. Defaults to False, meaning that the search will only look through the most recent news (48 hours) | [optional] [default to false]
**method** | **string** | Method to use for searching. &#39;nl&#39; means Natural Language, which is a string that can be any phrase, keyword, question, or paragraph that will be used for semantic search on the news. &#39;kw&#39; means Keyword, which can also be any keyword(s), phrase, or paragraph, however the search is a direct keyword search on the database. &#39;both&#39; means both methods will be used and results will be ranked according to IRR. &#39;both&#39; may reduce latency by 10 pct in exchange  for improved accuracy. | [optional] [default to 'kw']
**similarity_score_threshold** | **float** | Similarity score threshold to determine which articles to return. Lower means less similar results  are allowed. | [optional] [default to 0.5]
**offset** | [**\AskNews\Model\Offset2**](Offset2.md) |  | [optional]
**categories** | **string[]** | Categories of news to filter on | [optional]
**doc_start_delimiter** | **string** | Document start delimiter for string return. | [optional] [default to '<doc>']
**doc_end_delimiter** | **string** | Document end delimiter for string return. | [optional] [default to '</doc>']
**provocative** | **string** | Filter articles based on how provocative they are deemed based on the use of provocative language and emotional vocabulary. | [optional] [default to 'all']
**reporting_voice** | [**\AskNews\Model\ReportingVoice2**](ReportingVoice2.md) |  | [optional]
**domain_url** | [**\AskNews\Model\DomainUrl1**](DomainUrl1.md) |  | [optional]
**bad_domain_url** | [**\AskNews\Model\BadDomainUrl2**](BadDomainUrl2.md) |  | [optional]
**page_rank** | **int** |  | [optional]
**diversify_sources** | **bool** | Ensure that the return set of articles are selected from diverse sources. This adds latency to the search, but attempts to balance the representation of sources by country and source origins. In summary, a net is cast around your search, then the diversity of sources is analyzed, and your final result matches the large net diversity distribution. This means that your search accuracy is reduced, but you gain more diverse perspectives. | [optional] [default to false]
**strategy** | **string** | Strategy to use for searching. &#39;latest news&#39; automatically setsmethod&#x3D;&#39;nl&#39;, historical&#x3D;False, and looks within the past 24 hours. &#39;news knowledge&#39; automatically sets method&#x3D;&#39;kw&#39;, historical&#x3D;True, and looks within the past 60 days. &#39;news knowledge&#39; will increase latency due to the  larger search space in the archive. Use &#39;default&#39; if you want to control  start_timestamp, end_timestamp, historical, and method. | [optional] [default to 'default']
**hours_back** | **int** | Can be set to easily control the look back on the search. This is the same as controlling the &#39;start_timestamp&#39; parameter. The difference is that this is not a timestamp, it is the number of hours back to look from the current time. Defaults to 24 hours. | [optional] [default to 24]
**string_guarantee** | **string[]** |  | [optional]
**string_guarantee_op** | **string** | Operator to use for string guarantee list. | [optional] [default to 'AND']
**reverse_string_guarantee** | **string[]** |  | [optional]
**entity_guarantee** | **string[]** |  | [optional]
**reverse_entity_guarantee** | **string[]** |  | [optional]
**entity_guarantee_op** | **string** | Operator to use for entity guarantee list. | [optional] [default to 'OR']
**return_graphs** | **bool** | Return graphs for the articles. Only available to Analyst tier and above. | [optional] [default to false]
**return_geo** | **bool** | Return GeoCoordinates associated with locations discussed  inside the articles. Only available to Analyst tier and above. | [optional] [default to false]
**languages** | **string[]** |  | [optional]
**countries** | **string[]** |  | [optional]
**countries_blacklist** | **string[]** |  | [optional]
**continents** | **string[]** |  | [optional]
**sentiment** | **string** |  | [optional]
**premium** | **bool** | Include premium sources. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
