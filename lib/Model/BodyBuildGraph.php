<?php
/**
 * BodyBuildGraph
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
 * The version of the OpenAPI document: 0.10.0
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
 * BodyBuildGraph Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BodyBuildGraph implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Body_build_graph';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query' => 'string',
        'return_articles' => 'bool',
        'min_cluster_probability' => 'float',
        'geo_disambiguation' => 'bool',
        'filter_params' => 'object',
        'disambiguation_correction' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'query' => null,
        'return_articles' => null,
        'min_cluster_probability' => null,
        'geo_disambiguation' => null,
        'filter_params' => null,
        'disambiguation_correction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => false,
        'return_articles' => false,
        'min_cluster_probability' => false,
        'geo_disambiguation' => false,
        'filter_params' => false,
        'disambiguation_correction' => false
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
        'query' => 'query',
        'return_articles' => 'return_articles',
        'min_cluster_probability' => 'min_cluster_probability',
        'geo_disambiguation' => 'geo_disambiguation',
        'filter_params' => 'filter_params',
        'disambiguation_correction' => 'disambiguation_correction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'return_articles' => 'setReturnArticles',
        'min_cluster_probability' => 'setMinClusterProbability',
        'geo_disambiguation' => 'setGeoDisambiguation',
        'filter_params' => 'setFilterParams',
        'disambiguation_correction' => 'setDisambiguationCorrection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'return_articles' => 'getReturnArticles',
        'min_cluster_probability' => 'getMinClusterProbability',
        'geo_disambiguation' => 'getGeoDisambiguation',
        'filter_params' => 'getFilterParams',
        'disambiguation_correction' => 'getDisambiguationCorrection'
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
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('return_articles', $data ?? [], false);
        $this->setIfExists('min_cluster_probability', $data ?? [], 0.9);
        $this->setIfExists('geo_disambiguation', $data ?? [], false);
        $this->setIfExists('filter_params', $data ?? [], null);
        $this->setIfExists('disambiguation_correction', $data ?? [], null);
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

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
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
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query Query string that can be any phrase, keyword, question, or paragraph. If method='nl', then this will be used as a natural language query. If method='kw', then this will be used as a direct keyword query.
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets return_articles
     *
     * @return bool|null
     */
    public function getReturnArticles()
    {
        return $this->container['return_articles'];
    }

    /**
     * Sets return_articles
     *
     * @param bool|null $return_articles Whether to return articles or not.
     *
     * @return self
     */
    public function setReturnArticles($return_articles)
    {
        if (is_null($return_articles)) {
            throw new \InvalidArgumentException('non-nullable return_articles cannot be null');
        }
        $this->container['return_articles'] = $return_articles;

        return $this;
    }

    /**
     * Gets min_cluster_probability
     *
     * @return float|null
     */
    public function getMinClusterProbability()
    {
        return $this->container['min_cluster_probability'];
    }

    /**
     * Sets min_cluster_probability
     *
     * @param float|null $min_cluster_probability Minimum cluster probability to use for disambiguation
     *
     * @return self
     */
    public function setMinClusterProbability($min_cluster_probability)
    {
        if (is_null($min_cluster_probability)) {
            throw new \InvalidArgumentException('non-nullable min_cluster_probability cannot be null');
        }
        $this->container['min_cluster_probability'] = $min_cluster_probability;

        return $this;
    }

    /**
     * Gets geo_disambiguation
     *
     * @return bool|null
     */
    public function getGeoDisambiguation()
    {
        return $this->container['geo_disambiguation'];
    }

    /**
     * Sets geo_disambiguation
     *
     * @param bool|null $geo_disambiguation Whether to use geo disambiguation or not.
     *
     * @return self
     */
    public function setGeoDisambiguation($geo_disambiguation)
    {
        if (is_null($geo_disambiguation)) {
            throw new \InvalidArgumentException('non-nullable geo_disambiguation cannot be null');
        }
        $this->container['geo_disambiguation'] = $geo_disambiguation;

        return $this;
    }

    /**
     * Gets filter_params
     *
     * @return object|null
     */
    public function getFilterParams()
    {
        return $this->container['filter_params'];
    }

    /**
     * Sets filter_params
     *
     * @param object|null $filter_params All parameters available on the search_news endpoint located here: https://docs.asknews.app/en/reference#get-/v1/news/search
     *
     * @return self
     */
    public function setFilterParams($filter_params)
    {
        if (is_null($filter_params)) {
            throw new \InvalidArgumentException('non-nullable filter_params cannot be null');
        }
        $this->container['filter_params'] = $filter_params;

        return $this;
    }

    /**
     * Gets disambiguation_correction
     *
     * @return object|null
     */
    public function getDisambiguationCorrection()
    {
        return $this->container['disambiguation_correction'];
    }

    /**
     * Sets disambiguation_correction
     *
     * @param object|null $disambiguation_correction Disambiguation correction parameters.
     *
     * @return self
     */
    public function setDisambiguationCorrection($disambiguation_correction)
    {
        if (is_null($disambiguation_correction)) {
            throw new \InvalidArgumentException('non-nullable disambiguation_correction cannot be null');
        }
        $this->container['disambiguation_correction'] = $disambiguation_correction;

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


