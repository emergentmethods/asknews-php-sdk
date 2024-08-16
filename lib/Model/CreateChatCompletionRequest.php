<?php
/**
 * CreateChatCompletionRequest
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
 * The version of the OpenAPI document: 0.9.5
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
 * CreateChatCompletionRequest Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateChatCompletionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateChatCompletionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model' => 'string',
        'messages' => '\AskNews\Model\CreateChatCompletionRequestMessage[]',
        'temperature' => 'mixed',
        'top_p' => 'mixed',
        'n' => 'mixed',
        'stream' => 'mixed',
        'stop' => '\AskNews\Model\Stop',
        'max_tokens' => 'mixed',
        'presence_penalty' => 'mixed',
        'frequency_penalty' => 'mixed',
        'user' => '\AskNews\Model\User',
        'inline_citations' => 'mixed',
        'append_references' => 'mixed',
        'journalist_mode' => 'mixed',
        'asknews_watermark' => 'mixed',
        'conversational_awareness' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model' => null,
        'messages' => null,
        'temperature' => null,
        'top_p' => null,
        'n' => null,
        'stream' => null,
        'stop' => null,
        'max_tokens' => null,
        'presence_penalty' => null,
        'frequency_penalty' => null,
        'user' => null,
        'inline_citations' => null,
        'append_references' => null,
        'journalist_mode' => null,
        'asknews_watermark' => null,
        'conversational_awareness' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'model' => false,
        'messages' => false,
        'temperature' => true,
        'top_p' => true,
        'n' => true,
        'stream' => true,
        'stop' => false,
        'max_tokens' => true,
        'presence_penalty' => true,
        'frequency_penalty' => true,
        'user' => false,
        'inline_citations' => true,
        'append_references' => true,
        'journalist_mode' => true,
        'asknews_watermark' => true,
        'conversational_awareness' => true
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
        'model' => 'model',
        'messages' => 'messages',
        'temperature' => 'temperature',
        'top_p' => 'top_p',
        'n' => 'n',
        'stream' => 'stream',
        'stop' => 'stop',
        'max_tokens' => 'max_tokens',
        'presence_penalty' => 'presence_penalty',
        'frequency_penalty' => 'frequency_penalty',
        'user' => 'user',
        'inline_citations' => 'inline_citations',
        'append_references' => 'append_references',
        'journalist_mode' => 'journalist_mode',
        'asknews_watermark' => 'asknews_watermark',
        'conversational_awareness' => 'conversational_awareness'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
        'messages' => 'setMessages',
        'temperature' => 'setTemperature',
        'top_p' => 'setTopP',
        'n' => 'setN',
        'stream' => 'setStream',
        'stop' => 'setStop',
        'max_tokens' => 'setMaxTokens',
        'presence_penalty' => 'setPresencePenalty',
        'frequency_penalty' => 'setFrequencyPenalty',
        'user' => 'setUser',
        'inline_citations' => 'setInlineCitations',
        'append_references' => 'setAppendReferences',
        'journalist_mode' => 'setJournalistMode',
        'asknews_watermark' => 'setAsknewsWatermark',
        'conversational_awareness' => 'setConversationalAwareness'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
        'messages' => 'getMessages',
        'temperature' => 'getTemperature',
        'top_p' => 'getTopP',
        'n' => 'getN',
        'stream' => 'getStream',
        'stop' => 'getStop',
        'max_tokens' => 'getMaxTokens',
        'presence_penalty' => 'getPresencePenalty',
        'frequency_penalty' => 'getFrequencyPenalty',
        'user' => 'getUser',
        'inline_citations' => 'getInlineCitations',
        'append_references' => 'getAppendReferences',
        'journalist_mode' => 'getJournalistMode',
        'asknews_watermark' => 'getAsknewsWatermark',
        'conversational_awareness' => 'getConversationalAwareness'
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

    public const INLINE_CITATIONS_NUMBERED = 'numbered';
    public const INLINE_CITATIONS_MARKDOWN_LINK = 'markdown_link';
    public const INLINE_CITATIONS_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInlineCitationsAllowableValues()
    {
        return [
            self::INLINE_CITATIONS_NUMBERED,
            self::INLINE_CITATIONS_MARKDOWN_LINK,
            self::INLINE_CITATIONS_NONE,
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
        $this->setIfExists('model', $data ?? [], 'gpt-3.5-turbo-16k');
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('temperature', $data ?? [], null);
        $this->setIfExists('top_p', $data ?? [], null);
        $this->setIfExists('n', $data ?? [], null);
        $this->setIfExists('stream', $data ?? [], null);
        $this->setIfExists('stop', $data ?? [], null);
        $this->setIfExists('max_tokens', $data ?? [], null);
        $this->setIfExists('presence_penalty', $data ?? [], null);
        $this->setIfExists('frequency_penalty', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('inline_citations', $data ?? [], null);
        $this->setIfExists('append_references', $data ?? [], null);
        $this->setIfExists('journalist_mode', $data ?? [], null);
        $this->setIfExists('asknews_watermark', $data ?? [], null);
        $this->setIfExists('conversational_awareness', $data ?? [], null);
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

        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
        $allowedValues = $this->getInlineCitationsAllowableValues();
        if (!is_null($this->container['inline_citations']) && !in_array($this->container['inline_citations'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'inline_citations', must be one of '%s'",
                $this->container['inline_citations'],
                implode("', '", $allowedValues)
            );
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
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \AskNews\Model\CreateChatCompletionRequestMessage[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \AskNews\Model\CreateChatCompletionRequestMessage[] $messages messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return mixed|null
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param mixed|null $temperature temperature
     *
     * @return self
     */
    public function setTemperature($temperature)
    {
        if (is_null($temperature)) {
            array_push($this->openAPINullablesSetToNull, 'temperature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('temperature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets top_p
     *
     * @return mixed|null
     */
    public function getTopP()
    {
        return $this->container['top_p'];
    }

    /**
     * Sets top_p
     *
     * @param mixed|null $top_p top_p
     *
     * @return self
     */
    public function setTopP($top_p)
    {
        if (is_null($top_p)) {
            array_push($this->openAPINullablesSetToNull, 'top_p');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_p', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['top_p'] = $top_p;

        return $this;
    }

    /**
     * Gets n
     *
     * @return mixed|null
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param mixed|null $n n
     *
     * @return self
     */
    public function setN($n)
    {
        if (is_null($n)) {
            array_push($this->openAPINullablesSetToNull, 'n');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets stream
     *
     * @return mixed|null
     */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
     * Sets stream
     *
     * @param mixed|null $stream stream
     *
     * @return self
     */
    public function setStream($stream)
    {
        if (is_null($stream)) {
            array_push($this->openAPINullablesSetToNull, 'stream');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stream', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stream'] = $stream;

        return $this;
    }

    /**
     * Gets stop
     *
     * @return \AskNews\Model\Stop|null
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     *
     * @param \AskNews\Model\Stop|null $stop stop
     *
     * @return self
     */
    public function setStop($stop)
    {
        if (is_null($stop)) {
            throw new \InvalidArgumentException('non-nullable stop cannot be null');
        }
        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets max_tokens
     *
     * @return mixed|null
     */
    public function getMaxTokens()
    {
        return $this->container['max_tokens'];
    }

    /**
     * Sets max_tokens
     *
     * @param mixed|null $max_tokens max_tokens
     *
     * @return self
     */
    public function setMaxTokens($max_tokens)
    {
        if (is_null($max_tokens)) {
            array_push($this->openAPINullablesSetToNull, 'max_tokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_tokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_tokens'] = $max_tokens;

        return $this;
    }

    /**
     * Gets presence_penalty
     *
     * @return mixed|null
     */
    public function getPresencePenalty()
    {
        return $this->container['presence_penalty'];
    }

    /**
     * Sets presence_penalty
     *
     * @param mixed|null $presence_penalty presence_penalty
     *
     * @return self
     */
    public function setPresencePenalty($presence_penalty)
    {
        if (is_null($presence_penalty)) {
            array_push($this->openAPINullablesSetToNull, 'presence_penalty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('presence_penalty', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['presence_penalty'] = $presence_penalty;

        return $this;
    }

    /**
     * Gets frequency_penalty
     *
     * @return mixed|null
     */
    public function getFrequencyPenalty()
    {
        return $this->container['frequency_penalty'];
    }

    /**
     * Sets frequency_penalty
     *
     * @param mixed|null $frequency_penalty frequency_penalty
     *
     * @return self
     */
    public function setFrequencyPenalty($frequency_penalty)
    {
        if (is_null($frequency_penalty)) {
            array_push($this->openAPINullablesSetToNull, 'frequency_penalty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frequency_penalty', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frequency_penalty'] = $frequency_penalty;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \AskNews\Model\User|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \AskNews\Model\User|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets inline_citations
     *
     * @return mixed|null
     */
    public function getInlineCitations()
    {
        return $this->container['inline_citations'];
    }

    /**
     * Sets inline_citations
     *
     * @param mixed|null $inline_citations inline_citations
     *
     * @return self
     */
    public function setInlineCitations($inline_citations)
    {
        if (is_null($inline_citations)) {
            array_push($this->openAPINullablesSetToNull, 'inline_citations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inline_citations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getInlineCitationsAllowableValues();
        if (!is_null($inline_citations) && !in_array($inline_citations, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'inline_citations', must be one of '%s'",
                    $inline_citations,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inline_citations'] = $inline_citations;

        return $this;
    }

    /**
     * Gets append_references
     *
     * @return mixed|null
     */
    public function getAppendReferences()
    {
        return $this->container['append_references'];
    }

    /**
     * Sets append_references
     *
     * @param mixed|null $append_references append_references
     *
     * @return self
     */
    public function setAppendReferences($append_references)
    {
        if (is_null($append_references)) {
            array_push($this->openAPINullablesSetToNull, 'append_references');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('append_references', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['append_references'] = $append_references;

        return $this;
    }

    /**
     * Gets journalist_mode
     *
     * @return mixed|null
     */
    public function getJournalistMode()
    {
        return $this->container['journalist_mode'];
    }

    /**
     * Sets journalist_mode
     *
     * @param mixed|null $journalist_mode journalist_mode
     *
     * @return self
     */
    public function setJournalistMode($journalist_mode)
    {
        if (is_null($journalist_mode)) {
            array_push($this->openAPINullablesSetToNull, 'journalist_mode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('journalist_mode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['journalist_mode'] = $journalist_mode;

        return $this;
    }

    /**
     * Gets asknews_watermark
     *
     * @return mixed|null
     */
    public function getAsknewsWatermark()
    {
        return $this->container['asknews_watermark'];
    }

    /**
     * Sets asknews_watermark
     *
     * @param mixed|null $asknews_watermark asknews_watermark
     *
     * @return self
     */
    public function setAsknewsWatermark($asknews_watermark)
    {
        if (is_null($asknews_watermark)) {
            array_push($this->openAPINullablesSetToNull, 'asknews_watermark');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('asknews_watermark', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['asknews_watermark'] = $asknews_watermark;

        return $this;
    }

    /**
     * Gets conversational_awareness
     *
     * @return mixed|null
     */
    public function getConversationalAwareness()
    {
        return $this->container['conversational_awareness'];
    }

    /**
     * Sets conversational_awareness
     *
     * @param mixed|null $conversational_awareness conversational_awareness
     *
     * @return self
     */
    public function setConversationalAwareness($conversational_awareness)
    {
        if (is_null($conversational_awareness)) {
            array_push($this->openAPINullablesSetToNull, 'conversational_awareness');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('conversational_awareness', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['conversational_awareness'] = $conversational_awareness;

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


