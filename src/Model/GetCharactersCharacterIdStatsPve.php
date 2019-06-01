<?php
/**
 * GetCharactersCharacterIdStatsPve
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
 * Swagger Codegen version: 2.4.5
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
 * GetCharactersCharacterIdStatsPve Class Doc Comment
 *
 * @category Class
 * @description pve object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStatsPve implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_pve';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dungeons_completed_agent' => 'int',
        'dungeons_completed_distribution' => 'int',
        'missions_succeeded' => 'int',
        'missions_succeeded_epic_arc' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dungeons_completed_agent' => 'int64',
        'dungeons_completed_distribution' => 'int64',
        'missions_succeeded' => 'int64',
        'missions_succeeded_epic_arc' => 'int64'
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
        'dungeons_completed_agent' => 'dungeons_completed_agent',
        'dungeons_completed_distribution' => 'dungeons_completed_distribution',
        'missions_succeeded' => 'missions_succeeded',
        'missions_succeeded_epic_arc' => 'missions_succeeded_epic_arc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dungeons_completed_agent' => 'setDungeonsCompletedAgent',
        'dungeons_completed_distribution' => 'setDungeonsCompletedDistribution',
        'missions_succeeded' => 'setMissionsSucceeded',
        'missions_succeeded_epic_arc' => 'setMissionsSucceededEpicArc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dungeons_completed_agent' => 'getDungeonsCompletedAgent',
        'dungeons_completed_distribution' => 'getDungeonsCompletedDistribution',
        'missions_succeeded' => 'getMissionsSucceeded',
        'missions_succeeded_epic_arc' => 'getMissionsSucceededEpicArc'
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
        $this->container['dungeons_completed_agent'] = isset($data['dungeons_completed_agent']) ? $data['dungeons_completed_agent'] : null;
        $this->container['dungeons_completed_distribution'] = isset($data['dungeons_completed_distribution']) ? $data['dungeons_completed_distribution'] : null;
        $this->container['missions_succeeded'] = isset($data['missions_succeeded']) ? $data['missions_succeeded'] : null;
        $this->container['missions_succeeded_epic_arc'] = isset($data['missions_succeeded_epic_arc']) ? $data['missions_succeeded_epic_arc'] : null;
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
     * Gets dungeons_completed_agent
     *
     * @return int
     */
    public function getDungeonsCompletedAgent()
    {
        return $this->container['dungeons_completed_agent'];
    }

    /**
     * Sets dungeons_completed_agent
     *
     * @param int $dungeons_completed_agent dungeons_completed_agent integer
     *
     * @return $this
     */
    public function setDungeonsCompletedAgent($dungeons_completed_agent)
    {
        $this->container['dungeons_completed_agent'] = $dungeons_completed_agent;

        return $this;
    }

    /**
     * Gets dungeons_completed_distribution
     *
     * @return int
     */
    public function getDungeonsCompletedDistribution()
    {
        return $this->container['dungeons_completed_distribution'];
    }

    /**
     * Sets dungeons_completed_distribution
     *
     * @param int $dungeons_completed_distribution dungeons_completed_distribution integer
     *
     * @return $this
     */
    public function setDungeonsCompletedDistribution($dungeons_completed_distribution)
    {
        $this->container['dungeons_completed_distribution'] = $dungeons_completed_distribution;

        return $this;
    }

    /**
     * Gets missions_succeeded
     *
     * @return int
     */
    public function getMissionsSucceeded()
    {
        return $this->container['missions_succeeded'];
    }

    /**
     * Sets missions_succeeded
     *
     * @param int $missions_succeeded missions_succeeded integer
     *
     * @return $this
     */
    public function setMissionsSucceeded($missions_succeeded)
    {
        $this->container['missions_succeeded'] = $missions_succeeded;

        return $this;
    }

    /**
     * Gets missions_succeeded_epic_arc
     *
     * @return int
     */
    public function getMissionsSucceededEpicArc()
    {
        return $this->container['missions_succeeded_epic_arc'];
    }

    /**
     * Sets missions_succeeded_epic_arc
     *
     * @param int $missions_succeeded_epic_arc missions_succeeded_epic_arc integer
     *
     * @return $this
     */
    public function setMissionsSucceededEpicArc($missions_succeeded_epic_arc)
    {
        $this->container['missions_succeeded_epic_arc'] = $missions_succeeded_epic_arc;

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


