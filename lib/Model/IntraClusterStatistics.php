<?php
/**
 * IntraClusterStatistics
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
 * The version of the OpenAPI document: 0.17.5
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
 * IntraClusterStatistics Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntraClusterStatistics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntraClusterStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cluster_articles_pct' => 'float',
        'cluster_countries_pct' => 'float',
        'cluster_domains_pct' => 'float',
        'cluster_languages_pct' => 'float',
        'cluster_probabilities' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cluster_articles_pct' => null,
        'cluster_countries_pct' => null,
        'cluster_domains_pct' => null,
        'cluster_languages_pct' => null,
        'cluster_probabilities' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cluster_articles_pct' => false,
        'cluster_countries_pct' => false,
        'cluster_domains_pct' => false,
        'cluster_languages_pct' => false,
        'cluster_probabilities' => false
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
        'cluster_articles_pct' => 'cluster_articles_pct',
        'cluster_countries_pct' => 'cluster_countries_pct',
        'cluster_domains_pct' => 'cluster_domains_pct',
        'cluster_languages_pct' => 'cluster_languages_pct',
        'cluster_probabilities' => 'cluster_probabilities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cluster_articles_pct' => 'setClusterArticlesPct',
        'cluster_countries_pct' => 'setClusterCountriesPct',
        'cluster_domains_pct' => 'setClusterDomainsPct',
        'cluster_languages_pct' => 'setClusterLanguagesPct',
        'cluster_probabilities' => 'setClusterProbabilities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cluster_articles_pct' => 'getClusterArticlesPct',
        'cluster_countries_pct' => 'getClusterCountriesPct',
        'cluster_domains_pct' => 'getClusterDomainsPct',
        'cluster_languages_pct' => 'getClusterLanguagesPct',
        'cluster_probabilities' => 'getClusterProbabilities'
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
        $this->setIfExists('cluster_articles_pct', $data ?? [], 0.0);
        $this->setIfExists('cluster_countries_pct', $data ?? [], 0.0);
        $this->setIfExists('cluster_domains_pct', $data ?? [], 0.0);
        $this->setIfExists('cluster_languages_pct', $data ?? [], 0.0);
        $this->setIfExists('cluster_probabilities', $data ?? [], null);
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
     * Gets cluster_articles_pct
     *
     * @return float|null
     */
    public function getClusterArticlesPct()
    {
        return $this->container['cluster_articles_pct'];
    }

    /**
     * Sets cluster_articles_pct
     *
     * @param float|null $cluster_articles_pct cluster_articles_pct
     *
     * @return self
     */
    public function setClusterArticlesPct($cluster_articles_pct)
    {
        if (is_null($cluster_articles_pct)) {
            throw new \InvalidArgumentException('non-nullable cluster_articles_pct cannot be null');
        }
        $this->container['cluster_articles_pct'] = $cluster_articles_pct;

        return $this;
    }

    /**
     * Gets cluster_countries_pct
     *
     * @return float|null
     */
    public function getClusterCountriesPct()
    {
        return $this->container['cluster_countries_pct'];
    }

    /**
     * Sets cluster_countries_pct
     *
     * @param float|null $cluster_countries_pct cluster_countries_pct
     *
     * @return self
     */
    public function setClusterCountriesPct($cluster_countries_pct)
    {
        if (is_null($cluster_countries_pct)) {
            throw new \InvalidArgumentException('non-nullable cluster_countries_pct cannot be null');
        }
        $this->container['cluster_countries_pct'] = $cluster_countries_pct;

        return $this;
    }

    /**
     * Gets cluster_domains_pct
     *
     * @return float|null
     */
    public function getClusterDomainsPct()
    {
        return $this->container['cluster_domains_pct'];
    }

    /**
     * Sets cluster_domains_pct
     *
     * @param float|null $cluster_domains_pct cluster_domains_pct
     *
     * @return self
     */
    public function setClusterDomainsPct($cluster_domains_pct)
    {
        if (is_null($cluster_domains_pct)) {
            throw new \InvalidArgumentException('non-nullable cluster_domains_pct cannot be null');
        }
        $this->container['cluster_domains_pct'] = $cluster_domains_pct;

        return $this;
    }

    /**
     * Gets cluster_languages_pct
     *
     * @return float|null
     */
    public function getClusterLanguagesPct()
    {
        return $this->container['cluster_languages_pct'];
    }

    /**
     * Sets cluster_languages_pct
     *
     * @param float|null $cluster_languages_pct cluster_languages_pct
     *
     * @return self
     */
    public function setClusterLanguagesPct($cluster_languages_pct)
    {
        if (is_null($cluster_languages_pct)) {
            throw new \InvalidArgumentException('non-nullable cluster_languages_pct cannot be null');
        }
        $this->container['cluster_languages_pct'] = $cluster_languages_pct;

        return $this;
    }

    /**
     * Gets cluster_probabilities
     *
     * @return object|null
     */
    public function getClusterProbabilities()
    {
        return $this->container['cluster_probabilities'];
    }

    /**
     * Sets cluster_probabilities
     *
     * @param object|null $cluster_probabilities cluster_probabilities
     *
     * @return self
     */
    public function setClusterProbabilities($cluster_probabilities)
    {
        if (is_null($cluster_probabilities)) {
            throw new \InvalidArgumentException('non-nullable cluster_probabilities cannot be null');
        }
        $this->container['cluster_probabilities'] = $cluster_probabilities;

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


