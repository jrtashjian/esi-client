<?php
/**
 * GetCorporationsCorporationIdStructures200Ok
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
 * GetCorporationsCorporationIdStructures200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStructures200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'corporation_id' => 'int',
        'fuel_expires' => '\DateTime',
        'next_reinforce_apply' => '\DateTime',
        'next_reinforce_hour' => 'int',
        'next_reinforce_weekday' => 'int',
        'profile_id' => 'int',
        'reinforce_hour' => 'int',
        'reinforce_weekday' => 'int',
        'services' => '\EsiClient\EsiClient\Model\GetCorporationsCorporationIdStructuresService[]',
        'state' => 'string',
        'state_timer_end' => '\DateTime',
        'state_timer_start' => '\DateTime',
        'structure_id' => 'int',
        'system_id' => 'int',
        'type_id' => 'int',
        'unanchors_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'corporation_id' => 'int32',
        'fuel_expires' => 'date-time',
        'next_reinforce_apply' => 'date-time',
        'next_reinforce_hour' => 'int32',
        'next_reinforce_weekday' => 'int32',
        'profile_id' => 'int32',
        'reinforce_hour' => 'int32',
        'reinforce_weekday' => 'int32',
        'services' => null,
        'state' => null,
        'state_timer_end' => 'date-time',
        'state_timer_start' => 'date-time',
        'structure_id' => 'int64',
        'system_id' => 'int32',
        'type_id' => 'int32',
        'unanchors_at' => 'date-time'
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
        'corporation_id' => 'corporation_id',
        'fuel_expires' => 'fuel_expires',
        'next_reinforce_apply' => 'next_reinforce_apply',
        'next_reinforce_hour' => 'next_reinforce_hour',
        'next_reinforce_weekday' => 'next_reinforce_weekday',
        'profile_id' => 'profile_id',
        'reinforce_hour' => 'reinforce_hour',
        'reinforce_weekday' => 'reinforce_weekday',
        'services' => 'services',
        'state' => 'state',
        'state_timer_end' => 'state_timer_end',
        'state_timer_start' => 'state_timer_start',
        'structure_id' => 'structure_id',
        'system_id' => 'system_id',
        'type_id' => 'type_id',
        'unanchors_at' => 'unanchors_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'corporation_id' => 'setCorporationId',
        'fuel_expires' => 'setFuelExpires',
        'next_reinforce_apply' => 'setNextReinforceApply',
        'next_reinforce_hour' => 'setNextReinforceHour',
        'next_reinforce_weekday' => 'setNextReinforceWeekday',
        'profile_id' => 'setProfileId',
        'reinforce_hour' => 'setReinforceHour',
        'reinforce_weekday' => 'setReinforceWeekday',
        'services' => 'setServices',
        'state' => 'setState',
        'state_timer_end' => 'setStateTimerEnd',
        'state_timer_start' => 'setStateTimerStart',
        'structure_id' => 'setStructureId',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId',
        'unanchors_at' => 'setUnanchorsAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'corporation_id' => 'getCorporationId',
        'fuel_expires' => 'getFuelExpires',
        'next_reinforce_apply' => 'getNextReinforceApply',
        'next_reinforce_hour' => 'getNextReinforceHour',
        'next_reinforce_weekday' => 'getNextReinforceWeekday',
        'profile_id' => 'getProfileId',
        'reinforce_hour' => 'getReinforceHour',
        'reinforce_weekday' => 'getReinforceWeekday',
        'services' => 'getServices',
        'state' => 'getState',
        'state_timer_end' => 'getStateTimerEnd',
        'state_timer_start' => 'getStateTimerStart',
        'structure_id' => 'getStructureId',
        'system_id' => 'getSystemId',
        'type_id' => 'getTypeId',
        'unanchors_at' => 'getUnanchorsAt'
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

    const STATE_ANCHOR_VULNERABLE = 'anchor_vulnerable';
    const STATE_ANCHORING = 'anchoring';
    const STATE_ARMOR_REINFORCE = 'armor_reinforce';
    const STATE_ARMOR_VULNERABLE = 'armor_vulnerable';
    const STATE_FITTING_INVULNERABLE = 'fitting_invulnerable';
    const STATE_HULL_REINFORCE = 'hull_reinforce';
    const STATE_HULL_VULNERABLE = 'hull_vulnerable';
    const STATE_ONLINE_DEPRECATED = 'online_deprecated';
    const STATE_ONLINING_VULNERABLE = 'onlining_vulnerable';
    const STATE_SHIELD_VULNERABLE = 'shield_vulnerable';
    const STATE_UNANCHORED = 'unanchored';
    const STATE_UNKNOWN = 'unknown';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ANCHOR_VULNERABLE,
            self::STATE_ANCHORING,
            self::STATE_ARMOR_REINFORCE,
            self::STATE_ARMOR_VULNERABLE,
            self::STATE_FITTING_INVULNERABLE,
            self::STATE_HULL_REINFORCE,
            self::STATE_HULL_VULNERABLE,
            self::STATE_ONLINE_DEPRECATED,
            self::STATE_ONLINING_VULNERABLE,
            self::STATE_SHIELD_VULNERABLE,
            self::STATE_UNANCHORED,
            self::STATE_UNKNOWN,
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
        $this->container['corporation_id'] = isset($data['corporation_id']) ? $data['corporation_id'] : null;
        $this->container['fuel_expires'] = isset($data['fuel_expires']) ? $data['fuel_expires'] : null;
        $this->container['next_reinforce_apply'] = isset($data['next_reinforce_apply']) ? $data['next_reinforce_apply'] : null;
        $this->container['next_reinforce_hour'] = isset($data['next_reinforce_hour']) ? $data['next_reinforce_hour'] : null;
        $this->container['next_reinforce_weekday'] = isset($data['next_reinforce_weekday']) ? $data['next_reinforce_weekday'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['reinforce_hour'] = isset($data['reinforce_hour']) ? $data['reinforce_hour'] : null;
        $this->container['reinforce_weekday'] = isset($data['reinforce_weekday']) ? $data['reinforce_weekday'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_timer_end'] = isset($data['state_timer_end']) ? $data['state_timer_end'] : null;
        $this->container['state_timer_start'] = isset($data['state_timer_start']) ? $data['state_timer_start'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['unanchors_at'] = isset($data['unanchors_at']) ? $data['unanchors_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['corporation_id'] === null) {
            $invalidProperties[] = "'corporation_id' can't be null";
        }
        if (!is_null($this->container['next_reinforce_hour']) && ($this->container['next_reinforce_hour'] > 23)) {
            $invalidProperties[] = "invalid value for 'next_reinforce_hour', must be smaller than or equal to 23.";
        }

        if (!is_null($this->container['next_reinforce_hour']) && ($this->container['next_reinforce_hour'] < 0)) {
            $invalidProperties[] = "invalid value for 'next_reinforce_hour', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['next_reinforce_weekday']) && ($this->container['next_reinforce_weekday'] > 6)) {
            $invalidProperties[] = "invalid value for 'next_reinforce_weekday', must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['next_reinforce_weekday']) && ($this->container['next_reinforce_weekday'] < 0)) {
            $invalidProperties[] = "invalid value for 'next_reinforce_weekday', must be bigger than or equal to 0.";
        }

        if ($this->container['profile_id'] === null) {
            $invalidProperties[] = "'profile_id' can't be null";
        }
        if ($this->container['reinforce_hour'] === null) {
            $invalidProperties[] = "'reinforce_hour' can't be null";
        }
        if (($this->container['reinforce_hour'] > 23)) {
            $invalidProperties[] = "invalid value for 'reinforce_hour', must be smaller than or equal to 23.";
        }

        if (($this->container['reinforce_hour'] < 0)) {
            $invalidProperties[] = "invalid value for 'reinforce_hour', must be bigger than or equal to 0.";
        }

        if ($this->container['reinforce_weekday'] === null) {
            $invalidProperties[] = "'reinforce_weekday' can't be null";
        }
        if (($this->container['reinforce_weekday'] > 6)) {
            $invalidProperties[] = "invalid value for 'reinforce_weekday', must be smaller than or equal to 6.";
        }

        if (($this->container['reinforce_weekday'] < 0)) {
            $invalidProperties[] = "invalid value for 'reinforce_weekday', must be bigger than or equal to 0.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
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

        if ($this->container['corporation_id'] === null) {
            return false;
        }
        if ($this->container['next_reinforce_hour'] > 23) {
            return false;
        }
        if ($this->container['next_reinforce_hour'] < 0) {
            return false;
        }
        if ($this->container['next_reinforce_weekday'] > 6) {
            return false;
        }
        if ($this->container['next_reinforce_weekday'] < 0) {
            return false;
        }
        if ($this->container['profile_id'] === null) {
            return false;
        }
        if ($this->container['reinforce_hour'] === null) {
            return false;
        }
        if ($this->container['reinforce_hour'] > 23) {
            return false;
        }
        if ($this->container['reinforce_hour'] < 0) {
            return false;
        }
        if ($this->container['reinforce_weekday'] === null) {
            return false;
        }
        if ($this->container['reinforce_weekday'] > 6) {
            return false;
        }
        if ($this->container['reinforce_weekday'] < 0) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowedValues)) {
            return false;
        }
        if ($this->container['structure_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets corporation_id
     *
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int $corporation_id ID of the corporation that owns the structure
     *
     * @return $this
     */
    public function setCorporationId($corporation_id)
    {
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets fuel_expires
     *
     * @return \DateTime
     */
    public function getFuelExpires()
    {
        return $this->container['fuel_expires'];
    }

    /**
     * Sets fuel_expires
     *
     * @param \DateTime $fuel_expires Date on which the structure will run out of fuel
     *
     * @return $this
     */
    public function setFuelExpires($fuel_expires)
    {
        $this->container['fuel_expires'] = $fuel_expires;

        return $this;
    }

    /**
     * Gets next_reinforce_apply
     *
     * @return \DateTime
     */
    public function getNextReinforceApply()
    {
        return $this->container['next_reinforce_apply'];
    }

    /**
     * Sets next_reinforce_apply
     *
     * @param \DateTime $next_reinforce_apply The date and time when the structure's newly requested reinforcement times (e.g. next_reinforce_hour and next_reinforce_day) will take effect
     *
     * @return $this
     */
    public function setNextReinforceApply($next_reinforce_apply)
    {
        $this->container['next_reinforce_apply'] = $next_reinforce_apply;

        return $this;
    }

    /**
     * Gets next_reinforce_hour
     *
     * @return int
     */
    public function getNextReinforceHour()
    {
        return $this->container['next_reinforce_hour'];
    }

    /**
     * Sets next_reinforce_hour
     *
     * @param int $next_reinforce_hour The requested change to reinforce_hour that will take effect at the time shown by next_reinforce_apply
     *
     * @return $this
     */
    public function setNextReinforceHour($next_reinforce_hour)
    {

        if (!is_null($next_reinforce_hour) && ($next_reinforce_hour > 23)) {
            throw new \InvalidArgumentException('invalid value for $next_reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be smaller than or equal to 23.');
        }
        if (!is_null($next_reinforce_hour) && ($next_reinforce_hour < 0)) {
            throw new \InvalidArgumentException('invalid value for $next_reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be bigger than or equal to 0.');
        }

        $this->container['next_reinforce_hour'] = $next_reinforce_hour;

        return $this;
    }

    /**
     * Gets next_reinforce_weekday
     *
     * @return int
     */
    public function getNextReinforceWeekday()
    {
        return $this->container['next_reinforce_weekday'];
    }

    /**
     * Sets next_reinforce_weekday
     *
     * @param int $next_reinforce_weekday The requested change to reinforce_weekday that will take effect at the time shown by next_reinforce_apply
     *
     * @return $this
     */
    public function setNextReinforceWeekday($next_reinforce_weekday)
    {

        if (!is_null($next_reinforce_weekday) && ($next_reinforce_weekday > 6)) {
            throw new \InvalidArgumentException('invalid value for $next_reinforce_weekday when calling GetCorporationsCorporationIdStructures200Ok., must be smaller than or equal to 6.');
        }
        if (!is_null($next_reinforce_weekday) && ($next_reinforce_weekday < 0)) {
            throw new \InvalidArgumentException('invalid value for $next_reinforce_weekday when calling GetCorporationsCorporationIdStructures200Ok., must be bigger than or equal to 0.');
        }

        $this->container['next_reinforce_weekday'] = $next_reinforce_weekday;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param int $profile_id The id of the ACL profile for this citadel
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets reinforce_hour
     *
     * @return int
     */
    public function getReinforceHour()
    {
        return $this->container['reinforce_hour'];
    }

    /**
     * Sets reinforce_hour
     *
     * @param int $reinforce_hour The hour of day that determines the four hour window when the structure will randomly exit its reinforcement periods and become vulnerable to attack against its armor and/or hull. The structure will become vulnerable at a random time that is +/- 2 hours centered on the value of this property
     *
     * @return $this
     */
    public function setReinforceHour($reinforce_hour)
    {

        if (($reinforce_hour > 23)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be smaller than or equal to 23.');
        }
        if (($reinforce_hour < 0)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be bigger than or equal to 0.');
        }

        $this->container['reinforce_hour'] = $reinforce_hour;

        return $this;
    }

    /**
     * Gets reinforce_weekday
     *
     * @return int
     */
    public function getReinforceWeekday()
    {
        return $this->container['reinforce_weekday'];
    }

    /**
     * Sets reinforce_weekday
     *
     * @param int $reinforce_weekday The day of the week when the structure exits its final reinforcement period and becomes vulnerable to attack against its hull. Monday is 0 and Sunday is 6
     *
     * @return $this
     */
    public function setReinforceWeekday($reinforce_weekday)
    {

        if (($reinforce_weekday > 6)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_weekday when calling GetCorporationsCorporationIdStructures200Ok., must be smaller than or equal to 6.');
        }
        if (($reinforce_weekday < 0)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_weekday when calling GetCorporationsCorporationIdStructures200Ok., must be bigger than or equal to 0.');
        }

        $this->container['reinforce_weekday'] = $reinforce_weekday;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \EsiClient\EsiClient\Model\GetCorporationsCorporationIdStructuresService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \EsiClient\EsiClient\Model\GetCorporationsCorporationIdStructuresService[] $services Contains a list of service upgrades, and their state
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state string
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_timer_end
     *
     * @return \DateTime
     */
    public function getStateTimerEnd()
    {
        return $this->container['state_timer_end'];
    }

    /**
     * Sets state_timer_end
     *
     * @param \DateTime $state_timer_end Date at which the structure will move to it's next state
     *
     * @return $this
     */
    public function setStateTimerEnd($state_timer_end)
    {
        $this->container['state_timer_end'] = $state_timer_end;

        return $this;
    }

    /**
     * Gets state_timer_start
     *
     * @return \DateTime
     */
    public function getStateTimerStart()
    {
        return $this->container['state_timer_start'];
    }

    /**
     * Sets state_timer_start
     *
     * @param \DateTime $state_timer_start Date at which the structure entered it's current state
     *
     * @return $this
     */
    public function setStateTimerStart($state_timer_start)
    {
        $this->container['state_timer_start'] = $state_timer_start;

        return $this;
    }

    /**
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id The Item ID of the structure
     *
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id The solar system the structure is in
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id The type id of the structure
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets unanchors_at
     *
     * @return \DateTime
     */
    public function getUnanchorsAt()
    {
        return $this->container['unanchors_at'];
    }

    /**
     * Sets unanchors_at
     *
     * @param \DateTime $unanchors_at Date at which the structure will unanchor
     *
     * @return $this
     */
    public function setUnanchorsAt($unanchors_at)
    {
        $this->container['unanchors_at'] = $unanchors_at;

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


