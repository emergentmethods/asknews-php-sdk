<?php
/**
 * ForecastResponse
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
 * The version of the OpenAPI document: 0.17.3
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
 * ForecastResponse Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ForecastResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ForecastResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'forecast' => 'string',
        'resolution_criteria' => 'string',
        'date' => '\DateTime',
        'reasoning' => 'string',
        'sources' => '\AskNews\Model\SearchResponseDictItem[]',
        'timeline' => 'string[]',
        'opposite_request' => 'string',
        'confidence' => 'float',
        'choice' => '\AskNews\Model\Choice',
        'llm_confidence' => 'int',
        'model_used' => 'string',
        'likelihood' => 'string',
        'probability' => 'int',
        'web_search_results' => '\AskNews\Model\WebSearchResult[]',
        'summary' => 'string',
        'key_people' => '\AskNews\Model\KeyPerson[]',
        'key_facets' => 'string[]',
        'reconciled_information' => 'string',
        'candidate_models' => 'string[]',
        'unique_information' => 'string',
        'expert_information' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'forecast' => null,
        'resolution_criteria' => null,
        'date' => 'date-time',
        'reasoning' => null,
        'sources' => null,
        'timeline' => null,
        'opposite_request' => null,
        'confidence' => null,
        'choice' => null,
        'llm_confidence' => null,
        'model_used' => null,
        'likelihood' => null,
        'probability' => null,
        'web_search_results' => null,
        'summary' => null,
        'key_people' => null,
        'key_facets' => null,
        'reconciled_information' => null,
        'candidate_models' => null,
        'unique_information' => null,
        'expert_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'forecast' => false,
        'resolution_criteria' => false,
        'date' => false,
        'reasoning' => false,
        'sources' => false,
        'timeline' => false,
        'opposite_request' => false,
        'confidence' => false,
        'choice' => false,
        'llm_confidence' => false,
        'model_used' => false,
        'likelihood' => false,
        'probability' => false,
        'web_search_results' => false,
        'summary' => false,
        'key_people' => false,
        'key_facets' => false,
        'reconciled_information' => false,
        'candidate_models' => false,
        'unique_information' => false,
        'expert_information' => false
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
        'forecast' => 'forecast',
        'resolution_criteria' => 'resolution_criteria',
        'date' => 'date',
        'reasoning' => 'reasoning',
        'sources' => 'sources',
        'timeline' => 'timeline',
        'opposite_request' => 'opposite_request',
        'confidence' => 'confidence',
        'choice' => 'choice',
        'llm_confidence' => 'llm_confidence',
        'model_used' => 'model_used',
        'likelihood' => 'likelihood',
        'probability' => 'probability',
        'web_search_results' => 'web_search_results',
        'summary' => 'summary',
        'key_people' => 'key_people',
        'key_facets' => 'key_facets',
        'reconciled_information' => 'reconciled_information',
        'candidate_models' => 'candidate_models',
        'unique_information' => 'unique_information',
        'expert_information' => 'expert_information'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forecast' => 'setForecast',
        'resolution_criteria' => 'setResolutionCriteria',
        'date' => 'setDate',
        'reasoning' => 'setReasoning',
        'sources' => 'setSources',
        'timeline' => 'setTimeline',
        'opposite_request' => 'setOppositeRequest',
        'confidence' => 'setConfidence',
        'choice' => 'setChoice',
        'llm_confidence' => 'setLlmConfidence',
        'model_used' => 'setModelUsed',
        'likelihood' => 'setLikelihood',
        'probability' => 'setProbability',
        'web_search_results' => 'setWebSearchResults',
        'summary' => 'setSummary',
        'key_people' => 'setKeyPeople',
        'key_facets' => 'setKeyFacets',
        'reconciled_information' => 'setReconciledInformation',
        'candidate_models' => 'setCandidateModels',
        'unique_information' => 'setUniqueInformation',
        'expert_information' => 'setExpertInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forecast' => 'getForecast',
        'resolution_criteria' => 'getResolutionCriteria',
        'date' => 'getDate',
        'reasoning' => 'getReasoning',
        'sources' => 'getSources',
        'timeline' => 'getTimeline',
        'opposite_request' => 'getOppositeRequest',
        'confidence' => 'getConfidence',
        'choice' => 'getChoice',
        'llm_confidence' => 'getLlmConfidence',
        'model_used' => 'getModelUsed',
        'likelihood' => 'getLikelihood',
        'probability' => 'getProbability',
        'web_search_results' => 'getWebSearchResults',
        'summary' => 'getSummary',
        'key_people' => 'getKeyPeople',
        'key_facets' => 'getKeyFacets',
        'reconciled_information' => 'getReconciledInformation',
        'candidate_models' => 'getCandidateModels',
        'unique_information' => 'getUniqueInformation',
        'expert_information' => 'getExpertInformation'
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
        $this->setIfExists('forecast', $data ?? [], null);
        $this->setIfExists('resolution_criteria', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('reasoning', $data ?? [], null);
        $this->setIfExists('sources', $data ?? [], null);
        $this->setIfExists('timeline', $data ?? [], null);
        $this->setIfExists('opposite_request', $data ?? [], null);
        $this->setIfExists('confidence', $data ?? [], null);
        $this->setIfExists('choice', $data ?? [], null);
        $this->setIfExists('llm_confidence', $data ?? [], null);
        $this->setIfExists('model_used', $data ?? [], null);
        $this->setIfExists('likelihood', $data ?? [], null);
        $this->setIfExists('probability', $data ?? [], null);
        $this->setIfExists('web_search_results', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('key_people', $data ?? [], null);
        $this->setIfExists('key_facets', $data ?? [], null);
        $this->setIfExists('reconciled_information', $data ?? [], null);
        $this->setIfExists('candidate_models', $data ?? [], null);
        $this->setIfExists('unique_information', $data ?? [], null);
        $this->setIfExists('expert_information', $data ?? [], null);
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

        if ($this->container['forecast'] === null) {
            $invalidProperties[] = "'forecast' can't be null";
        }
        if ($this->container['resolution_criteria'] === null) {
            $invalidProperties[] = "'resolution_criteria' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['reasoning'] === null) {
            $invalidProperties[] = "'reasoning' can't be null";
        }
        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
        }
        if ($this->container['timeline'] === null) {
            $invalidProperties[] = "'timeline' can't be null";
        }
        if ($this->container['opposite_request'] === null) {
            $invalidProperties[] = "'opposite_request' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
        }
        if ($this->container['choice'] === null) {
            $invalidProperties[] = "'choice' can't be null";
        }
        if ($this->container['llm_confidence'] === null) {
            $invalidProperties[] = "'llm_confidence' can't be null";
        }
        if ($this->container['model_used'] === null) {
            $invalidProperties[] = "'model_used' can't be null";
        }
        if ($this->container['likelihood'] === null) {
            $invalidProperties[] = "'likelihood' can't be null";
        }
        if ($this->container['probability'] === null) {
            $invalidProperties[] = "'probability' can't be null";
        }
        if ($this->container['web_search_results'] === null) {
            $invalidProperties[] = "'web_search_results' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ($this->container['key_people'] === null) {
            $invalidProperties[] = "'key_people' can't be null";
        }
        if ($this->container['key_facets'] === null) {
            $invalidProperties[] = "'key_facets' can't be null";
        }
        if ($this->container['reconciled_information'] === null) {
            $invalidProperties[] = "'reconciled_information' can't be null";
        }
        if ($this->container['candidate_models'] === null) {
            $invalidProperties[] = "'candidate_models' can't be null";
        }
        if ($this->container['unique_information'] === null) {
            $invalidProperties[] = "'unique_information' can't be null";
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
     * Gets forecast
     *
     * @return string
     */
    public function getForecast()
    {
        return $this->container['forecast'];
    }

    /**
     * Sets forecast
     *
     * @param string $forecast forecast
     *
     * @return self
     */
    public function setForecast($forecast)
    {
        if (is_null($forecast)) {
            throw new \InvalidArgumentException('non-nullable forecast cannot be null');
        }
        $this->container['forecast'] = $forecast;

        return $this;
    }

    /**
     * Gets resolution_criteria
     *
     * @return string
     */
    public function getResolutionCriteria()
    {
        return $this->container['resolution_criteria'];
    }

    /**
     * Sets resolution_criteria
     *
     * @param string $resolution_criteria resolution_criteria
     *
     * @return self
     */
    public function setResolutionCriteria($resolution_criteria)
    {
        if (is_null($resolution_criteria)) {
            throw new \InvalidArgumentException('non-nullable resolution_criteria cannot be null');
        }
        $this->container['resolution_criteria'] = $resolution_criteria;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets reasoning
     *
     * @return string
     */
    public function getReasoning()
    {
        return $this->container['reasoning'];
    }

    /**
     * Sets reasoning
     *
     * @param string $reasoning reasoning
     *
     * @return self
     */
    public function setReasoning($reasoning)
    {
        if (is_null($reasoning)) {
            throw new \InvalidArgumentException('non-nullable reasoning cannot be null');
        }
        $this->container['reasoning'] = $reasoning;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return \AskNews\Model\SearchResponseDictItem[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \AskNews\Model\SearchResponseDictItem[] $sources sources
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
     * Gets timeline
     *
     * @return string[]
     */
    public function getTimeline()
    {
        return $this->container['timeline'];
    }

    /**
     * Sets timeline
     *
     * @param string[] $timeline timeline
     *
     * @return self
     */
    public function setTimeline($timeline)
    {
        if (is_null($timeline)) {
            throw new \InvalidArgumentException('non-nullable timeline cannot be null');
        }
        $this->container['timeline'] = $timeline;

        return $this;
    }

    /**
     * Gets opposite_request
     *
     * @return string
     */
    public function getOppositeRequest()
    {
        return $this->container['opposite_request'];
    }

    /**
     * Sets opposite_request
     *
     * @param string $opposite_request opposite_request
     *
     * @return self
     */
    public function setOppositeRequest($opposite_request)
    {
        if (is_null($opposite_request)) {
            throw new \InvalidArgumentException('non-nullable opposite_request cannot be null');
        }
        $this->container['opposite_request'] = $opposite_request;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return float
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param float $confidence confidence
     *
     * @return self
     */
    public function setConfidence($confidence)
    {
        if (is_null($confidence)) {
            throw new \InvalidArgumentException('non-nullable confidence cannot be null');
        }
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets choice
     *
     * @return \AskNews\Model\Choice
     */
    public function getChoice()
    {
        return $this->container['choice'];
    }

    /**
     * Sets choice
     *
     * @param \AskNews\Model\Choice $choice choice
     *
     * @return self
     */
    public function setChoice($choice)
    {
        if (is_null($choice)) {
            throw new \InvalidArgumentException('non-nullable choice cannot be null');
        }
        $this->container['choice'] = $choice;

        return $this;
    }

    /**
     * Gets llm_confidence
     *
     * @return int
     */
    public function getLlmConfidence()
    {
        return $this->container['llm_confidence'];
    }

    /**
     * Sets llm_confidence
     *
     * @param int $llm_confidence llm_confidence
     *
     * @return self
     */
    public function setLlmConfidence($llm_confidence)
    {
        if (is_null($llm_confidence)) {
            throw new \InvalidArgumentException('non-nullable llm_confidence cannot be null');
        }
        $this->container['llm_confidence'] = $llm_confidence;

        return $this;
    }

    /**
     * Gets model_used
     *
     * @return string
     */
    public function getModelUsed()
    {
        return $this->container['model_used'];
    }

    /**
     * Sets model_used
     *
     * @param string $model_used model_used
     *
     * @return self
     */
    public function setModelUsed($model_used)
    {
        if (is_null($model_used)) {
            throw new \InvalidArgumentException('non-nullable model_used cannot be null');
        }
        $this->container['model_used'] = $model_used;

        return $this;
    }

    /**
     * Gets likelihood
     *
     * @return string
     */
    public function getLikelihood()
    {
        return $this->container['likelihood'];
    }

    /**
     * Sets likelihood
     *
     * @param string $likelihood likelihood
     *
     * @return self
     */
    public function setLikelihood($likelihood)
    {
        if (is_null($likelihood)) {
            throw new \InvalidArgumentException('non-nullable likelihood cannot be null');
        }
        $this->container['likelihood'] = $likelihood;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return int
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param int $probability probability
     *
     * @return self
     */
    public function setProbability($probability)
    {
        if (is_null($probability)) {
            throw new \InvalidArgumentException('non-nullable probability cannot be null');
        }
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets web_search_results
     *
     * @return \AskNews\Model\WebSearchResult[]
     */
    public function getWebSearchResults()
    {
        return $this->container['web_search_results'];
    }

    /**
     * Sets web_search_results
     *
     * @param \AskNews\Model\WebSearchResult[] $web_search_results web_search_results
     *
     * @return self
     */
    public function setWebSearchResults($web_search_results)
    {
        if (is_null($web_search_results)) {
            throw new \InvalidArgumentException('non-nullable web_search_results cannot be null');
        }
        $this->container['web_search_results'] = $web_search_results;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets key_people
     *
     * @return \AskNews\Model\KeyPerson[]
     */
    public function getKeyPeople()
    {
        return $this->container['key_people'];
    }

    /**
     * Sets key_people
     *
     * @param \AskNews\Model\KeyPerson[] $key_people key_people
     *
     * @return self
     */
    public function setKeyPeople($key_people)
    {
        if (is_null($key_people)) {
            throw new \InvalidArgumentException('non-nullable key_people cannot be null');
        }
        $this->container['key_people'] = $key_people;

        return $this;
    }

    /**
     * Gets key_facets
     *
     * @return string[]
     */
    public function getKeyFacets()
    {
        return $this->container['key_facets'];
    }

    /**
     * Sets key_facets
     *
     * @param string[] $key_facets key_facets
     *
     * @return self
     */
    public function setKeyFacets($key_facets)
    {
        if (is_null($key_facets)) {
            throw new \InvalidArgumentException('non-nullable key_facets cannot be null');
        }
        $this->container['key_facets'] = $key_facets;

        return $this;
    }

    /**
     * Gets reconciled_information
     *
     * @return string
     */
    public function getReconciledInformation()
    {
        return $this->container['reconciled_information'];
    }

    /**
     * Sets reconciled_information
     *
     * @param string $reconciled_information reconciled_information
     *
     * @return self
     */
    public function setReconciledInformation($reconciled_information)
    {
        if (is_null($reconciled_information)) {
            throw new \InvalidArgumentException('non-nullable reconciled_information cannot be null');
        }
        $this->container['reconciled_information'] = $reconciled_information;

        return $this;
    }

    /**
     * Gets candidate_models
     *
     * @return string[]
     */
    public function getCandidateModels()
    {
        return $this->container['candidate_models'];
    }

    /**
     * Sets candidate_models
     *
     * @param string[] $candidate_models candidate_models
     *
     * @return self
     */
    public function setCandidateModels($candidate_models)
    {
        if (is_null($candidate_models)) {
            throw new \InvalidArgumentException('non-nullable candidate_models cannot be null');
        }
        $this->container['candidate_models'] = $candidate_models;

        return $this;
    }

    /**
     * Gets unique_information
     *
     * @return string
     */
    public function getUniqueInformation()
    {
        return $this->container['unique_information'];
    }

    /**
     * Sets unique_information
     *
     * @param string $unique_information unique_information
     *
     * @return self
     */
    public function setUniqueInformation($unique_information)
    {
        if (is_null($unique_information)) {
            throw new \InvalidArgumentException('non-nullable unique_information cannot be null');
        }
        $this->container['unique_information'] = $unique_information;

        return $this;
    }

    /**
     * Gets expert_information
     *
     * @return object|null
     */
    public function getExpertInformation()
    {
        return $this->container['expert_information'];
    }

    /**
     * Sets expert_information
     *
     * @param object|null $expert_information expert_information
     *
     * @return self
     */
    public function setExpertInformation($expert_information)
    {
        if (is_null($expert_information)) {
            throw new \InvalidArgumentException('non-nullable expert_information cannot be null');
        }
        $this->container['expert_information'] = $expert_information;

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


