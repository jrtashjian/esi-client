<?php
/**
 * GetContractsPublicRegionId200Ok
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
 * GetContractsPublicRegionId200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetContractsPublicRegionId200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_contracts_public_region_id_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyout' => 'double',
        'collateral' => 'double',
        'contract_id' => 'int',
        'date_expired' => '\DateTime',
        'date_issued' => '\DateTime',
        'days_to_complete' => 'int',
        'end_location_id' => 'int',
        'for_corporation' => 'bool',
        'issuer_corporation_id' => 'int',
        'issuer_id' => 'int',
        'price' => 'double',
        'reward' => 'double',
        'start_location_id' => 'int',
        'title' => 'string',
        'type' => 'string',
        'volume' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyout' => 'double',
        'collateral' => 'double',
        'contract_id' => 'int32',
        'date_expired' => 'date-time',
        'date_issued' => 'date-time',
        'days_to_complete' => 'int32',
        'end_location_id' => 'int64',
        'for_corporation' => null,
        'issuer_corporation_id' => 'int32',
        'issuer_id' => 'int32',
        'price' => 'double',
        'reward' => 'double',
        'start_location_id' => 'int64',
        'title' => null,
        'type' => null,
        'volume' => 'double'
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
        'buyout' => 'buyout',
        'collateral' => 'collateral',
        'contract_id' => 'contract_id',
        'date_expired' => 'date_expired',
        'date_issued' => 'date_issued',
        'days_to_complete' => 'days_to_complete',
        'end_location_id' => 'end_location_id',
        'for_corporation' => 'for_corporation',
        'issuer_corporation_id' => 'issuer_corporation_id',
        'issuer_id' => 'issuer_id',
        'price' => 'price',
        'reward' => 'reward',
        'start_location_id' => 'start_location_id',
        'title' => 'title',
        'type' => 'type',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyout' => 'setBuyout',
        'collateral' => 'setCollateral',
        'contract_id' => 'setContractId',
        'date_expired' => 'setDateExpired',
        'date_issued' => 'setDateIssued',
        'days_to_complete' => 'setDaysToComplete',
        'end_location_id' => 'setEndLocationId',
        'for_corporation' => 'setForCorporation',
        'issuer_corporation_id' => 'setIssuerCorporationId',
        'issuer_id' => 'setIssuerId',
        'price' => 'setPrice',
        'reward' => 'setReward',
        'start_location_id' => 'setStartLocationId',
        'title' => 'setTitle',
        'type' => 'setType',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyout' => 'getBuyout',
        'collateral' => 'getCollateral',
        'contract_id' => 'getContractId',
        'date_expired' => 'getDateExpired',
        'date_issued' => 'getDateIssued',
        'days_to_complete' => 'getDaysToComplete',
        'end_location_id' => 'getEndLocationId',
        'for_corporation' => 'getForCorporation',
        'issuer_corporation_id' => 'getIssuerCorporationId',
        'issuer_id' => 'getIssuerId',
        'price' => 'getPrice',
        'reward' => 'getReward',
        'start_location_id' => 'getStartLocationId',
        'title' => 'getTitle',
        'type' => 'getType',
        'volume' => 'getVolume'
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

    const TYPE_UNKNOWN = 'unknown';
    const TYPE_ITEM_EXCHANGE = 'item_exchange';
    const TYPE_AUCTION = 'auction';
    const TYPE_COURIER = 'courier';
    const TYPE_LOAN = 'loan';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_ITEM_EXCHANGE,
            self::TYPE_AUCTION,
            self::TYPE_COURIER,
            self::TYPE_LOAN,
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
        $this->container['buyout'] = isset($data['buyout']) ? $data['buyout'] : null;
        $this->container['collateral'] = isset($data['collateral']) ? $data['collateral'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['date_expired'] = isset($data['date_expired']) ? $data['date_expired'] : null;
        $this->container['date_issued'] = isset($data['date_issued']) ? $data['date_issued'] : null;
        $this->container['days_to_complete'] = isset($data['days_to_complete']) ? $data['days_to_complete'] : null;
        $this->container['end_location_id'] = isset($data['end_location_id']) ? $data['end_location_id'] : null;
        $this->container['for_corporation'] = isset($data['for_corporation']) ? $data['for_corporation'] : null;
        $this->container['issuer_corporation_id'] = isset($data['issuer_corporation_id']) ? $data['issuer_corporation_id'] : null;
        $this->container['issuer_id'] = isset($data['issuer_id']) ? $data['issuer_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['reward'] = isset($data['reward']) ? $data['reward'] : null;
        $this->container['start_location_id'] = isset($data['start_location_id']) ? $data['start_location_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contract_id'] === null) {
            $invalidProperties[] = "'contract_id' can't be null";
        }
        if ($this->container['date_expired'] === null) {
            $invalidProperties[] = "'date_expired' can't be null";
        }
        if ($this->container['date_issued'] === null) {
            $invalidProperties[] = "'date_issued' can't be null";
        }
        if ($this->container['issuer_corporation_id'] === null) {
            $invalidProperties[] = "'issuer_corporation_id' can't be null";
        }
        if ($this->container['issuer_id'] === null) {
            $invalidProperties[] = "'issuer_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets buyout
     *
     * @return double
     */
    public function getBuyout()
    {
        return $this->container['buyout'];
    }

    /**
     * Sets buyout
     *
     * @param double $buyout Buyout price (for Auctions only)
     *
     * @return $this
     */
    public function setBuyout($buyout)
    {
        $this->container['buyout'] = $buyout;

        return $this;
    }

    /**
     * Gets collateral
     *
     * @return double
     */
    public function getCollateral()
    {
        return $this->container['collateral'];
    }

    /**
     * Sets collateral
     *
     * @param double $collateral Collateral price (for Couriers only)
     *
     * @return $this
     */
    public function setCollateral($collateral)
    {
        $this->container['collateral'] = $collateral;

        return $this;
    }

    /**
     * Gets contract_id
     *
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param int $contract_id contract_id integer
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets date_expired
     *
     * @return \DateTime
     */
    public function getDateExpired()
    {
        return $this->container['date_expired'];
    }

    /**
     * Sets date_expired
     *
     * @param \DateTime $date_expired Expiration date of the contract
     *
     * @return $this
     */
    public function setDateExpired($date_expired)
    {
        $this->container['date_expired'] = $date_expired;

        return $this;
    }

    /**
     * Gets date_issued
     *
     * @return \DateTime
     */
    public function getDateIssued()
    {
        return $this->container['date_issued'];
    }

    /**
     * Sets date_issued
     *
     * @param \DateTime $date_issued Сreation date of the contract
     *
     * @return $this
     */
    public function setDateIssued($date_issued)
    {
        $this->container['date_issued'] = $date_issued;

        return $this;
    }

    /**
     * Gets days_to_complete
     *
     * @return int
     */
    public function getDaysToComplete()
    {
        return $this->container['days_to_complete'];
    }

    /**
     * Sets days_to_complete
     *
     * @param int $days_to_complete Number of days to perform the contract
     *
     * @return $this
     */
    public function setDaysToComplete($days_to_complete)
    {
        $this->container['days_to_complete'] = $days_to_complete;

        return $this;
    }

    /**
     * Gets end_location_id
     *
     * @return int
     */
    public function getEndLocationId()
    {
        return $this->container['end_location_id'];
    }

    /**
     * Sets end_location_id
     *
     * @param int $end_location_id End location ID (for Couriers contract)
     *
     * @return $this
     */
    public function setEndLocationId($end_location_id)
    {
        $this->container['end_location_id'] = $end_location_id;

        return $this;
    }

    /**
     * Gets for_corporation
     *
     * @return bool
     */
    public function getForCorporation()
    {
        return $this->container['for_corporation'];
    }

    /**
     * Sets for_corporation
     *
     * @param bool $for_corporation true if the contract was issued on behalf of the issuer's corporation
     *
     * @return $this
     */
    public function setForCorporation($for_corporation)
    {
        $this->container['for_corporation'] = $for_corporation;

        return $this;
    }

    /**
     * Gets issuer_corporation_id
     *
     * @return int
     */
    public function getIssuerCorporationId()
    {
        return $this->container['issuer_corporation_id'];
    }

    /**
     * Sets issuer_corporation_id
     *
     * @param int $issuer_corporation_id Character's corporation ID for the issuer
     *
     * @return $this
     */
    public function setIssuerCorporationId($issuer_corporation_id)
    {
        $this->container['issuer_corporation_id'] = $issuer_corporation_id;

        return $this;
    }

    /**
     * Gets issuer_id
     *
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     *
     * @param int $issuer_id Character ID for the issuer
     *
     * @return $this
     */
    public function setIssuerId($issuer_id)
    {
        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Price of contract (for ItemsExchange and Auctions)
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return double
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param double $reward Remuneration for contract (for Couriers only)
     *
     * @return $this
     */
    public function setReward($reward)
    {
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets start_location_id
     *
     * @return int
     */
    public function getStartLocationId()
    {
        return $this->container['start_location_id'];
    }

    /**
     * Sets start_location_id
     *
     * @param int $start_location_id Start location ID (for Couriers contract)
     *
     * @return $this
     */
    public function setStartLocationId($start_location_id)
    {
        $this->container['start_location_id'] = $start_location_id;

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
     * @param string $title Title of the contract
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the contract
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return double
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param double $volume Volume of items in the contract
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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


