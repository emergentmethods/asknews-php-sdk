<?php
/**
 * AskNews API
 *
 * AskNews API
 *
 * The version of the OpenAPI document: 0.16.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */


namespace AskNews;

/**
 * Configuration Class Doc Comment
 * PHP version 8.0
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Configuration
{
    public const BOOLEAN_FORMAT_INT = 'int';
    public const BOOLEAN_FORMAT_STRING = 'string';

    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Boolean format for query string
     *
     * @var string
     */
    protected $booleanFormatForQueryString = self::BOOLEAN_FORMAT_INT;

    /**
     * Client id for oauth2 security
     *
     * @var string
     */
    protected $clientId = '';

    /**
     * Client secret for oauth2 security
     *
     * @var string
     */
    protected $clientSecret = '';

    /**
     * Scopes for oauth2 security
     *
     * @var array
     */
    protected $scopes = [];

    /**
     * Access token
     *
     * @var AccessToken
     */
    protected ?AccessToken $accessToken;

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.asknews.app';

    /**
     * Auth url
     *
     * @var string
     */
    protected $authUrl = 'https://auth.asknews.app/oauth2/token';

    /**
     * User agent of the HTTP request
     *
     * @var string
     */
    protected $userAgent = 'asknews-sdk-php-0.2.27';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct(array $_configuration = [])
    {
        $this->tempFolderPath = sys_get_temp_dir();

        $this->accessToken = null;
        if (!empty($_configuration)) {
            foreach ($_configuration as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        }
    }

    /**
     * Sets boolean format for query string.
     *
     * @param string $booleanFormat Boolean format for query string
     *
     * @return $this
     */
    public function setBooleanFormatForQueryString(string $booleanFormat)
    {
        $this->booleanFormatForQueryString = $booleanFormat;

        return $this;
    }

    /**
     * Gets boolean format for query string.
     *
     * @return string Boolean format for query string
     */
    public function getBooleanFormatForQueryString(): string
    {
        return $this->booleanFormatForQueryString;
    }

    /**
     * Sets the client secret for oauth2 security
     *
     * @param string $clientId Client id for oauth2 security
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * Gets the client id for oauth2 security
     *
     * @return string Client id for oauth2 security
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Sets the client secret for oauth2 security
     *
     * @param string $clientSecret Client secret for oauth2 security
     *
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * Gets the client secret for oauth2 security
     *
     * @return string Client secret for oauth2 security
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Sets the scopes for oauth2 security
     *
     * @param array $scopes Scopes for oauth2 security
     *
     * @return $this
     */
    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;
        return $this;
    }

    /**
     * Gets the scopes for oauth2 security
     *
     * @return array Scopes for oauth2 security
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Set access token
     *
     * @param ?AccessToken $accessToken Access token
     *
     * @return $this
     */
    public function setAccessToken(?AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Get access token
     *
     * @return AccessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the auth url
     *
     * @param string $authUrl Auth url
     *
     * @return $this
     */
    public function setAuthUrl($authUrl)
    {
        $this->authUrl = $authUrl;
        return $this;
    }

    /**
     * Gets the auth url
     *
     * @return string Auth url
     */
    public function getAuthUrl()
    {
        return $this->authUrl;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (AskNews) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 0.16.0' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                "url" => "https://api.asknews.app",
                "description" => "No description provided",
            ]
        ];
    }

    /**
    * Returns URL based on host settings, index and variables
    *
    * @param array      $hostSettings array of host settings, generated from getHostSettings() or equivalent from the API clients
    * @param int        $hostIndex    index of the host settings
    * @param array|null $variables    hash of variable and the corresponding value (optional)
    * @return string URL based on host settings
    */
    public static function getHostString(array $hostSettings, $hostIndex, array $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        // check array index out of bound
        if ($hostIndex < 0 || $hostIndex >= count($hostSettings)) {
            throw new \InvalidArgumentException("Invalid index $hostIndex when selecting the host. Must be less than ".count($hostSettings));
        }

        $host = $hostSettings[$hostIndex];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (!isset($variable['enum_values']) || in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int        $index     index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        return self::getHostString($this->getHostSettings(), $index, $variables);
    }
}
