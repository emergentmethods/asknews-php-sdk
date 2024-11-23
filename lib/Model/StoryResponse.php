<?php
/**
 * StoryResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AskNews API
 *
 * AskNews API
 *
 * The version of the OpenAPI document: 0.15.2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AskNews\Model;

use \ArrayAccess;
use \AskNews\ObjectSerializer;

/**
 * StoryResponse Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StoryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'categories' => 'string[]',
        'countries' => 'array<string,int>',
        'countries_pct' => 'array<string,float>',
        'current_update_uuid' => 'string',
        'requested_update_uuid' => 'string',
        'generate_image' => 'bool',
        'keywords' => 'string[]',
        'languages' => 'array<string,int>',
        'languages_pct' => 'array<string,float>',
        'locations' => 'string[]',
        'meta_type' => 'string',
        'n_articles' => 'int[]',
        'n_updates' => 'int',
        'people' => 'string[]',
        'reddit_sentiment' => '\AskNews\Model\ClusterProbabilities[]',
        'reddit_sentiment_timestamps' => 'int[]',
        'rolling_sentiment' => 'float[]',
        'sentiment' => 'int[]',
        'sentiment_timestamps' => 'int[]',
        'sources' => 'array<string,int>',
        'sources_urls' => 'array<string,int>',
        'topic' => 'string',
        'topics' => 'string[]',
        'updates' => '\AskNews\Model\StoryUpdate[]',
        'updated_ts' => 'int',
        'update_uuids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'categories' => null,
        'countries' => null,
        'countries_pct' => null,
        'current_update_uuid' => null,
        'requested_update_uuid' => null,
        'generate_image' => null,
        'keywords' => null,
        'languages' => null,
        'languages_pct' => null,
        'locations' => null,
        'meta_type' => null,
        'n_articles' => null,
        'n_updates' => null,
        'people' => null,
        'reddit_sentiment' => null,
        'reddit_sentiment_timestamps' => null,
        'rolling_sentiment' => null,
        'sentiment' => null,
        'sentiment_timestamps' => null,
        'sources' => null,
        'sources_urls' => null,
        'topic' => null,
        'topics' => null,
        'updates' => null,
        'updated_ts' => null,
        'update_uuids' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uuid' => false,
        'categories' => false,
        'countries' => false,
        'countries_pct' => false,
        'current_update_uuid' => false,
        'requested_update_uuid' => false,
        'generate_image' => false,
        'keywords' => false,
        'languages' => false,
        'languages_pct' => false,
        'locations' => false,
        'meta_type' => false,
        'n_articles' => false,
        'n_updates' => false,
        'people' => false,
        'reddit_sentiment' => false,
        'reddit_sentiment_timestamps' => false,
        'rolling_sentiment' => false,
        'sentiment' => false,
        'sentiment_timestamps' => false,
        'sources' => false,
        'sources_urls' => false,
        'topic' => false,
        'topics' => false,
        'updates' => false,
        'updated_ts' => false,
        'update_uuids' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
        'categories' => 'categories',
        'countries' => 'countries',
        'countries_pct' => 'countries_pct',
        'current_update_uuid' => 'current_update_uuid',
        'requested_update_uuid' => 'requested_update_uuid',
        'generate_image' => 'generate_image',
        'keywords' => 'keywords',
        'languages' => 'languages',
        'languages_pct' => 'languages_pct',
        'locations' => 'locations',
        'meta_type' => 'meta_type',
        'n_articles' => 'n_articles',
        'n_updates' => 'n_updates',
        'people' => 'people',
        'reddit_sentiment' => 'reddit_sentiment',
        'reddit_sentiment_timestamps' => 'reddit_sentiment_timestamps',
        'rolling_sentiment' => 'rolling_sentiment',
        'sentiment' => 'sentiment',
        'sentiment_timestamps' => 'sentiment_timestamps',
        'sources' => 'sources',
        'sources_urls' => 'sources_urls',
        'topic' => 'topic',
        'topics' => 'topics',
        'updates' => 'updates',
        'updated_ts' => 'updated_ts',
        'update_uuids' => 'update_uuids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'categories' => 'setCategories',
        'countries' => 'setCountries',
        'countries_pct' => 'setCountriesPct',
        'current_update_uuid' => 'setCurrentUpdateUuid',
        'requested_update_uuid' => 'setRequestedUpdateUuid',
        'generate_image' => 'setGenerateImage',
        'keywords' => 'setKeywords',
        'languages' => 'setLanguages',
        'languages_pct' => 'setLanguagesPct',
        'locations' => 'setLocations',
        'meta_type' => 'setMetaType',
        'n_articles' => 'setNArticles',
        'n_updates' => 'setNUpdates',
        'people' => 'setPeople',
        'reddit_sentiment' => 'setRedditSentiment',
        'reddit_sentiment_timestamps' => 'setRedditSentimentTimestamps',
        'rolling_sentiment' => 'setRollingSentiment',
        'sentiment' => 'setSentiment',
        'sentiment_timestamps' => 'setSentimentTimestamps',
        'sources' => 'setSources',
        'sources_urls' => 'setSourcesUrls',
        'topic' => 'setTopic',
        'topics' => 'setTopics',
        'updates' => 'setUpdates',
        'updated_ts' => 'setUpdatedTs',
        'update_uuids' => 'setUpdateUuids'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'categories' => 'getCategories',
        'countries' => 'getCountries',
        'countries_pct' => 'getCountriesPct',
        'current_update_uuid' => 'getCurrentUpdateUuid',
        'requested_update_uuid' => 'getRequestedUpdateUuid',
        'generate_image' => 'getGenerateImage',
        'keywords' => 'getKeywords',
        'languages' => 'getLanguages',
        'languages_pct' => 'getLanguagesPct',
        'locations' => 'getLocations',
        'meta_type' => 'getMetaType',
        'n_articles' => 'getNArticles',
        'n_updates' => 'getNUpdates',
        'people' => 'getPeople',
        'reddit_sentiment' => 'getRedditSentiment',
        'reddit_sentiment_timestamps' => 'getRedditSentimentTimestamps',
        'rolling_sentiment' => 'getRollingSentiment',
        'sentiment' => 'getSentiment',
        'sentiment_timestamps' => 'getSentimentTimestamps',
        'sources' => 'getSources',
        'sources_urls' => 'getSourcesUrls',
        'topic' => 'getTopic',
        'topics' => 'getTopics',
        'updates' => 'getUpdates',
        'updated_ts' => 'getUpdatedTs',
        'update_uuids' => 'getUpdateUuids'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('countries_pct', $data ?? [], null);
        $this->setIfExists('current_update_uuid', $data ?? [], null);
        $this->setIfExists('requested_update_uuid', $data ?? [], null);
        $this->setIfExists('generate_image', $data ?? [], null);
        $this->setIfExists('keywords', $data ?? [], null);
        $this->setIfExists('languages', $data ?? [], null);
        $this->setIfExists('languages_pct', $data ?? [], null);
        $this->setIfExists('locations', $data ?? [], null);
        $this->setIfExists('meta_type', $data ?? [], null);
        $this->setIfExists('n_articles', $data ?? [], null);
        $this->setIfExists('n_updates', $data ?? [], null);
        $this->setIfExists('people', $data ?? [], null);
        $this->setIfExists('reddit_sentiment', $data ?? [], null);
        $this->setIfExists('reddit_sentiment_timestamps', $data ?? [], null);
        $this->setIfExists('rolling_sentiment', $data ?? [], null);
        $this->setIfExists('sentiment', $data ?? [], null);
        $this->setIfExists('sentiment_timestamps', $data ?? [], null);
        $this->setIfExists('sources', $data ?? [], null);
        $this->setIfExists('sources_urls', $data ?? [], null);
        $this->setIfExists('topic', $data ?? [], null);
        $this->setIfExists('topics', $data ?? [], null);
        $this->setIfExists('updates', $data ?? [], null);
        $this->setIfExists('updated_ts', $data ?? [], null);
        $this->setIfExists('update_uuids', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['countries'] === null) {
            $invalidProperties[] = "'countries' can't be null";
        }
        if ($this->container['countries_pct'] === null) {
            $invalidProperties[] = "'countries_pct' can't be null";
        }
        if ($this->container['current_update_uuid'] === null) {
            $invalidProperties[] = "'current_update_uuid' can't be null";
        }
        if ($this->container['requested_update_uuid'] === null) {
            $invalidProperties[] = "'requested_update_uuid' can't be null";
        }
        if ($this->container['generate_image'] === null) {
            $invalidProperties[] = "'generate_image' can't be null";
        }
        if ($this->container['keywords'] === null) {
            $invalidProperties[] = "'keywords' can't be null";
        }
        if ($this->container['languages'] === null) {
            $invalidProperties[] = "'languages' can't be null";
        }
        if ($this->container['languages_pct'] === null) {
            $invalidProperties[] = "'languages_pct' can't be null";
        }
        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
        }
        if ($this->container['meta_type'] === null) {
            $invalidProperties[] = "'meta_type' can't be null";
        }
        if ($this->container['n_articles'] === null) {
            $invalidProperties[] = "'n_articles' can't be null";
        }
        if ($this->container['n_updates'] === null) {
            $invalidProperties[] = "'n_updates' can't be null";
        }
        if ($this->container['people'] === null) {
            $invalidProperties[] = "'people' can't be null";
        }
        if ($this->container['reddit_sentiment'] === null) {
            $invalidProperties[] = "'reddit_sentiment' can't be null";
        }
        if ($this->container['reddit_sentiment_timestamps'] === null) {
            $invalidProperties[] = "'reddit_sentiment_timestamps' can't be null";
        }
        if ($this->container['rolling_sentiment'] === null) {
            $invalidProperties[] = "'rolling_sentiment' can't be null";
        }
        if ($this->container['sentiment'] === null) {
            $invalidProperties[] = "'sentiment' can't be null";
        }
        if ($this->container['sentiment_timestamps'] === null) {
            $invalidProperties[] = "'sentiment_timestamps' can't be null";
        }
        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
        }
        if ($this->container['sources_urls'] === null) {
            $invalidProperties[] = "'sources_urls' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['topics'] === null) {
            $invalidProperties[] = "'topics' can't be null";
        }
        if ($this->container['updates'] === null) {
            $invalidProperties[] = "'updates' can't be null";
        }
        if ($this->container['updated_ts'] === null) {
            $invalidProperties[] = "'updated_ts' can't be null";
        }
        if ($this->container['update_uuids'] === null) {
            $invalidProperties[] = "'update_uuids' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return array<string,int>
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param array<string,int> $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        if (is_null($countries)) {
            throw new \InvalidArgumentException('non-nullable countries cannot be null');
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets countries_pct
     *
     * @return array<string,float>
     */
    public function getCountriesPct()
    {
        return $this->container['countries_pct'];
    }

    /**
     * Sets countries_pct
     *
     * @param array<string,float> $countries_pct countries_pct
     *
     * @return self
     */
    public function setCountriesPct($countries_pct)
    {
        if (is_null($countries_pct)) {
            throw new \InvalidArgumentException('non-nullable countries_pct cannot be null');
        }
        $this->container['countries_pct'] = $countries_pct;

        return $this;
    }

    /**
     * Gets current_update_uuid
     *
     * @return string
     */
    public function getCurrentUpdateUuid()
    {
        return $this->container['current_update_uuid'];
    }

    /**
     * Sets current_update_uuid
     *
     * @param string $current_update_uuid current_update_uuid
     *
     * @return self
     */
    public function setCurrentUpdateUuid($current_update_uuid)
    {
        if (is_null($current_update_uuid)) {
            throw new \InvalidArgumentException('non-nullable current_update_uuid cannot be null');
        }
        $this->container['current_update_uuid'] = $current_update_uuid;

        return $this;
    }

    /**
     * Gets requested_update_uuid
     *
     * @return string
     */
    public function getRequestedUpdateUuid()
    {
        return $this->container['requested_update_uuid'];
    }

    /**
     * Sets requested_update_uuid
     *
     * @param string $requested_update_uuid requested_update_uuid
     *
     * @return self
     */
    public function setRequestedUpdateUuid($requested_update_uuid)
    {
        if (is_null($requested_update_uuid)) {
            throw new \InvalidArgumentException('non-nullable requested_update_uuid cannot be null');
        }
        $this->container['requested_update_uuid'] = $requested_update_uuid;

        return $this;
    }

    /**
     * Gets generate_image
     *
     * @return bool
     */
    public function getGenerateImage()
    {
        return $this->container['generate_image'];
    }

    /**
     * Sets generate_image
     *
     * @param bool $generate_image generate_image
     *
     * @return self
     */
    public function setGenerateImage($generate_image)
    {
        if (is_null($generate_image)) {
            throw new \InvalidArgumentException('non-nullable generate_image cannot be null');
        }
        $this->container['generate_image'] = $generate_image;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        if (is_null($keywords)) {
            throw new \InvalidArgumentException('non-nullable keywords cannot be null');
        }
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return array<string,int>
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param array<string,int> $languages languages
     *
     * @return self
     */
    public function setLanguages($languages)
    {
        if (is_null($languages)) {
            throw new \InvalidArgumentException('non-nullable languages cannot be null');
        }
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets languages_pct
     *
     * @return array<string,float>
     */
    public function getLanguagesPct()
    {
        return $this->container['languages_pct'];
    }

    /**
     * Sets languages_pct
     *
     * @param array<string,float> $languages_pct languages_pct
     *
     * @return self
     */
    public function setLanguagesPct($languages_pct)
    {
        if (is_null($languages_pct)) {
            throw new \InvalidArgumentException('non-nullable languages_pct cannot be null');
        }
        $this->container['languages_pct'] = $languages_pct;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return string[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param string[] $locations locations
     *
     * @return self
     */
    public function setLocations($locations)
    {
        if (is_null($locations)) {
            throw new \InvalidArgumentException('non-nullable locations cannot be null');
        }
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets meta_type
     *
     * @return string
     */
    public function getMetaType()
    {
        return $this->container['meta_type'];
    }

    /**
     * Sets meta_type
     *
     * @param string $meta_type meta_type
     *
     * @return self
     */
    public function setMetaType($meta_type)
    {
        if (is_null($meta_type)) {
            throw new \InvalidArgumentException('non-nullable meta_type cannot be null');
        }
        $this->container['meta_type'] = $meta_type;

        return $this;
    }

    /**
     * Gets n_articles
     *
     * @return int[]
     */
    public function getNArticles()
    {
        return $this->container['n_articles'];
    }

    /**
     * Sets n_articles
     *
     * @param int[] $n_articles n_articles
     *
     * @return self
     */
    public function setNArticles($n_articles)
    {
        if (is_null($n_articles)) {
            throw new \InvalidArgumentException('non-nullable n_articles cannot be null');
        }
        $this->container['n_articles'] = $n_articles;

        return $this;
    }

    /**
     * Gets n_updates
     *
     * @return int
     */
    public function getNUpdates()
    {
        return $this->container['n_updates'];
    }

    /**
     * Sets n_updates
     *
     * @param int $n_updates n_updates
     *
     * @return self
     */
    public function setNUpdates($n_updates)
    {
        if (is_null($n_updates)) {
            throw new \InvalidArgumentException('non-nullable n_updates cannot be null');
        }
        $this->container['n_updates'] = $n_updates;

        return $this;
    }

    /**
     * Gets people
     *
     * @return string[]
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param string[] $people people
     *
     * @return self
     */
    public function setPeople($people)
    {
        if (is_null($people)) {
            throw new \InvalidArgumentException('non-nullable people cannot be null');
        }
        $this->container['people'] = $people;

        return $this;
    }

    /**
     * Gets reddit_sentiment
     *
     * @return \AskNews\Model\ClusterProbabilities[]
     */
    public function getRedditSentiment()
    {
        return $this->container['reddit_sentiment'];
    }

    /**
     * Sets reddit_sentiment
     *
     * @param \AskNews\Model\ClusterProbabilities[] $reddit_sentiment reddit_sentiment
     *
     * @return self
     */
    public function setRedditSentiment($reddit_sentiment)
    {
        if (is_null($reddit_sentiment)) {
            throw new \InvalidArgumentException('non-nullable reddit_sentiment cannot be null');
        }
        $this->container['reddit_sentiment'] = $reddit_sentiment;

        return $this;
    }

    /**
     * Gets reddit_sentiment_timestamps
     *
     * @return int[]
     */
    public function getRedditSentimentTimestamps()
    {
        return $this->container['reddit_sentiment_timestamps'];
    }

    /**
     * Sets reddit_sentiment_timestamps
     *
     * @param int[] $reddit_sentiment_timestamps reddit_sentiment_timestamps
     *
     * @return self
     */
    public function setRedditSentimentTimestamps($reddit_sentiment_timestamps)
    {
        if (is_null($reddit_sentiment_timestamps)) {
            throw new \InvalidArgumentException('non-nullable reddit_sentiment_timestamps cannot be null');
        }
        $this->container['reddit_sentiment_timestamps'] = $reddit_sentiment_timestamps;

        return $this;
    }

    /**
     * Gets rolling_sentiment
     *
     * @return float[]
     */
    public function getRollingSentiment()
    {
        return $this->container['rolling_sentiment'];
    }

    /**
     * Sets rolling_sentiment
     *
     * @param float[] $rolling_sentiment rolling_sentiment
     *
     * @return self
     */
    public function setRollingSentiment($rolling_sentiment)
    {
        if (is_null($rolling_sentiment)) {
            throw new \InvalidArgumentException('non-nullable rolling_sentiment cannot be null');
        }
        $this->container['rolling_sentiment'] = $rolling_sentiment;

        return $this;
    }

    /**
     * Gets sentiment
     *
     * @return int[]
     */
    public function getSentiment()
    {
        return $this->container['sentiment'];
    }

    /**
     * Sets sentiment
     *
     * @param int[] $sentiment sentiment
     *
     * @return self
     */
    public function setSentiment($sentiment)
    {
        if (is_null($sentiment)) {
            throw new \InvalidArgumentException('non-nullable sentiment cannot be null');
        }
        $this->container['sentiment'] = $sentiment;

        return $this;
    }

    /**
     * Gets sentiment_timestamps
     *
     * @return int[]
     */
    public function getSentimentTimestamps()
    {
        return $this->container['sentiment_timestamps'];
    }

    /**
     * Sets sentiment_timestamps
     *
     * @param int[] $sentiment_timestamps sentiment_timestamps
     *
     * @return self
     */
    public function setSentimentTimestamps($sentiment_timestamps)
    {
        if (is_null($sentiment_timestamps)) {
            throw new \InvalidArgumentException('non-nullable sentiment_timestamps cannot be null');
        }
        $this->container['sentiment_timestamps'] = $sentiment_timestamps;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return array<string,int>
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param array<string,int> $sources sources
     *
     * @return self
     */
    public function setSources($sources)
    {
        if (is_null($sources)) {
            throw new \InvalidArgumentException('non-nullable sources cannot be null');
        }
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets sources_urls
     *
     * @return array<string,int>
     */
    public function getSourcesUrls()
    {
        return $this->container['sources_urls'];
    }

    /**
     * Sets sources_urls
     *
     * @param array<string,int> $sources_urls sources_urls
     *
     * @return self
     */
    public function setSourcesUrls($sources_urls)
    {
        if (is_null($sources_urls)) {
            throw new \InvalidArgumentException('non-nullable sources_urls cannot be null');
        }
        $this->container['sources_urls'] = $sources_urls;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string $topic topic
     *
     * @return self
     */
    public function setTopic($topic)
    {
        if (is_null($topic)) {
            throw new \InvalidArgumentException('non-nullable topic cannot be null');
        }
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return string[]
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param string[] $topics topics
     *
     * @return self
     */
    public function setTopics($topics)
    {
        if (is_null($topics)) {
            throw new \InvalidArgumentException('non-nullable topics cannot be null');
        }
        $this->container['topics'] = $topics;

        return $this;
    }

    /**
     * Gets updates
     *
     * @return \AskNews\Model\StoryUpdate[]
     */
    public function getUpdates()
    {
        return $this->container['updates'];
    }

    /**
     * Sets updates
     *
     * @param \AskNews\Model\StoryUpdate[] $updates updates
     *
     * @return self
     */
    public function setUpdates($updates)
    {
        if (is_null($updates)) {
            throw new \InvalidArgumentException('non-nullable updates cannot be null');
        }
        $this->container['updates'] = $updates;

        return $this;
    }

    /**
     * Gets updated_ts
     *
     * @return int
     */
    public function getUpdatedTs()
    {
        return $this->container['updated_ts'];
    }

    /**
     * Sets updated_ts
     *
     * @param int $updated_ts updated_ts
     *
     * @return self
     */
    public function setUpdatedTs($updated_ts)
    {
        if (is_null($updated_ts)) {
            throw new \InvalidArgumentException('non-nullable updated_ts cannot be null');
        }
        $this->container['updated_ts'] = $updated_ts;

        return $this;
    }

    /**
     * Gets update_uuids
     *
     * @return string[]
     */
    public function getUpdateUuids()
    {
        return $this->container['update_uuids'];
    }

    /**
     * Sets update_uuids
     *
     * @param string[] $update_uuids update_uuids
     *
     * @return self
     */
    public function setUpdateUuids($update_uuids)
    {
        if (is_null($update_uuids)) {
            throw new \InvalidArgumentException('non-nullable update_uuids cannot be null');
        }
        $this->container['update_uuids'] = $update_uuids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


