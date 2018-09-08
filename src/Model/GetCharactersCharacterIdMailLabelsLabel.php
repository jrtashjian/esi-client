<?php
/**
 * GetCharactersCharacterIdMailLabelsLabel
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
 * GetCharactersCharacterIdMailLabelsLabel Class Doc Comment
 *
 * @category Class
 * @description label object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdMailLabelsLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_mail_labels_label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'color' => 'string',
        'label_id' => 'int',
        'name' => 'string',
        'unread_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'color' => null,
        'label_id' => 'int32',
        'name' => null,
        'unread_count' => 'int32'
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
        'color' => 'color',
        'label_id' => 'label_id',
        'name' => 'name',
        'unread_count' => 'unread_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor',
        'label_id' => 'setLabelId',
        'name' => 'setName',
        'unread_count' => 'setUnreadCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor',
        'label_id' => 'getLabelId',
        'name' => 'getName',
        'unread_count' => 'getUnreadCount'
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

    const COLOR__0000FE = '#0000fe';
    const COLOR__006634 = '#006634';
    const COLOR__0099FF = '#0099ff';
    const COLOR__00FF33 = '#00ff33';
    const COLOR__01FFFF = '#01ffff';
    const COLOR__349800 = '#349800';
    const COLOR__660066 = '#660066';
    const COLOR__666666 = '#666666';
    const COLOR__999999 = '#999999';
    const COLOR__99FFFF = '#99ffff';
    const COLOR__9A0000 = '#9a0000';
    const COLOR_CCFF9A = '#ccff9a';
    const COLOR_E6E6E6 = '#e6e6e6';
    const COLOR_FE0000 = '#fe0000';
    const COLOR_FF6600 = '#ff6600';
    const COLOR_FFFF01 = '#ffff01';
    const COLOR_FFFFCD = '#ffffcd';
    const COLOR_FFFFFF = '#ffffff';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorAllowableValues()
    {
        return [
            self::COLOR__0000FE,
            self::COLOR__006634,
            self::COLOR__0099FF,
            self::COLOR__00FF33,
            self::COLOR__01FFFF,
            self::COLOR__349800,
            self::COLOR__660066,
            self::COLOR__666666,
            self::COLOR__999999,
            self::COLOR__99FFFF,
            self::COLOR__9A0000,
            self::COLOR_CCFF9A,
            self::COLOR_E6E6E6,
            self::COLOR_FE0000,
            self::COLOR_FF6600,
            self::COLOR_FFFF01,
            self::COLOR_FFFFCD,
            self::COLOR_FFFFFF,
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : '#ffffff';
        $this->container['label_id'] = isset($data['label_id']) ? $data['label_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['unread_count'] = isset($data['unread_count']) ? $data['unread_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getColorAllowableValues();
        if (!in_array($this->container['color'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'color', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['label_id']) && ($this->container['label_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'label_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 40)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['unread_count']) && ($this->container['unread_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'unread_count', must be bigger than or equal to 0.";
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

        $allowedValues = $this->getColorAllowableValues();
        if (!in_array($this->container['color'], $allowedValues)) {
            return false;
        }
        if ($this->container['label_id'] < 0) {
            return false;
        }
        if (strlen($this->container['name']) > 40) {
            return false;
        }
        if ($this->container['unread_count'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color string
     *
     * @return $this
     */
    public function setColor($color)
    {
        $allowedValues = $this->getColorAllowableValues();
        if (!is_null($color) && !in_array($color, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'color', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets label_id
     *
     * @return int
     */
    public function getLabelId()
    {
        return $this->container['label_id'];
    }

    /**
     * Sets label_id
     *
     * @param int $label_id label_id integer
     *
     * @return $this
     */
    public function setLabelId($label_id)
    {

        if (!is_null($label_id) && ($label_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $label_id when calling GetCharactersCharacterIdMailLabelsLabel., must be bigger than or equal to 0.');
        }

        $this->container['label_id'] = $label_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling GetCharactersCharacterIdMailLabelsLabel., must be smaller than or equal to 40.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unread_count
     *
     * @return int
     */
    public function getUnreadCount()
    {
        return $this->container['unread_count'];
    }

    /**
     * Sets unread_count
     *
     * @param int $unread_count unread_count integer
     *
     * @return $this
     */
    public function setUnreadCount($unread_count)
    {

        if (!is_null($unread_count) && ($unread_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $unread_count when calling GetCharactersCharacterIdMailLabelsLabel., must be bigger than or equal to 0.');
        }

        $this->container['unread_count'] = $unread_count;

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


