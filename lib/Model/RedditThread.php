<?php
/**
 * RedditThread
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
 * The version of the OpenAPI document: 0.10.8
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
 * RedditThread Class Doc Comment
 *
 * @category Class
 * @package  AskNews
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RedditThread implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedditThread';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'author' => 'string',
        'author_comment_karma' => 'int',
        'author_link_karma' => 'int',
        'body' => 'string',
        'classification' => '\AskNews\Model\Classification',
        'comments' => '\AskNews\Model\RedditComment[]',
        'comments_count' => 'int',
        'date' => '\DateTime',
        'entities' => '\AskNews\Model\RedditEntities',
        'id' => 'string',
        'key_takeaways' => 'string[]',
        'keywords' => 'string[]',
        'sentiment' => '\AskNews\Model\Sentiment',
        'subreddit_name' => 'string',
        'subreddit_url' => 'string',
        'summary' => 'string',
        'title' => 'string',
        'topic' => 'string',
        'upvotes' => 'int',
        'url' => 'string',
        'main_speculation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'author' => null,
        'author_comment_karma' => null,
        'author_link_karma' => null,
        'body' => null,
        'classification' => null,
        'comments' => null,
        'comments_count' => null,
        'date' => 'date-time',
        'entities' => null,
        'id' => 'uuid',
        'key_takeaways' => null,
        'keywords' => null,
        'sentiment' => null,
        'subreddit_name' => null,
        'subreddit_url' => null,
        'summary' => null,
        'title' => null,
        'topic' => null,
        'upvotes' => null,
        'url' => null,
        'main_speculation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'author' => false,
        'author_comment_karma' => false,
        'author_link_karma' => false,
        'body' => false,
        'classification' => false,
        'comments' => false,
        'comments_count' => false,
        'date' => false,
        'entities' => false,
        'id' => false,
        'key_takeaways' => false,
        'keywords' => false,
        'sentiment' => false,
        'subreddit_name' => false,
        'subreddit_url' => false,
        'summary' => false,
        'title' => false,
        'topic' => false,
        'upvotes' => false,
        'url' => false,
        'main_speculation' => false
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
        'author' => 'author',
        'author_comment_karma' => 'author_comment_karma',
        'author_link_karma' => 'author_link_karma',
        'body' => 'body',
        'classification' => 'classification',
        'comments' => 'comments',
        'comments_count' => 'comments_count',
        'date' => 'date',
        'entities' => 'entities',
        'id' => 'id',
        'key_takeaways' => 'key_takeaways',
        'keywords' => 'keywords',
        'sentiment' => 'sentiment',
        'subreddit_name' => 'subreddit_name',
        'subreddit_url' => 'subreddit_url',
        'summary' => 'summary',
        'title' => 'title',
        'topic' => 'topic',
        'upvotes' => 'upvotes',
        'url' => 'url',
        'main_speculation' => 'main_speculation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author' => 'setAuthor',
        'author_comment_karma' => 'setAuthorCommentKarma',
        'author_link_karma' => 'setAuthorLinkKarma',
        'body' => 'setBody',
        'classification' => 'setClassification',
        'comments' => 'setComments',
        'comments_count' => 'setCommentsCount',
        'date' => 'setDate',
        'entities' => 'setEntities',
        'id' => 'setId',
        'key_takeaways' => 'setKeyTakeaways',
        'keywords' => 'setKeywords',
        'sentiment' => 'setSentiment',
        'subreddit_name' => 'setSubredditName',
        'subreddit_url' => 'setSubredditUrl',
        'summary' => 'setSummary',
        'title' => 'setTitle',
        'topic' => 'setTopic',
        'upvotes' => 'setUpvotes',
        'url' => 'setUrl',
        'main_speculation' => 'setMainSpeculation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author' => 'getAuthor',
        'author_comment_karma' => 'getAuthorCommentKarma',
        'author_link_karma' => 'getAuthorLinkKarma',
        'body' => 'getBody',
        'classification' => 'getClassification',
        'comments' => 'getComments',
        'comments_count' => 'getCommentsCount',
        'date' => 'getDate',
        'entities' => 'getEntities',
        'id' => 'getId',
        'key_takeaways' => 'getKeyTakeaways',
        'keywords' => 'getKeywords',
        'sentiment' => 'getSentiment',
        'subreddit_name' => 'getSubredditName',
        'subreddit_url' => 'getSubredditUrl',
        'summary' => 'getSummary',
        'title' => 'getTitle',
        'topic' => 'getTopic',
        'upvotes' => 'getUpvotes',
        'url' => 'getUrl',
        'main_speculation' => 'getMainSpeculation'
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
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('author_comment_karma', $data ?? [], null);
        $this->setIfExists('author_link_karma', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('classification', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('comments_count', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('entities', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('key_takeaways', $data ?? [], null);
        $this->setIfExists('keywords', $data ?? [], null);
        $this->setIfExists('sentiment', $data ?? [], null);
        $this->setIfExists('subreddit_name', $data ?? [], null);
        $this->setIfExists('subreddit_url', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('topic', $data ?? [], null);
        $this->setIfExists('upvotes', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('main_speculation', $data ?? [], '');
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

        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }
        if ($this->container['author_comment_karma'] === null) {
            $invalidProperties[] = "'author_comment_karma' can't be null";
        }
        if ($this->container['author_link_karma'] === null) {
            $invalidProperties[] = "'author_link_karma' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['classification'] === null) {
            $invalidProperties[] = "'classification' can't be null";
        }
        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
        }
        if ($this->container['comments_count'] === null) {
            $invalidProperties[] = "'comments_count' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['entities'] === null) {
            $invalidProperties[] = "'entities' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['keywords'] === null) {
            $invalidProperties[] = "'keywords' can't be null";
        }
        if ($this->container['sentiment'] === null) {
            $invalidProperties[] = "'sentiment' can't be null";
        }
        if ($this->container['subreddit_name'] === null) {
            $invalidProperties[] = "'subreddit_name' can't be null";
        }
        if ($this->container['subreddit_url'] === null) {
            $invalidProperties[] = "'subreddit_url' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['upvotes'] === null) {
            $invalidProperties[] = "'upvotes' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets author_comment_karma
     *
     * @return int
     */
    public function getAuthorCommentKarma()
    {
        return $this->container['author_comment_karma'];
    }

    /**
     * Sets author_comment_karma
     *
     * @param int $author_comment_karma author_comment_karma
     *
     * @return self
     */
    public function setAuthorCommentKarma($author_comment_karma)
    {
        if (is_null($author_comment_karma)) {
            throw new \InvalidArgumentException('non-nullable author_comment_karma cannot be null');
        }
        $this->container['author_comment_karma'] = $author_comment_karma;

        return $this;
    }

    /**
     * Gets author_link_karma
     *
     * @return int
     */
    public function getAuthorLinkKarma()
    {
        return $this->container['author_link_karma'];
    }

    /**
     * Sets author_link_karma
     *
     * @param int $author_link_karma author_link_karma
     *
     * @return self
     */
    public function setAuthorLinkKarma($author_link_karma)
    {
        if (is_null($author_link_karma)) {
            throw new \InvalidArgumentException('non-nullable author_link_karma cannot be null');
        }
        $this->container['author_link_karma'] = $author_link_karma;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return \AskNews\Model\Classification
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param \AskNews\Model\Classification $classification classification
     *
     * @return self
     */
    public function setClassification($classification)
    {
        if (is_null($classification)) {
            throw new \InvalidArgumentException('non-nullable classification cannot be null');
        }
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \AskNews\Model\RedditComment[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \AskNews\Model\RedditComment[] $comments comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets comments_count
     *
     * @return int
     */
    public function getCommentsCount()
    {
        return $this->container['comments_count'];
    }

    /**
     * Sets comments_count
     *
     * @param int $comments_count comments_count
     *
     * @return self
     */
    public function setCommentsCount($comments_count)
    {
        if (is_null($comments_count)) {
            throw new \InvalidArgumentException('non-nullable comments_count cannot be null');
        }
        $this->container['comments_count'] = $comments_count;

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
     * Gets entities
     *
     * @return \AskNews\Model\RedditEntities
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \AskNews\Model\RedditEntities $entities entities
     *
     * @return self
     */
    public function setEntities($entities)
    {
        if (is_null($entities)) {
            throw new \InvalidArgumentException('non-nullable entities cannot be null');
        }
        $this->container['entities'] = $entities;

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
     * Gets key_takeaways
     *
     * @return string[]|null
     */
    public function getKeyTakeaways()
    {
        return $this->container['key_takeaways'];
    }

    /**
     * Sets key_takeaways
     *
     * @param string[]|null $key_takeaways key_takeaways
     *
     * @return self
     */
    public function setKeyTakeaways($key_takeaways)
    {
        if (is_null($key_takeaways)) {
            throw new \InvalidArgumentException('non-nullable key_takeaways cannot be null');
        }
        $this->container['key_takeaways'] = $key_takeaways;

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
     * Gets sentiment
     *
     * @return \AskNews\Model\Sentiment
     */
    public function getSentiment()
    {
        return $this->container['sentiment'];
    }

    /**
     * Sets sentiment
     *
     * @param \AskNews\Model\Sentiment $sentiment sentiment
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
     * Gets subreddit_name
     *
     * @return string
     */
    public function getSubredditName()
    {
        return $this->container['subreddit_name'];
    }

    /**
     * Sets subreddit_name
     *
     * @param string $subreddit_name subreddit_name
     *
     * @return self
     */
    public function setSubredditName($subreddit_name)
    {
        if (is_null($subreddit_name)) {
            throw new \InvalidArgumentException('non-nullable subreddit_name cannot be null');
        }
        $this->container['subreddit_name'] = $subreddit_name;

        return $this;
    }

    /**
     * Gets subreddit_url
     *
     * @return string
     */
    public function getSubredditUrl()
    {
        return $this->container['subreddit_url'];
    }

    /**
     * Sets subreddit_url
     *
     * @param string $subreddit_url subreddit_url
     *
     * @return self
     */
    public function setSubredditUrl($subreddit_url)
    {
        if (is_null($subreddit_url)) {
            throw new \InvalidArgumentException('non-nullable subreddit_url cannot be null');
        }
        $this->container['subreddit_url'] = $subreddit_url;

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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
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
     * Gets upvotes
     *
     * @return int
     */
    public function getUpvotes()
    {
        return $this->container['upvotes'];
    }

    /**
     * Sets upvotes
     *
     * @param int $upvotes upvotes
     *
     * @return self
     */
    public function setUpvotes($upvotes)
    {
        if (is_null($upvotes)) {
            throw new \InvalidArgumentException('non-nullable upvotes cannot be null');
        }
        $this->container['upvotes'] = $upvotes;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets main_speculation
     *
     * @return string|null
     */
    public function getMainSpeculation()
    {
        return $this->container['main_speculation'];
    }

    /**
     * Sets main_speculation
     *
     * @param string|null $main_speculation main_speculation
     *
     * @return self
     */
    public function setMainSpeculation($main_speculation)
    {
        if (is_null($main_speculation)) {
            throw new \InvalidArgumentException('non-nullable main_speculation cannot be null');
        }
        $this->container['main_speculation'] = $main_speculation;

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


