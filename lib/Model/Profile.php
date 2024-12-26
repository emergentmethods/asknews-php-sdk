<?php
/**
 * Profile
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
 * The version of the OpenAPI document: 0.16.0
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
 * Profile Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Profile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'identity_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identity_type' => 'string',
        'id' => 'string',
        'subscription' => '\AskNews\Model\UserProfileSubscription',
        'suspended' => 'bool',
        'impersonates_plan' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identity_type' => null,
        'id' => null,
        'subscription' => null,
        'suspended' => null,
        'impersonates_plan' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'identity_type' => false,
        'id' => false,
        'subscription' => false,
        'suspended' => false,
        'impersonates_plan' => false
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
        'identity_type' => 'identity_type',
        'id' => 'id',
        'subscription' => 'subscription',
        'suspended' => 'suspended',
        'impersonates_plan' => 'impersonates_plan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identity_type' => 'setIdentityType',
        'id' => 'setId',
        'subscription' => 'setSubscription',
        'suspended' => 'setSuspended',
        'impersonates_plan' => 'setImpersonatesPlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identity_type' => 'getIdentityType',
        'id' => 'getId',
        'subscription' => 'getSubscription',
        'suspended' => 'getSuspended',
        'impersonates_plan' => 'getImpersonatesPlan'
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

    public const IDENTITY_TYPE_SERVICE_ACCOUNT = 'service_account';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdentityTypeAllowableValues()
    {
        return [
            self::IDENTITY_TYPE_SERVICE_ACCOUNT,
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
        $this->setIfExists('identity_type', $data ?? [], 'service_account');
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('suspended', $data ?? [], false);
        $this->setIfExists('impersonates_plan', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['identity_type'] = static::$openAPIModelName;
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

        $allowedValues = $this->getIdentityTypeAllowableValues();
        if (!is_null($this->container['identity_type']) && !in_array($this->container['identity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'identity_type', must be one of '%s'",
                $this->container['identity_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['subscription'] === null) {
            $invalidProperties[] = "'subscription' can't be null";
        }
        if ($this->container['impersonates_plan'] === null) {
            $invalidProperties[] = "'impersonates_plan' can't be null";
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
     * Gets identity_type
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identity_type'];
    }

    /**
     * Sets identity_type
     *
     * @param string|null $identity_type identity_type
     *
     * @return self
     */
    public function setIdentityType($identity_type)
    {
        if (is_null($identity_type)) {
            throw new \InvalidArgumentException('non-nullable identity_type cannot be null');
        }
        $allowedValues = $this->getIdentityTypeAllowableValues();
        if (!in_array($identity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'identity_type', must be one of '%s'",
                    $identity_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['identity_type'] = $identity_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \AskNews\Model\UserProfileSubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \AskNews\Model\UserProfileSubscription $subscription subscription
     *
     * @return self
     */
    public function setSubscription($subscription)
    {
        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended suspended
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        if (is_null($suspended)) {
            throw new \InvalidArgumentException('non-nullable suspended cannot be null');
        }
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets impersonates_plan
     *
     * @return string
     */
    public function getImpersonatesPlan()
    {
        return $this->container['impersonates_plan'];
    }

    /**
     * Sets impersonates_plan
     *
     * @param string $impersonates_plan impersonates_plan
     *
     * @return self
     */
    public function setImpersonatesPlan($impersonates_plan)
    {
        if (is_null($impersonates_plan)) {
            throw new \InvalidArgumentException('non-nullable impersonates_plan cannot be null');
        }
        $this->container['impersonates_plan'] = $impersonates_plan;

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


