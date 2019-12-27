<?php
/**
 * GetFwSystems200Ok
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
 * OpenAPI spec version: 1.2.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
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
 * GetFwSystems200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetFwSystems200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_fw_systems_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contested' => 'string',
        'occupier_faction_id' => 'int',
        'owner_faction_id' => 'int',
        'solar_system_id' => 'int',
        'victory_points' => 'int',
        'victory_points_threshold' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contested' => null,
        'occupier_faction_id' => 'int32',
        'owner_faction_id' => 'int32',
        'solar_system_id' => 'int32',
        'victory_points' => 'int32',
        'victory_points_threshold' => 'int32'
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
        'contested' => 'contested',
        'occupier_faction_id' => 'occupier_faction_id',
        'owner_faction_id' => 'owner_faction_id',
        'solar_system_id' => 'solar_system_id',
        'victory_points' => 'victory_points',
        'victory_points_threshold' => 'victory_points_threshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contested' => 'setContested',
        'occupier_faction_id' => 'setOccupierFactionId',
        'owner_faction_id' => 'setOwnerFactionId',
        'solar_system_id' => 'setSolarSystemId',
        'victory_points' => 'setVictoryPoints',
        'victory_points_threshold' => 'setVictoryPointsThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contested' => 'getContested',
        'occupier_faction_id' => 'getOccupierFactionId',
        'owner_faction_id' => 'getOwnerFactionId',
        'solar_system_id' => 'getSolarSystemId',
        'victory_points' => 'getVictoryPoints',
        'victory_points_threshold' => 'getVictoryPointsThreshold'
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

    const CONTESTED_CAPTURED = 'captured';
    const CONTESTED_CONTESTED = 'contested';
    const CONTESTED_UNCONTESTED = 'uncontested';
    const CONTESTED_VULNERABLE = 'vulnerable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContestedAllowableValues()
    {
        return [
            self::CONTESTED_CAPTURED,
            self::CONTESTED_CONTESTED,
            self::CONTESTED_UNCONTESTED,
            self::CONTESTED_VULNERABLE,
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
        $this->container['contested'] = isset($data['contested']) ? $data['contested'] : null;
        $this->container['occupier_faction_id'] = isset($data['occupier_faction_id']) ? $data['occupier_faction_id'] : null;
        $this->container['owner_faction_id'] = isset($data['owner_faction_id']) ? $data['owner_faction_id'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['victory_points'] = isset($data['victory_points']) ? $data['victory_points'] : null;
        $this->container['victory_points_threshold'] = isset($data['victory_points_threshold']) ? $data['victory_points_threshold'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contested'] === null) {
            $invalidProperties[] = "'contested' can't be null";
        }
        $allowedValues = $this->getContestedAllowableValues();
        if (!is_null($this->container['contested']) && !in_array($this->container['contested'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contested', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['occupier_faction_id'] === null) {
            $invalidProperties[] = "'occupier_faction_id' can't be null";
        }
        if ($this->container['owner_faction_id'] === null) {
            $invalidProperties[] = "'owner_faction_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['victory_points'] === null) {
            $invalidProperties[] = "'victory_points' can't be null";
        }
        if ($this->container['victory_points_threshold'] === null) {
            $invalidProperties[] = "'victory_points_threshold' can't be null";
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
     * Gets contested
     *
     * @return string
     */
    public function getContested()
    {
        return $this->container['contested'];
    }

    /**
     * Sets contested
     *
     * @param string $contested contested string
     *
     * @return $this
     */
    public function setContested($contested)
    {
        $allowedValues = $this->getContestedAllowableValues();
        if (!in_array($contested, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contested', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contested'] = $contested;

        return $this;
    }

    /**
     * Gets occupier_faction_id
     *
     * @return int
     */
    public function getOccupierFactionId()
    {
        return $this->container['occupier_faction_id'];
    }

    /**
     * Sets occupier_faction_id
     *
     * @param int $occupier_faction_id occupier_faction_id integer
     *
     * @return $this
     */
    public function setOccupierFactionId($occupier_faction_id)
    {
        $this->container['occupier_faction_id'] = $occupier_faction_id;

        return $this;
    }

    /**
     * Gets owner_faction_id
     *
     * @return int
     */
    public function getOwnerFactionId()
    {
        return $this->container['owner_faction_id'];
    }

    /**
     * Sets owner_faction_id
     *
     * @param int $owner_faction_id owner_faction_id integer
     *
     * @return $this
     */
    public function setOwnerFactionId($owner_faction_id)
    {
        $this->container['owner_faction_id'] = $owner_faction_id;

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
     * @param int $solar_system_id solar_system_id integer
     *
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets victory_points
     *
     * @return int
     */
    public function getVictoryPoints()
    {
        return $this->container['victory_points'];
    }

    /**
     * Sets victory_points
     *
     * @param int $victory_points victory_points integer
     *
     * @return $this
     */
    public function setVictoryPoints($victory_points)
    {
        $this->container['victory_points'] = $victory_points;

        return $this;
    }

    /**
     * Gets victory_points_threshold
     *
     * @return int
     */
    public function getVictoryPointsThreshold()
    {
        return $this->container['victory_points_threshold'];
    }

    /**
     * Sets victory_points_threshold
     *
     * @param int $victory_points_threshold victory_points_threshold integer
     *
     * @return $this
     */
    public function setVictoryPointsThreshold($victory_points_threshold)
    {
        $this->container['victory_points_threshold'] = $victory_points_threshold;

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


