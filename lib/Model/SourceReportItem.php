<?php
/**
 * SourceReportItem
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
 * The version of the OpenAPI document: 0.18.2
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
 * SourceReportItem Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SourceReportItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SourceReportItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bson_date' => '\DateTime',
        'n_bucket' => 'int',
        'n_selected' => 'int',
        'bucket_counts' => 'array<string,int>',
        'selected_counts' => 'array<string,int>',
        'bucket_pct' => 'array<string,float>',
        'selected_pct' => 'array<string,float>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bson_date' => 'date-time',
        'n_bucket' => null,
        'n_selected' => null,
        'bucket_counts' => null,
        'selected_counts' => null,
        'bucket_pct' => null,
        'selected_pct' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bson_date' => false,
        'n_bucket' => false,
        'n_selected' => false,
        'bucket_counts' => false,
        'selected_counts' => false,
        'bucket_pct' => false,
        'selected_pct' => false
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
        'bson_date' => 'bson_date',
        'n_bucket' => 'n_bucket',
        'n_selected' => 'n_selected',
        'bucket_counts' => 'bucket_counts',
        'selected_counts' => 'selected_counts',
        'bucket_pct' => 'bucket_pct',
        'selected_pct' => 'selected_pct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bson_date' => 'setBsonDate',
        'n_bucket' => 'setNBucket',
        'n_selected' => 'setNSelected',
        'bucket_counts' => 'setBucketCounts',
        'selected_counts' => 'setSelectedCounts',
        'bucket_pct' => 'setBucketPct',
        'selected_pct' => 'setSelectedPct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bson_date' => 'getBsonDate',
        'n_bucket' => 'getNBucket',
        'n_selected' => 'getNSelected',
        'bucket_counts' => 'getBucketCounts',
        'selected_counts' => 'getSelectedCounts',
        'bucket_pct' => 'getBucketPct',
        'selected_pct' => 'getSelectedPct'
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
        $this->setIfExists('bson_date', $data ?? [], null);
        $this->setIfExists('n_bucket', $data ?? [], null);
        $this->setIfExists('n_selected', $data ?? [], null);
        $this->setIfExists('bucket_counts', $data ?? [], null);
        $this->setIfExists('selected_counts', $data ?? [], null);
        $this->setIfExists('bucket_pct', $data ?? [], null);
        $this->setIfExists('selected_pct', $data ?? [], null);
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

        if ($this->container['bson_date'] === null) {
            $invalidProperties[] = "'bson_date' can't be null";
        }
        if ($this->container['n_bucket'] === null) {
            $invalidProperties[] = "'n_bucket' can't be null";
        }
        if ($this->container['n_selected'] === null) {
            $invalidProperties[] = "'n_selected' can't be null";
        }
        if ($this->container['bucket_counts'] === null) {
            $invalidProperties[] = "'bucket_counts' can't be null";
        }
        if ($this->container['selected_counts'] === null) {
            $invalidProperties[] = "'selected_counts' can't be null";
        }
        if ($this->container['bucket_pct'] === null) {
            $invalidProperties[] = "'bucket_pct' can't be null";
        }
        if ($this->container['selected_pct'] === null) {
            $invalidProperties[] = "'selected_pct' can't be null";
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
     * Gets bson_date
     *
     * @return \DateTime
     */
    public function getBsonDate()
    {
        return $this->container['bson_date'];
    }

    /**
     * Sets bson_date
     *
     * @param \DateTime $bson_date bson_date
     *
     * @return self
     */
    public function setBsonDate($bson_date)
    {
        if (is_null($bson_date)) {
            throw new \InvalidArgumentException('non-nullable bson_date cannot be null');
        }
        $this->container['bson_date'] = $bson_date;

        return $this;
    }

    /**
     * Gets n_bucket
     *
     * @return int
     */
    public function getNBucket()
    {
        return $this->container['n_bucket'];
    }

    /**
     * Sets n_bucket
     *
     * @param int $n_bucket n_bucket
     *
     * @return self
     */
    public function setNBucket($n_bucket)
    {
        if (is_null($n_bucket)) {
            throw new \InvalidArgumentException('non-nullable n_bucket cannot be null');
        }
        $this->container['n_bucket'] = $n_bucket;

        return $this;
    }

    /**
     * Gets n_selected
     *
     * @return int
     */
    public function getNSelected()
    {
        return $this->container['n_selected'];
    }

    /**
     * Sets n_selected
     *
     * @param int $n_selected n_selected
     *
     * @return self
     */
    public function setNSelected($n_selected)
    {
        if (is_null($n_selected)) {
            throw new \InvalidArgumentException('non-nullable n_selected cannot be null');
        }
        $this->container['n_selected'] = $n_selected;

        return $this;
    }

    /**
     * Gets bucket_counts
     *
     * @return array<string,int>
     */
    public function getBucketCounts()
    {
        return $this->container['bucket_counts'];
    }

    /**
     * Sets bucket_counts
     *
     * @param array<string,int> $bucket_counts bucket_counts
     *
     * @return self
     */
    public function setBucketCounts($bucket_counts)
    {
        if (is_null($bucket_counts)) {
            throw new \InvalidArgumentException('non-nullable bucket_counts cannot be null');
        }
        $this->container['bucket_counts'] = $bucket_counts;

        return $this;
    }

    /**
     * Gets selected_counts
     *
     * @return array<string,int>
     */
    public function getSelectedCounts()
    {
        return $this->container['selected_counts'];
    }

    /**
     * Sets selected_counts
     *
     * @param array<string,int> $selected_counts selected_counts
     *
     * @return self
     */
    public function setSelectedCounts($selected_counts)
    {
        if (is_null($selected_counts)) {
            throw new \InvalidArgumentException('non-nullable selected_counts cannot be null');
        }
        $this->container['selected_counts'] = $selected_counts;

        return $this;
    }

    /**
     * Gets bucket_pct
     *
     * @return array<string,float>
     */
    public function getBucketPct()
    {
        return $this->container['bucket_pct'];
    }

    /**
     * Sets bucket_pct
     *
     * @param array<string,float> $bucket_pct bucket_pct
     *
     * @return self
     */
    public function setBucketPct($bucket_pct)
    {
        if (is_null($bucket_pct)) {
            throw new \InvalidArgumentException('non-nullable bucket_pct cannot be null');
        }
        $this->container['bucket_pct'] = $bucket_pct;

        return $this;
    }

    /**
     * Gets selected_pct
     *
     * @return array<string,float>
     */
    public function getSelectedPct()
    {
        return $this->container['selected_pct'];
    }

    /**
     * Sets selected_pct
     *
     * @param array<string,float> $selected_pct selected_pct
     *
     * @return self
     */
    public function setSelectedPct($selected_pct)
    {
        if (is_null($selected_pct)) {
            throw new \InvalidArgumentException('non-nullable selected_pct cannot be null');
        }
        $this->container['selected_pct'] = $selected_pct;

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


