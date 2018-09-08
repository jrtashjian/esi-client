<?php
/**
 * GetFleetsFleetIdMembers200Ok
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
 * OpenAPI spec version: 0.8.6
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
 * GetFleetsFleetIdMembers200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetFleetsFleetIdMembers200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_fleets_fleet_id_members_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'character_id' => 'int',
        'join_time' => '\DateTime',
        'role' => 'string',
        'role_name' => 'string',
        'ship_type_id' => 'int',
        'solar_system_id' => 'int',
        'squad_id' => 'int',
        'station_id' => 'int',
        'takes_fleet_warp' => 'bool',
        'wing_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'character_id' => 'int32',
        'join_time' => 'date-time',
        'role' => null,
        'role_name' => null,
        'ship_type_id' => 'int32',
        'solar_system_id' => 'int32',
        'squad_id' => 'int64',
        'station_id' => 'int64',
        'takes_fleet_warp' => null,
        'wing_id' => 'int64'
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
        'character_id' => 'character_id',
        'join_time' => 'join_time',
        'role' => 'role',
        'role_name' => 'role_name',
        'ship_type_id' => 'ship_type_id',
        'solar_system_id' => 'solar_system_id',
        'squad_id' => 'squad_id',
        'station_id' => 'station_id',
        'takes_fleet_warp' => 'takes_fleet_warp',
        'wing_id' => 'wing_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character_id' => 'setCharacterId',
        'join_time' => 'setJoinTime',
        'role' => 'setRole',
        'role_name' => 'setRoleName',
        'ship_type_id' => 'setShipTypeId',
        'solar_system_id' => 'setSolarSystemId',
        'squad_id' => 'setSquadId',
        'station_id' => 'setStationId',
        'takes_fleet_warp' => 'setTakesFleetWarp',
        'wing_id' => 'setWingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character_id' => 'getCharacterId',
        'join_time' => 'getJoinTime',
        'role' => 'getRole',
        'role_name' => 'getRoleName',
        'ship_type_id' => 'getShipTypeId',
        'solar_system_id' => 'getSolarSystemId',
        'squad_id' => 'getSquadId',
        'station_id' => 'getStationId',
        'takes_fleet_warp' => 'getTakesFleetWarp',
        'wing_id' => 'getWingId'
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

    const ROLE_FLEET_COMMANDER = 'fleet_commander';
    const ROLE_WING_COMMANDER = 'wing_commander';
    const ROLE_SQUAD_COMMANDER = 'squad_commander';
    const ROLE_SQUAD_MEMBER = 'squad_member';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_FLEET_COMMANDER,
            self::ROLE_WING_COMMANDER,
            self::ROLE_SQUAD_COMMANDER,
            self::ROLE_SQUAD_MEMBER,
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
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['join_time'] = isset($data['join_time']) ? $data['join_time'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['ship_type_id'] = isset($data['ship_type_id']) ? $data['ship_type_id'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['squad_id'] = isset($data['squad_id']) ? $data['squad_id'] : null;
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['takes_fleet_warp'] = isset($data['takes_fleet_warp']) ? $data['takes_fleet_warp'] : null;
        $this->container['wing_id'] = isset($data['wing_id']) ? $data['wing_id'] : null;
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
        if ($this->container['join_time'] === null) {
            $invalidProperties[] = "'join_time' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['role_name'] === null) {
            $invalidProperties[] = "'role_name' can't be null";
        }
        if ($this->container['ship_type_id'] === null) {
            $invalidProperties[] = "'ship_type_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['squad_id'] === null) {
            $invalidProperties[] = "'squad_id' can't be null";
        }
        if ($this->container['takes_fleet_warp'] === null) {
            $invalidProperties[] = "'takes_fleet_warp' can't be null";
        }
        if ($this->container['wing_id'] === null) {
            $invalidProperties[] = "'wing_id' can't be null";
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

        if ($this->container['character_id'] === null) {
            return false;
        }
        if ($this->container['join_time'] === null) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowedValues)) {
            return false;
        }
        if ($this->container['role_name'] === null) {
            return false;
        }
        if ($this->container['ship_type_id'] === null) {
            return false;
        }
        if ($this->container['solar_system_id'] === null) {
            return false;
        }
        if ($this->container['squad_id'] === null) {
            return false;
        }
        if ($this->container['takes_fleet_warp'] === null) {
            return false;
        }
        if ($this->container['wing_id'] === null) {
            return false;
        }
        return true;
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
     * Gets join_time
     *
     * @return \DateTime
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     *
     * @param \DateTime $join_time join_time string
     *
     * @return $this
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role Member’s role in fleet
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets role_name
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param string $role_name Localized role names
     *
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

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
     * Gets solar_system_id
     *
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int $solar_system_id Solar system the member is located in
     *
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets squad_id
     *
     * @return int
     */
    public function getSquadId()
    {
        return $this->container['squad_id'];
    }

    /**
     * Sets squad_id
     *
     * @param int $squad_id ID of the squad the member is in. If not applicable, will be set to -1
     *
     * @return $this
     */
    public function setSquadId($squad_id)
    {
        $this->container['squad_id'] = $squad_id;

        return $this;
    }

    /**
     * Gets station_id
     *
     * @return int
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     *
     * @param int $station_id Station in which the member is docked in, if applicable
     *
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets takes_fleet_warp
     *
     * @return bool
     */
    public function getTakesFleetWarp()
    {
        return $this->container['takes_fleet_warp'];
    }

    /**
     * Sets takes_fleet_warp
     *
     * @param bool $takes_fleet_warp Whether the member take fleet warps
     *
     * @return $this
     */
    public function setTakesFleetWarp($takes_fleet_warp)
    {
        $this->container['takes_fleet_warp'] = $takes_fleet_warp;

        return $this;
    }

    /**
     * Gets wing_id
     *
     * @return int
     */
    public function getWingId()
    {
        return $this->container['wing_id'];
    }

    /**
     * Sets wing_id
     *
     * @param int $wing_id ID of the wing the member is in. If not applicable, will be set to -1
     *
     * @return $this
     */
    public function setWingId($wing_id)
    {
        $this->container['wing_id'] = $wing_id;

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


