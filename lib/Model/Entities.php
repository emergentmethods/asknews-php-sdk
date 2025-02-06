<?php
/**
 * Entities
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
 * Entities Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Entities implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Entities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'person' => 'string[]',
        'organization' => 'string[]',
        'location' => 'string[]',
        'nationality' => 'string[]',
        'date' => 'string[]',
        'event' => 'string[]',
        'money' => 'string[]',
        'law' => 'string[]',
        'quantity' => 'string[]',
        'time' => 'string[]',
        'sports' => 'string[]',
        'politics' => 'string[]',
        'title' => 'string[]',
        'number' => 'string[]',
        'arms' => 'string[]',
        'product' => 'string[]',
        'media' => 'string[]',
        'transportation' => 'string[]',
        'religion' => 'string[]',
        'technology' => 'string[]',
        'space' => 'string[]',
        'medicine' => 'string[]',
        'language' => 'string[]',
        'science' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'person' => null,
        'organization' => null,
        'location' => null,
        'nationality' => null,
        'date' => null,
        'event' => null,
        'money' => null,
        'law' => null,
        'quantity' => null,
        'time' => null,
        'sports' => null,
        'politics' => null,
        'title' => null,
        'number' => null,
        'arms' => null,
        'product' => null,
        'media' => null,
        'transportation' => null,
        'religion' => null,
        'technology' => null,
        'space' => null,
        'medicine' => null,
        'language' => null,
        'science' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'person' => false,
        'organization' => false,
        'location' => false,
        'nationality' => false,
        'date' => false,
        'event' => false,
        'money' => false,
        'law' => false,
        'quantity' => false,
        'time' => false,
        'sports' => false,
        'politics' => false,
        'title' => false,
        'number' => false,
        'arms' => false,
        'product' => false,
        'media' => false,
        'transportation' => false,
        'religion' => false,
        'technology' => false,
        'space' => false,
        'medicine' => false,
        'language' => false,
        'science' => false
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
        'person' => 'Person',
        'organization' => 'Organization',
        'location' => 'Location',
        'nationality' => 'Nationality',
        'date' => 'Date',
        'event' => 'Event',
        'money' => 'Money',
        'law' => 'Law',
        'quantity' => 'Quantity',
        'time' => 'Time',
        'sports' => 'Sports',
        'politics' => 'Politics',
        'title' => 'Title',
        'number' => 'Number',
        'arms' => 'Arms',
        'product' => 'Product',
        'media' => 'Media',
        'transportation' => 'Transportation',
        'religion' => 'Religion',
        'technology' => 'Technology',
        'space' => 'Space',
        'medicine' => 'Medicine',
        'language' => 'Language',
        'science' => 'Science'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'person' => 'setPerson',
        'organization' => 'setOrganization',
        'location' => 'setLocation',
        'nationality' => 'setNationality',
        'date' => 'setDate',
        'event' => 'setEvent',
        'money' => 'setMoney',
        'law' => 'setLaw',
        'quantity' => 'setQuantity',
        'time' => 'setTime',
        'sports' => 'setSports',
        'politics' => 'setPolitics',
        'title' => 'setTitle',
        'number' => 'setNumber',
        'arms' => 'setArms',
        'product' => 'setProduct',
        'media' => 'setMedia',
        'transportation' => 'setTransportation',
        'religion' => 'setReligion',
        'technology' => 'setTechnology',
        'space' => 'setSpace',
        'medicine' => 'setMedicine',
        'language' => 'setLanguage',
        'science' => 'setScience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'person' => 'getPerson',
        'organization' => 'getOrganization',
        'location' => 'getLocation',
        'nationality' => 'getNationality',
        'date' => 'getDate',
        'event' => 'getEvent',
        'money' => 'getMoney',
        'law' => 'getLaw',
        'quantity' => 'getQuantity',
        'time' => 'getTime',
        'sports' => 'getSports',
        'politics' => 'getPolitics',
        'title' => 'getTitle',
        'number' => 'getNumber',
        'arms' => 'getArms',
        'product' => 'getProduct',
        'media' => 'getMedia',
        'transportation' => 'getTransportation',
        'religion' => 'getReligion',
        'technology' => 'getTechnology',
        'space' => 'getSpace',
        'medicine' => 'getMedicine',
        'language' => 'getLanguage',
        'science' => 'getScience'
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
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('money', $data ?? [], null);
        $this->setIfExists('law', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('sports', $data ?? [], null);
        $this->setIfExists('politics', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('arms', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
        $this->setIfExists('transportation', $data ?? [], null);
        $this->setIfExists('religion', $data ?? [], null);
        $this->setIfExists('technology', $data ?? [], null);
        $this->setIfExists('space', $data ?? [], null);
        $this->setIfExists('medicine', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('science', $data ?? [], null);
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
     * Gets person
     *
     * @return string[]|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param string[]|null $person person
     *
     * @return self
     */
    public function setPerson($person)
    {
        if (is_null($person)) {
            throw new \InvalidArgumentException('non-nullable person cannot be null');
        }
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string[]|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string[]|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string[]|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string[]|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string[]|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string[]|null $nationality nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            throw new \InvalidArgumentException('non-nullable nationality cannot be null');
        }
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string[]|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string[]|null $date date
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
     * Gets event
     *
     * @return string[]|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string[]|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets money
     *
     * @return string[]|null
     */
    public function getMoney()
    {
        return $this->container['money'];
    }

    /**
     * Sets money
     *
     * @param string[]|null $money money
     *
     * @return self
     */
    public function setMoney($money)
    {
        if (is_null($money)) {
            throw new \InvalidArgumentException('non-nullable money cannot be null');
        }
        $this->container['money'] = $money;

        return $this;
    }

    /**
     * Gets law
     *
     * @return string[]|null
     */
    public function getLaw()
    {
        return $this->container['law'];
    }

    /**
     * Sets law
     *
     * @param string[]|null $law law
     *
     * @return self
     */
    public function setLaw($law)
    {
        if (is_null($law)) {
            throw new \InvalidArgumentException('non-nullable law cannot be null');
        }
        $this->container['law'] = $law;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string[]|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string[]|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string[]|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string[]|null $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            throw new \InvalidArgumentException('non-nullable time cannot be null');
        }
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets sports
     *
     * @return string[]|null
     */
    public function getSports()
    {
        return $this->container['sports'];
    }

    /**
     * Sets sports
     *
     * @param string[]|null $sports sports
     *
     * @return self
     */
    public function setSports($sports)
    {
        if (is_null($sports)) {
            throw new \InvalidArgumentException('non-nullable sports cannot be null');
        }
        $this->container['sports'] = $sports;

        return $this;
    }

    /**
     * Gets politics
     *
     * @return string[]|null
     */
    public function getPolitics()
    {
        return $this->container['politics'];
    }

    /**
     * Sets politics
     *
     * @param string[]|null $politics politics
     *
     * @return self
     */
    public function setPolitics($politics)
    {
        if (is_null($politics)) {
            throw new \InvalidArgumentException('non-nullable politics cannot be null');
        }
        $this->container['politics'] = $politics;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string[]|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string[]|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string[]|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string[]|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets arms
     *
     * @return string[]|null
     */
    public function getArms()
    {
        return $this->container['arms'];
    }

    /**
     * Sets arms
     *
     * @param string[]|null $arms arms
     *
     * @return self
     */
    public function setArms($arms)
    {
        if (is_null($arms)) {
            throw new \InvalidArgumentException('non-nullable arms cannot be null');
        }
        $this->container['arms'] = $arms;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string[]|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string[]|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets media
     *
     * @return string[]|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string[]|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets transportation
     *
     * @return string[]|null
     */
    public function getTransportation()
    {
        return $this->container['transportation'];
    }

    /**
     * Sets transportation
     *
     * @param string[]|null $transportation transportation
     *
     * @return self
     */
    public function setTransportation($transportation)
    {
        if (is_null($transportation)) {
            throw new \InvalidArgumentException('non-nullable transportation cannot be null');
        }
        $this->container['transportation'] = $transportation;

        return $this;
    }

    /**
     * Gets religion
     *
     * @return string[]|null
     */
    public function getReligion()
    {
        return $this->container['religion'];
    }

    /**
     * Sets religion
     *
     * @param string[]|null $religion religion
     *
     * @return self
     */
    public function setReligion($religion)
    {
        if (is_null($religion)) {
            throw new \InvalidArgumentException('non-nullable religion cannot be null');
        }
        $this->container['religion'] = $religion;

        return $this;
    }

    /**
     * Gets technology
     *
     * @return string[]|null
     */
    public function getTechnology()
    {
        return $this->container['technology'];
    }

    /**
     * Sets technology
     *
     * @param string[]|null $technology technology
     *
     * @return self
     */
    public function setTechnology($technology)
    {
        if (is_null($technology)) {
            throw new \InvalidArgumentException('non-nullable technology cannot be null');
        }
        $this->container['technology'] = $technology;

        return $this;
    }

    /**
     * Gets space
     *
     * @return string[]|null
     */
    public function getSpace()
    {
        return $this->container['space'];
    }

    /**
     * Sets space
     *
     * @param string[]|null $space space
     *
     * @return self
     */
    public function setSpace($space)
    {
        if (is_null($space)) {
            throw new \InvalidArgumentException('non-nullable space cannot be null');
        }
        $this->container['space'] = $space;

        return $this;
    }

    /**
     * Gets medicine
     *
     * @return string[]|null
     */
    public function getMedicine()
    {
        return $this->container['medicine'];
    }

    /**
     * Sets medicine
     *
     * @param string[]|null $medicine medicine
     *
     * @return self
     */
    public function setMedicine($medicine)
    {
        if (is_null($medicine)) {
            throw new \InvalidArgumentException('non-nullable medicine cannot be null');
        }
        $this->container['medicine'] = $medicine;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string[]|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string[]|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets science
     *
     * @return string[]|null
     */
    public function getScience()
    {
        return $this->container['science'];
    }

    /**
     * Sets science
     *
     * @param string[]|null $science science
     *
     * @return self
     */
    public function setScience($science)
    {
        if (is_null($science)) {
            throw new \InvalidArgumentException('non-nullable science cannot be null');
        }
        $this->container['science'] = $science;

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


