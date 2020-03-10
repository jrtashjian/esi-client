<?php
/**
 * GetCorporationsCorporationIdMembertracking200Ok
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
 * OpenAPI spec version: 1.3.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
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
 * GetCorporationsCorporationIdMembertracking200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdMembertracking200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_membertracking_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_id' => 'int',
        'character_id' => 'int',
        'location_id' => 'int',
        'logoff_date' => '\DateTime',
        'logon_date' => '\DateTime',
        'ship_type_id' => 'int',
        'start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_id' => 'int32',
        'character_id' => 'int32',
        'location_id' => 'int64',
        'logoff_date' => 'date-time',
        'logon_date' => 'date-time',
        'ship_type_id' => 'int32',
        'start_date' => 'date-time'
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
        'base_id' => 'base_id',
        'character_id' => 'character_id',
        'location_id' => 'location_id',
        'logoff_date' => 'logoff_date',
        'logon_date' => 'logon_date',
        'ship_type_id' => 'ship_type_id',
        'start_date' => 'start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_id' => 'setBaseId',
        'character_id' => 'setCharacterId',
        'location_id' => 'setLocationId',
        'logoff_date' => 'setLogoffDate',
        'logon_date' => 'setLogonDate',
        'ship_type_id' => 'setShipTypeId',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_id' => 'getBaseId',
        'character_id' => 'getCharacterId',
        'location_id' => 'getLocationId',
        'logoff_date' => 'getLogoffDate',
        'logon_date' => 'getLogonDate',
        'ship_type_id' => 'getShipTypeId',
        'start_date' => 'getStartDate'
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
        $this->container['base_id'] = isset($data['base_id']) ? $data['base_id'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['logoff_date'] = isset($data['logoff_date']) ? $data['logoff_date'] : null;
        $this->container['logon_date'] = isset($data['logon_date']) ? $data['logon_date'] : null;
        $this->container['ship_type_id'] = isset($data['ship_type_id']) ? $data['ship_type_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
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
     * Gets base_id
     *
     * @return int
     */
    public function getBaseId()
    {
        return $this->container['base_id'];
    }

    /**
     * Sets base_id
     *
     * @param int $base_id base_id integer
     *
     * @return $this
     */
    public function setBaseId($base_id)
    {
        $this->container['base_id'] = $base_id;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id character_id integer
     *
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id location_id integer
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets logoff_date
     *
     * @return \DateTime
     */
    public function getLogoffDate()
    {
        return $this->container['logoff_date'];
    }

    /**
     * Sets logoff_date
     *
     * @param \DateTime $logoff_date logoff_date string
     *
     * @return $this
     */
    public function setLogoffDate($logoff_date)
    {
        $this->container['logoff_date'] = $logoff_date;

        return $this;
    }

    /**
     * Gets logon_date
     *
     * @return \DateTime
     */
    public function getLogonDate()
    {
        return $this->container['logon_date'];
    }

    /**
     * Sets logon_date
     *
     * @param \DateTime $logon_date logon_date string
     *
     * @return $this
     */
    public function setLogonDate($logon_date)
    {
        $this->container['logon_date'] = $logon_date;

        return $this;
    }

    /**
     * Gets ship_type_id
     *
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     *
     * @param int $ship_type_id ship_type_id integer
     *
     * @return $this
     */
    public function setShipTypeId($ship_type_id)
    {
        $this->container['ship_type_id'] = $ship_type_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date string
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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


