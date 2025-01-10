<?php
/**
 * CreateAlertRequest
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
 * The version of the OpenAPI document: 0.16.2
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
 * CreateAlertRequest Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateAlertRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAlertRequest';

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
        'filter_params' => '\AskNews\Model\FilterParams',
        'triggers' => '\AskNews\Model\TriggersInner[]',
        'always_trigger' => 'bool',
        'repeat' => 'bool',
        'active' => 'bool'
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
        'filter_params' => null,
        'triggers' => null,
        'always_trigger' => null,
        'repeat' => null,
        'active' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => true,
        'cron' => false,
        'model' => true,
        'share_link' => true,
        'filter_params' => true,
        'triggers' => false,
        'always_trigger' => false,
        'repeat' => false,
        'active' => false
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
        'filter_params' => 'filter_params',
        'triggers' => 'triggers',
        'always_trigger' => 'always_trigger',
        'repeat' => 'repeat',
        'active' => 'active'
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
        'filter_params' => 'setFilterParams',
        'triggers' => 'setTriggers',
        'always_trigger' => 'setAlwaysTrigger',
        'repeat' => 'setRepeat',
        'active' => 'setActive'
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
        'filter_params' => 'getFilterParams',
        'triggers' => 'getTriggers',
        'always_trigger' => 'getAlwaysTrigger',
        'repeat' => 'getRepeat',
        'active' => 'getActive'
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
        $this->setIfExists('filter_params', $data ?? [], null);
        $this->setIfExists('triggers', $data ?? [], null);
        $this->setIfExists('always_trigger', $data ?? [], false);
        $this->setIfExists('repeat', $data ?? [], true);
        $this->setIfExists('active', $data ?? [], true);
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

        if ($this->container['cron'] === null) {
            $invalidProperties[] = "'cron' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
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

        if ($this->container['triggers'] === null) {
            $invalidProperties[] = "'triggers' can't be null";
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
     * @return string
     */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
     * Sets cron
     *
     * @param string $cron The cron schedule for the alert. For example every 15 minutes is '*_/15 * * * *'. See https://crontab.run/ for more examples
     *
     * @return self
     */
    public function setCron($cron)
    {
        if (is_null($cron)) {
            throw new \InvalidArgumentException('non-nullable cron cannot be null');
        }
        $this->container['cron'] = $cron;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
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
            throw new \InvalidArgumentException('invalid length for $share_link when calling CreateAlertRequest., must be smaller than or equal to 2083.');
        }
        if (!is_null($share_link) && (mb_strlen($share_link) < 1)) {
            throw new \InvalidArgumentException('invalid length for $share_link when calling CreateAlertRequest., must be bigger than or equal to 1.');
        }

        $this->container['share_link'] = $share_link;

        return $this;
    }

    /**
     * Gets filter_params
     *
     * @return \AskNews\Model\FilterParams|null
     */
    public function getFilterParams()
    {
        return $this->container['filter_params'];
    }

    /**
     * Sets filter_params
     *
     * @param \AskNews\Model\FilterParams|null $filter_params filter_params
     *
     * @return self
     */
    public function setFilterParams($filter_params)
    {
        if (is_null($filter_params)) {
            array_push($this->openAPINullablesSetToNull, 'filter_params');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filter_params', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['filter_params'] = $filter_params;

        return $this;
    }

    /**
     * Gets triggers
     *
     * @return \AskNews\Model\TriggersInner[]
     */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
     * Sets triggers
     *
     * @param \AskNews\Model\TriggersInner[] $triggers triggers
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
     * @param bool|null $always_trigger Whether to always trigger the alert. Default is False. This skips the alert check and run triggers immediately
     *
     * @return self
     */
    public function setAlwaysTrigger($always_trigger)
    {
        if (is_null($always_trigger)) {
            throw new \InvalidArgumentException('non-nullable always_trigger cannot be null');
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
     * @param bool|null $repeat Whether to repeat the alert. Default is True. If False, the alert will be disabled after it triggers once
     *
     * @return self
     */
    public function setRepeat($repeat)
    {
        if (is_null($repeat)) {
            throw new \InvalidArgumentException('non-nullable repeat cannot be null');
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
     * @param bool|null $active Whether the alert is active or not. Default is True.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

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


