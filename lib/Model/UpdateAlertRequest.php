<?php
/**
 * UpdateAlertRequest
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
 * The version of the OpenAPI document: 0.18.3
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
 * UpdateAlertRequest Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateAlertRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateAlertRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query' => 'string',
        'cron' => 'string',
        'model' => 'string',
        'share_link' => 'string',
        'sources' => '\AskNews\Model\SourcesInner[]',
        'report' => '\AskNews\Model\ReportRequest',
        'triggers' => '\AskNews\Model\TriggersInner[]',
        'always_trigger' => 'bool',
        'repeat' => 'bool',
        'active' => 'bool',
        'expires_at' => '\DateTime'
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
        'cron' => null,
        'model' => null,
        'share_link' => 'uri',
        'sources' => null,
        'report' => null,
        'triggers' => null,
        'always_trigger' => null,
        'repeat' => null,
        'active' => null,
        'expires_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => true,
        'cron' => true,
        'model' => true,
        'share_link' => true,
        'sources' => false,
        'report' => true,
        'triggers' => false,
        'always_trigger' => true,
        'repeat' => true,
        'active' => true,
        'expires_at' => true
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
        'cron' => 'cron',
        'model' => 'model',
        'share_link' => 'share_link',
        'sources' => 'sources',
        'report' => 'report',
        'triggers' => 'triggers',
        'always_trigger' => 'always_trigger',
        'repeat' => 'repeat',
        'active' => 'active',
        'expires_at' => 'expires_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'cron' => 'setCron',
        'model' => 'setModel',
        'share_link' => 'setShareLink',
        'sources' => 'setSources',
        'report' => 'setReport',
        'triggers' => 'setTriggers',
        'always_trigger' => 'setAlwaysTrigger',
        'repeat' => 'setRepeat',
        'active' => 'setActive',
        'expires_at' => 'setExpiresAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'cron' => 'getCron',
        'model' => 'getModel',
        'share_link' => 'getShareLink',
        'sources' => 'getSources',
        'report' => 'getReport',
        'triggers' => 'getTriggers',
        'always_trigger' => 'getAlwaysTrigger',
        'repeat' => 'getRepeat',
        'active' => 'getActive',
        'expires_at' => 'getExpiresAt'
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

    public const MODEL_META_LLAMA_META_LLAMA_3_1_8_B_INSTRUCT = 'meta-llama/Meta-Llama-3.1-8B-Instruct';
    public const MODEL_GPT_4O_MINI = 'gpt-4o-mini';
    public const MODEL_GPT_4O = 'gpt-4o';
    public const MODEL_O3_MINI = 'o3-mini';
    public const MODEL_META_LLAMA_META_LLAMA_3_3_70_B_INSTRUCT = 'meta-llama/Meta-Llama-3.3-70B-Instruct';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelAllowableValues()
    {
        return [
            self::MODEL_META_LLAMA_META_LLAMA_3_1_8_B_INSTRUCT,
            self::MODEL_GPT_4O_MINI,
            self::MODEL_GPT_4O,
            self::MODEL_O3_MINI,
            self::MODEL_META_LLAMA_META_LLAMA_3_3_70_B_INSTRUCT,
        ];
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
        $this->setIfExists('cron', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('share_link', $data ?? [], null);
        $this->setIfExists('sources', $data ?? [], null);
        $this->setIfExists('report', $data ?? [], null);
        $this->setIfExists('triggers', $data ?? [], null);
        $this->setIfExists('always_trigger', $data ?? [], null);
        $this->setIfExists('repeat', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
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

        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($this->container['model']) && !in_array($this->container['model'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'model', must be one of '%s'",
                $this->container['model'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['share_link']) && (mb_strlen($this->container['share_link']) > 2083)) {
            $invalidProperties[] = "invalid value for 'share_link', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['share_link']) && (mb_strlen($this->container['share_link']) < 1)) {
            $invalidProperties[] = "invalid value for 'share_link', the character length must be bigger than or equal to 1.";
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
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            array_push($this->openAPINullablesSetToNull, 'query');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('query', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets cron
     *
     * @return string|null
     */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
     * Sets cron
     *
     * @param string|null $cron cron
     *
     * @return self
     */
    public function setCron($cron)
    {
        if (is_null($cron)) {
            array_push($this->openAPINullablesSetToNull, 'cron');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cron', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cron'] = $cron;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            array_push($this->openAPINullablesSetToNull, 'model');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('model', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($model) && !in_array($model, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'model', must be one of '%s'",
                    $model,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets share_link
     *
     * @return string|null
     */
    public function getShareLink()
    {
        return $this->container['share_link'];
    }

    /**
     * Sets share_link
     *
     * @param string|null $share_link share_link
     *
     * @return self
     */
    public function setShareLink($share_link)
    {
        if (is_null($share_link)) {
            array_push($this->openAPINullablesSetToNull, 'share_link');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('share_link', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($share_link) && (mb_strlen($share_link) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $share_link when calling UpdateAlertRequest., must be smaller than or equal to 2083.');
        }
        if (!is_null($share_link) && (mb_strlen($share_link) < 1)) {
            throw new \InvalidArgumentException('invalid length for $share_link when calling UpdateAlertRequest., must be bigger than or equal to 1.');
        }

        $this->container['share_link'] = $share_link;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return \AskNews\Model\SourcesInner[]|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \AskNews\Model\SourcesInner[]|null $sources sources
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
     * Gets report
     *
     * @return \AskNews\Model\ReportRequest|null
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param \AskNews\Model\ReportRequest|null $report report
     *
     * @return self
     */
    public function setReport($report)
    {
        if (is_null($report)) {
            array_push($this->openAPINullablesSetToNull, 'report');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('report', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets triggers
     *
     * @return \AskNews\Model\TriggersInner[]|null
     */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
     * Sets triggers
     *
     * @param \AskNews\Model\TriggersInner[]|null $triggers triggers
     *
     * @return self
     */
    public function setTriggers($triggers)
    {
        if (is_null($triggers)) {
            throw new \InvalidArgumentException('non-nullable triggers cannot be null');
        }
        $this->container['triggers'] = $triggers;

        return $this;
    }

    /**
     * Gets always_trigger
     *
     * @return bool|null
     */
    public function getAlwaysTrigger()
    {
        return $this->container['always_trigger'];
    }

    /**
     * Sets always_trigger
     *
     * @param bool|null $always_trigger always_trigger
     *
     * @return self
     */
    public function setAlwaysTrigger($always_trigger)
    {
        if (is_null($always_trigger)) {
            array_push($this->openAPINullablesSetToNull, 'always_trigger');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('always_trigger', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['always_trigger'] = $always_trigger;

        return $this;
    }

    /**
     * Gets repeat
     *
     * @return bool|null
     */
    public function getRepeat()
    {
        return $this->container['repeat'];
    }

    /**
     * Sets repeat
     *
     * @param bool|null $repeat repeat
     *
     * @return self
     */
    public function setRepeat($repeat)
    {
        if (is_null($repeat)) {
            array_push($this->openAPINullablesSetToNull, 'repeat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('repeat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['repeat'] = $repeat;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            array_push($this->openAPINullablesSetToNull, 'expires_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expires_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expires_at'] = $expires_at;

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


