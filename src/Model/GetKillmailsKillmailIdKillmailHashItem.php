<?php
/**
 * GetKillmailsKillmailIdKillmailHashItem
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
 * GetKillmailsKillmailIdKillmailHashItem Class Doc Comment
 *
 * @category Class
 * @description item object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetKillmailsKillmailIdKillmailHashItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_killmails_killmail_id_killmail_hash_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'flag' => 'int',
        'item_type_id' => 'int',
        'items' => '\EsiClient\EsiClient\Model\GetKillmailsKillmailIdKillmailHashItemsItem[]',
        'quantity_destroyed' => 'int',
        'quantity_dropped' => 'int',
        'singleton' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'flag' => 'int32',
        'item_type_id' => 'int32',
        'items' => null,
        'quantity_destroyed' => 'int64',
        'quantity_dropped' => 'int64',
        'singleton' => 'int32'
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
        'flag' => 'flag',
        'item_type_id' => 'item_type_id',
        'items' => 'items',
        'quantity_destroyed' => 'quantity_destroyed',
        'quantity_dropped' => 'quantity_dropped',
        'singleton' => 'singleton'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flag' => 'setFlag',
        'item_type_id' => 'setItemTypeId',
        'items' => 'setItems',
        'quantity_destroyed' => 'setQuantityDestroyed',
        'quantity_dropped' => 'setQuantityDropped',
        'singleton' => 'setSingleton'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flag' => 'getFlag',
        'item_type_id' => 'getItemTypeId',
        'items' => 'getItems',
        'quantity_destroyed' => 'getQuantityDestroyed',
        'quantity_dropped' => 'getQuantityDropped',
        'singleton' => 'getSingleton'
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
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['item_type_id'] = isset($data['item_type_id']) ? $data['item_type_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['quantity_destroyed'] = isset($data['quantity_destroyed']) ? $data['quantity_destroyed'] : null;
        $this->container['quantity_dropped'] = isset($data['quantity_dropped']) ? $data['quantity_dropped'] : null;
        $this->container['singleton'] = isset($data['singleton']) ? $data['singleton'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['flag'] === null) {
            $invalidProperties[] = "'flag' can't be null";
        }
        if ($this->container['item_type_id'] === null) {
            $invalidProperties[] = "'item_type_id' can't be null";
        }
        if ($this->container['singleton'] === null) {
            $invalidProperties[] = "'singleton' can't be null";
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
     * Gets flag
     *
     * @return int
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param int $flag Flag for the location of the item
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets item_type_id
     *
     * @return int
     */
    public function getItemTypeId()
    {
        return $this->container['item_type_id'];
    }

    /**
     * Sets item_type_id
     *
     * @param int $item_type_id item_type_id integer
     *
     * @return $this
     */
    public function setItemTypeId($item_type_id)
    {
        $this->container['item_type_id'] = $item_type_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \EsiClient\EsiClient\Model\GetKillmailsKillmailIdKillmailHashItemsItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \EsiClient\EsiClient\Model\GetKillmailsKillmailIdKillmailHashItemsItem[] $items items array
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets quantity_destroyed
     *
     * @return int
     */
    public function getQuantityDestroyed()
    {
        return $this->container['quantity_destroyed'];
    }

    /**
     * Sets quantity_destroyed
     *
     * @param int $quantity_destroyed How many of the item were destroyed if any
     *
     * @return $this
     */
    public function setQuantityDestroyed($quantity_destroyed)
    {
        $this->container['quantity_destroyed'] = $quantity_destroyed;

        return $this;
    }

    /**
     * Gets quantity_dropped
     *
     * @return int
     */
    public function getQuantityDropped()
    {
        return $this->container['quantity_dropped'];
    }

    /**
     * Sets quantity_dropped
     *
     * @param int $quantity_dropped How many of the item were dropped if any
     *
     * @return $this
     */
    public function setQuantityDropped($quantity_dropped)
    {
        $this->container['quantity_dropped'] = $quantity_dropped;

        return $this;
    }

    /**
     * Gets singleton
     *
     * @return int
     */
    public function getSingleton()
    {
        return $this->container['singleton'];
    }

    /**
     * Sets singleton
     *
     * @param int $singleton singleton integer
     *
     * @return $this
     */
    public function setSingleton($singleton)
    {
        $this->container['singleton'] = $singleton;

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


