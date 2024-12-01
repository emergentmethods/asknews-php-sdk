<?php
/**
 * AskNews API
 *
 * AskNews API
 *
 * The version of the OpenAPI document: 0.15.5
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
 * AnalyticsApi Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalyticsApi
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
        'getAssetSentiment' => [
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
     * Operation getAssetSentiment
     *
     * Get a timeseries of finance news sentiment for assets
     *
     * @param  string $asset The asset name to query for sentiment. (required)
     * @param  string $metric The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily. (optional, default to 'news_positive')
     * @param  \DateTime $date_from The start date in ISO format (optional)
     * @param  \DateTime $date_to The end date in ISO format (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAssetSentiment'] to see the possible values for this operation
     *
     * @throws \AskNews\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \AskNews\Model\FinanceResponse|\AskNews\Model\ValidationErrorModel|\AskNews\Model\AbcAPIErrorModel29|\AskNews\Model\AbcAPIErrorModel30|\AskNews\Model\AbcAPIErrorModel31|\AskNews\Model\AbcAPIErrorModel32|\AskNews\Model\AsknewsApiErrorsAPIErrorModel
     */
    public function getAssetSentiment($asset, $metric = 'news_positive', $date_from = null, $date_to = null, string $contentType = self::contentTypes['getAssetSentiment'][0])
    {
        list($response) = $this->getAssetSentimentWithHttpInfo($asset, $metric, $date_from, $date_to, $contentType);
        return $response;
    }

    /**
     * Operation getAssetSentimentWithHttpInfo
     *
     * Get a timeseries of finance news sentiment for assets
     *
     * @param  string $asset The asset name to query for sentiment. (required)
     * @param  string $metric The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily. (optional, default to 'news_positive')
     * @param  \DateTime $date_from The start date in ISO format (optional)
     * @param  \DateTime $date_to The end date in ISO format (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAssetSentiment'] to see the possible values for this operation
     *
     * @throws \AskNews\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \AskNews\Model\FinanceResponse|\AskNews\Model\ValidationErrorModel|\AskNews\Model\AbcAPIErrorModel29|\AskNews\Model\AbcAPIErrorModel30|\AskNews\Model\AbcAPIErrorModel31|\AskNews\Model\AbcAPIErrorModel32|\AskNews\Model\AsknewsApiErrorsAPIErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAssetSentimentWithHttpInfo($asset, $metric = 'news_positive', $date_from = null, $date_to = null, string $contentType = self::contentTypes['getAssetSentiment'][0])
    {
        $request = $this->getAssetSentimentRequest($asset, $metric, $date_from, $date_to, $contentType);

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
                    if ('\AskNews\Model\FinanceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\FinanceResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\FinanceResponse', []),
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
                    if ('\AskNews\Model\AbcAPIErrorModel29' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel29' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel29', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\AskNews\Model\AbcAPIErrorModel30' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel30' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel30', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\AskNews\Model\AbcAPIErrorModel31' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel31' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel31', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\AskNews\Model\AbcAPIErrorModel32' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\AbcAPIErrorModel32' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\AbcAPIErrorModel32', []),
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

            $returnType = '\AskNews\Model\FinanceResponse';
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
                        '\AskNews\Model\FinanceResponse',
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
                        '\AskNews\Model\AbcAPIErrorModel29',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel30',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel31',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\AbcAPIErrorModel32',
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
     * Operation getAssetSentimentAsync
     *
     * Get a timeseries of finance news sentiment for assets
     *
     * @param  string $asset The asset name to query for sentiment. (required)
     * @param  string $metric The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily. (optional, default to 'news_positive')
     * @param  \DateTime $date_from The start date in ISO format (optional)
     * @param  \DateTime $date_to The end date in ISO format (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAssetSentiment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssetSentimentAsync($asset, $metric = 'news_positive', $date_from = null, $date_to = null, string $contentType = self::contentTypes['getAssetSentiment'][0])
    {
        return $this->getAssetSentimentAsyncWithHttpInfo($asset, $metric, $date_from, $date_to, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAssetSentimentAsyncWithHttpInfo
     *
     * Get a timeseries of finance news sentiment for assets
     *
     * @param  string $asset The asset name to query for sentiment. (required)
     * @param  string $metric The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily. (optional, default to 'news_positive')
     * @param  \DateTime $date_from The start date in ISO format (optional)
     * @param  \DateTime $date_to The end date in ISO format (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAssetSentiment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAssetSentimentAsyncWithHttpInfo($asset, $metric = 'news_positive', $date_from = null, $date_to = null, string $contentType = self::contentTypes['getAssetSentiment'][0])
    {
        $returnType = '\AskNews\Model\FinanceResponse';
        $request = $this->getAssetSentimentRequest($asset, $metric, $date_from, $date_to, $contentType);

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
     * Create request for operation 'getAssetSentiment'
     *
     * @param  string $asset The asset name to query for sentiment. (required)
     * @param  string $metric The metric to obtain. Weighted metrics account for page-rank of original source. Higher page rank sources are weighted more heavily. (optional, default to 'news_positive')
     * @param  \DateTime $date_from The start date in ISO format (optional)
     * @param  \DateTime $date_to The end date in ISO format (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAssetSentiment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAssetSentimentRequest($asset, $metric = 'news_positive', $date_from = null, $date_to = null, string $contentType = self::contentTypes['getAssetSentiment'][0])
    {

        // verify the required parameter 'asset' is set
        if ($asset === null || (is_array($asset) && count($asset) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asset when calling getAssetSentiment'
            );
        }





        $resourcePath = '/v1/analytics/finance/sentiment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $asset,
            'asset', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $metric,
            'metric', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_from,
            'date_from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_to,
            'date_to', // param base name
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
