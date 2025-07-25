<?php
/**
 * AskNews API
 *
 * AskNews API
 *
 * The version of the OpenAPI document: 0.19.6
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * AutofilterApi Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AutofilterApi
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
        'autofilter' => [
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
     * Operation autofilter
     *
     * Generate filter params for AskNews endpoints
     *
     * @param  string $query A description of what kind of news you want to get. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['autofilter'] to see the possible values for this operation
     *
     * @throws \AskNews\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \AskNews\Model\FilterParamsResponse|\AskNews\Model\HTTPValidationError
     */
    public function autofilter($query, string $contentType = self::contentTypes['autofilter'][0])
    {
        list($response) = $this->autofilterWithHttpInfo($query, $contentType);
        return $response;
    }

    /**
     * Operation autofilterWithHttpInfo
     *
     * Generate filter params for AskNews endpoints
     *
     * @param  string $query A description of what kind of news you want to get. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['autofilter'] to see the possible values for this operation
     *
     * @throws \AskNews\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \AskNews\Model\FilterParamsResponse|\AskNews\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function autofilterWithHttpInfo($query, string $contentType = self::contentTypes['autofilter'][0])
    {
        $request = $this->autofilterRequest($query, $contentType);

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
                    if ('\AskNews\Model\FilterParamsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\FilterParamsResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\FilterParamsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AskNews\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AskNews\Model\HTTPValidationError' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\AskNews\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AskNews\Model\FilterParamsResponse';
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
                        '\AskNews\Model\FilterParamsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AskNews\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation autofilterAsync
     *
     * Generate filter params for AskNews endpoints
     *
     * @param  string $query A description of what kind of news you want to get. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['autofilter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function autofilterAsync($query, string $contentType = self::contentTypes['autofilter'][0])
    {
        return $this->autofilterAsyncWithHttpInfo($query, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation autofilterAsyncWithHttpInfo
     *
     * Generate filter params for AskNews endpoints
     *
     * @param  string $query A description of what kind of news you want to get. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['autofilter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function autofilterAsyncWithHttpInfo($query, string $contentType = self::contentTypes['autofilter'][0])
    {
        $returnType = '\AskNews\Model\FilterParamsResponse';
        $request = $this->autofilterRequest($query, $contentType);

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
     * Create request for operation 'autofilter'
     *
     * @param  string $query A description of what kind of news you want to get. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['autofilter'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function autofilterRequest($query, string $contentType = self::contentTypes['autofilter'][0])
    {

        // verify the required parameter 'query' is set
        if ($query === null || (is_array($query) && count($query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query when calling autofilter'
            );
        }


        $resourcePath = '/v1/chat/autofilter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $query,
            'query', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
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
