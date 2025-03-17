<?php
/**
 * AskNews API
 *
 * AskNews API
 *
 * The version of the OpenAPI document: 0.18.2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */


namespace AskNews\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AskNews\AccessToken;
use AskNews\ApiException;
use AskNews\Configuration;
use AskNews\HeaderSelector;
use AskNews\ObjectSerializer;

/**
 * RedditApi Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RedditApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'searchReddit' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation searchReddit
     *
     * Search Reddit, summarize threads, and return analysis.
     *
     * @param  string[] $keywords Keywords used to search for relevant Reddit threads. (required)
     * @param  int $n_threads Number of Reddit threads to summarize and return (optional, default to 5)
     * @param  string $method The search method. Can be &#39;nl&#39; or &#39;kw&#39;. If &#39;nl&#39;, then the query will be used as a natural language query. If &#39;kw&#39;, then the query will be used as a direct keyword query. (optional, default to 'kw')
     * @param  bool $deep Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep&#x3D;False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads (optional, default to false)
     * @param  string $return_type The return type. Can be &#39;dicts&#39;, &#39;string&#39;, or &#39;both&#39;. (optional, default to 'string')
     * @param  string $time_filter The time filter. (optional, default to 'day')
     * @param  string $sort The sort order. (optional, default to 'relevance')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchReddit'] to see the possible values for this operation
     *
     * @throws \AskNews\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \AskNews\Model\RedditResponse|\AskNews\Model\ValidationErrorModel|\AskNews\Model\AbcAPIErrorModel45|\AskNews\Model\AbcAPIErrorModel46|\AskNews\Model\AbcAPIErrorModel47|\AskNews\Model\AbcAPIErrorModel48|\AskNews\Model\AsknewsApiErrorsAPIErrorModel
     */
    public function searchReddit($keywords, $n_threads = 5, $method = 'kw', $deep = false, $return_type = 'string', $time_filter = 'day', $sort = 'relevance', string $contentType = self::contentTypes['searchReddit'][0])
    {
        list($response) = $this->searchRedditWithHttpInfo($keywords, $n_threads, $method, $deep, $return_type, $time_filter, $sort, $contentType);
        return $response;
    }

    /**
     * Operation searchRedditWithHttpInfo
     *
     * Search Reddit, summarize threads, and return analysis.
     *
     * @param  string[] $keywords Keywords used to search for relevant Reddit threads. (required)
     * @param  int $n_threads Number of Reddit threads to summarize and return (optional, default to 5)
     * @param  string $method The search method. Can be &#39;nl&#39; or &#39;kw&#39;. If &#39;nl&#39;, then the query will be used as a natural language query. If &#39;kw&#39;, then the query will be used as a direct keyword query. (optional, default to 'kw')
     * @param  bool $deep Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep&#x3D;False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads (optional, default to false)
     * @param  string $return_type The return type. Can be &#39;dicts&#39;, &#39;string&#39;, or &#39;both&#39;. (optional, default to 'string')
     * @param  string $time_filter The time filter. (optional, default to 'day')
     * @param  string $sort The sort order. (optional, default to 'relevance')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchReddit'] to see the possible values for this operation
     *
     * @throws \AskNews\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \AskNews\Model\RedditResponse|\AskNews\Model\ValidationErrorModel|\AskNews\Model\AbcAPIErrorModel45|\AskNews\Model\AbcAPIErrorModel46|\AskNews\Model\AbcAPIErrorModel47|\AskNews\Model\AbcAPIErrorModel48|\AskNews\Model\AsknewsApiErrorsAPIErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchRedditWithHttpInfo($keywords, $n_threads = 5, $method = 'kw', $deep = false, $return_type = 'string', $time_filter = 'day', $sort = 'relevance', string $contentType = self::contentTypes['searchReddit'][0])
    {
        $request = $this->searchRedditRequest($keywords, $n_threads, $method, $deep, $return_type, $time_filter, $sort, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\AskNews\Model\RedditResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\RedditResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\RedditResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AskNews\Model\ValidationErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\ValidationErrorModel' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\ValidationErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\AskNews\Model\AbcAPIErrorModel45' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel45' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel45', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\AskNews\Model\AbcAPIErrorModel46' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel46' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel46', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\AskNews\Model\AbcAPIErrorModel47' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel47' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel47', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\AskNews\Model\AbcAPIErrorModel48' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel48' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel48', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\AskNews\Model\AsknewsApiErrorsAPIErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AsknewsApiErrorsAPIErrorModel' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AsknewsApiErrorsAPIErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AskNews\Model\RedditResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\RedditResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\ValidationErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel45',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel46',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel47',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel48',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AsknewsApiErrorsAPIErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchRedditAsync
     *
     * Search Reddit, summarize threads, and return analysis.
     *
     * @param  string[] $keywords Keywords used to search for relevant Reddit threads. (required)
     * @param  int $n_threads Number of Reddit threads to summarize and return (optional, default to 5)
     * @param  string $method The search method. Can be &#39;nl&#39; or &#39;kw&#39;. If &#39;nl&#39;, then the query will be used as a natural language query. If &#39;kw&#39;, then the query will be used as a direct keyword query. (optional, default to 'kw')
     * @param  bool $deep Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep&#x3D;False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads (optional, default to false)
     * @param  string $return_type The return type. Can be &#39;dicts&#39;, &#39;string&#39;, or &#39;both&#39;. (optional, default to 'string')
     * @param  string $time_filter The time filter. (optional, default to 'day')
     * @param  string $sort The sort order. (optional, default to 'relevance')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchReddit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchRedditAsync($keywords, $n_threads = 5, $method = 'kw', $deep = false, $return_type = 'string', $time_filter = 'day', $sort = 'relevance', string $contentType = self::contentTypes['searchReddit'][0])
    {
        return $this->searchRedditAsyncWithHttpInfo($keywords, $n_threads, $method, $deep, $return_type, $time_filter, $sort, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchRedditAsyncWithHttpInfo
     *
     * Search Reddit, summarize threads, and return analysis.
     *
     * @param  string[] $keywords Keywords used to search for relevant Reddit threads. (required)
     * @param  int $n_threads Number of Reddit threads to summarize and return (optional, default to 5)
     * @param  string $method The search method. Can be &#39;nl&#39; or &#39;kw&#39;. If &#39;nl&#39;, then the query will be used as a natural language query. If &#39;kw&#39;, then the query will be used as a direct keyword query. (optional, default to 'kw')
     * @param  bool $deep Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep&#x3D;False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads (optional, default to false)
     * @param  string $return_type The return type. Can be &#39;dicts&#39;, &#39;string&#39;, or &#39;both&#39;. (optional, default to 'string')
     * @param  string $time_filter The time filter. (optional, default to 'day')
     * @param  string $sort The sort order. (optional, default to 'relevance')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchReddit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchRedditAsyncWithHttpInfo($keywords, $n_threads = 5, $method = 'kw', $deep = false, $return_type = 'string', $time_filter = 'day', $sort = 'relevance', string $contentType = self::contentTypes['searchReddit'][0])
    {
        $returnType = '\AskNews\Model\RedditResponse';
        $request = $this->searchRedditRequest($keywords, $n_threads, $method, $deep, $return_type, $time_filter, $sort, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchReddit'
     *
     * @param  string[] $keywords Keywords used to search for relevant Reddit threads. (required)
     * @param  int $n_threads Number of Reddit threads to summarize and return (optional, default to 5)
     * @param  string $method The search method. Can be &#39;nl&#39; or &#39;kw&#39;. If &#39;nl&#39;, then the query will be used as a natural language query. If &#39;kw&#39;, then the query will be used as a direct keyword query. (optional, default to 'kw')
     * @param  bool $deep Deep means that AskNews goes directly to Reddit, searches live, summarizes the threads live, and returns structured data for you. Deep&#x3D;False means that AskNews looks in its existing database of Reddit threads and returns the most similar threads (optional, default to false)
     * @param  string $return_type The return type. Can be &#39;dicts&#39;, &#39;string&#39;, or &#39;both&#39;. (optional, default to 'string')
     * @param  string $time_filter The time filter. (optional, default to 'day')
     * @param  string $sort The sort order. (optional, default to 'relevance')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchReddit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchRedditRequest($keywords, $n_threads = 5, $method = 'kw', $deep = false, $return_type = 'string', $time_filter = 'day', $sort = 'relevance', string $contentType = self::contentTypes['searchReddit'][0])
    {

        // verify the required parameter 'keywords' is set
        if ($keywords === null || (is_array($keywords) && count($keywords) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keywords when calling searchReddit'
            );
        }








        $resourcePath = '/v1/reddit/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $keywords,
            'keywords', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $n_threads,
            'n_threads', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $method,
            'method', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $deep,
            'deep', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $return_type,
            'return_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $time_filter,
            'time_filter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        if (!empty($this->config->getAccessToken())) {
            $now = time();
            $buffer = 10;
            if ($this->config->getAccessToken()->expires - $buffer < $now) {
                $this->config->setAccessToken(null);
            }
        }

        if (empty($this->config->getAccessToken()) && !empty($this->config->getClientId()) && !empty($this->config->getClientSecret()) && !empty($this->config->getScopes())) {
            $response = $this->client->send(new Request(
                'POST',
                $this->config->getAuthUrl(),
                [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'User-Agent' => $this->config->getUserAgent(),
                    'Authorization' => 'Basic ' . base64_encode($this->config->getClientId() . ':' . $this->config->getClientSecret())
                ],
                http_build_query([
                    'grant_type' => 'client_credentials',
                    'scope' => implode(' ', $this->config->getScopes()),
                ])
            ));

            $data = json_decode($response->getBody()->getContents());
            $this->config->setAccessToken(
                new AccessToken($data->token_type, $data->access_token, $data->expires_in + time(), $this->config->getScopes())
            );
        }

        if (!empty($this->config->getAccessToken())) {
            $token = $this->config->getAccessToken();
            $headers['Authorization'] = $token->tokenType . ' ' . $token->tokenValue;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
