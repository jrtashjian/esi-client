<?php
/**
 * GetCharactersCharacterIdCalendarEventIdOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EsiClient\EsiClient\Model;

use \ArrayAccess;
use \EsiClient\ObjectSerializer;

/**
 * GetCharactersCharacterIdCalendarEventIdOk Class Doc Comment
 *
 * @category Class
 * @description Full details of a specific event
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdCalendarEventIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_calendar_event_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'duration' => 'int',
        'event_id' => 'int',
        'importance' => 'int',
        'owner_id' => 'int',
        'owner_name' => 'string',
        'owner_type' => 'string',
        'response' => 'string',
        'text' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'duration' => 'int32',
        'event_id' => 'int32',
        'importance' => 'int32',
        'owner_id' => 'int32',
        'owner_name' => null,
        'owner_type' => null,
        'response' => null,
        'text' => null,
        'title' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date' => 'date',
        'duration' => 'duration',
        'event_id' => 'event_id',
        'importance' => 'importance',
        'owner_id' => 'owner_id',
        'owner_name' => 'owner_name',
        'owner_type' => 'owner_type',
        'response' => 'response',
        'text' => 'text',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'duration' => 'setDuration',
        'event_id' => 'setEventId',
        'importance' => 'setImportance',
        'owner_id' => 'setOwnerId',
        'owner_name' => 'setOwnerName',
        'owner_type' => 'setOwnerType',
        'response' => 'setResponse',
        'text' => 'setText',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'duration' => 'getDuration',
        'event_id' => 'getEventId',
        'importance' => 'getImportance',
        'owner_id' => 'getOwnerId',
        'owner_name' => 'getOwnerName',
        'owner_type' => 'getOwnerType',
        'response' => 'getResponse',
        'text' => 'getText',
        'title' => 'getTitle'
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
        return self::$swaggerModelName;
    }

    const OWNER_TYPE_EVE_SERVER = 'eve_server';
    const OWNER_TYPE_CORPORATION = 'corporation';
    const OWNER_TYPE_FACTION = 'faction';
    const OWNER_TYPE_CHARACTER = 'character';
    const OWNER_TYPE_ALLIANCE = 'alliance';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOwnerTypeAllowableValues()
    {
        return [
            self::OWNER_TYPE_EVE_SERVER,
            self::OWNER_TYPE_CORPORATION,
            self::OWNER_TYPE_FACTION,
            self::OWNER_TYPE_CHARACTER,
            self::OWNER_TYPE_ALLIANCE,
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['importance'] = isset($data['importance']) ? $data['importance'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
        $this->container['owner_type'] = isset($data['owner_type']) ? $data['owner_type'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['event_id'] === null) {
            $invalidProperties[] = "'event_id' can't be null";
        }
        if ($this->container['importance'] === null) {
            $invalidProperties[] = "'importance' can't be null";
        }
        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['owner_name'] === null) {
            $invalidProperties[] = "'owner_name' can't be null";
        }
        if ($this->container['owner_type'] === null) {
            $invalidProperties[] = "'owner_type' can't be null";
        }
        $allowedValues = $this->getOwnerTypeAllowableValues();
        if (!in_array($this->container['owner_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'owner_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['response'] === null) {
            $invalidProperties[] = "'response' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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

        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['event_id'] === null) {
            return false;
        }
        if ($this->container['importance'] === null) {
            return false;
        }
        if ($this->container['owner_id'] === null) {
            return false;
        }
        if ($this->container['owner_name'] === null) {
            return false;
        }
        if ($this->container['owner_type'] === null) {
            return false;
        }
        $allowedValues = $this->getOwnerTypeAllowableValues();
        if (!in_array($this->container['owner_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['response'] === null) {
            return false;
        }
        if ($this->container['text'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        return true;
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
     * @param \DateTime $date date string
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Length in minutes
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param int $event_id event_id integer
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets importance
     *
     * @return int
     */
    public function getImportance()
    {
        return $this->container['importance'];
    }

    /**
     * Sets importance
     *
     * @param int $importance importance integer
     *
     * @return $this
     */
    public function setImportance($importance)
    {
        $this->container['importance'] = $importance;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int $owner_id owner_id integer
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets owner_name
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param string $owner_name owner_name string
     *
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets owner_type
     *
     * @return string
     */
    public function getOwnerType()
    {
        return $this->container['owner_type'];
    }

    /**
     * Sets owner_type
     *
     * @param string $owner_type owner_type string
     *
     * @return $this
     */
    public function setOwnerType($owner_type)
    {
        $allowedValues = $this->getOwnerTypeAllowableValues();
        if (!in_array($owner_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'owner_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['owner_type'] = $owner_type;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string $response response string
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text string
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
     * @param string $title title string
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


