<?php
/**
 * GetCharactersCharacterIdStatsSocial
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
 * GetCharactersCharacterIdStatsSocial Class Doc Comment
 *
 * @category Class
 * @description social object
 * @package  EsiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStatsSocial implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_social';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_contact_bad' => 'int',
        'add_contact_good' => 'int',
        'add_contact_high' => 'int',
        'add_contact_horrible' => 'int',
        'add_contact_neutral' => 'int',
        'add_note' => 'int',
        'added_as_contact_bad' => 'int',
        'added_as_contact_good' => 'int',
        'added_as_contact_high' => 'int',
        'added_as_contact_horrible' => 'int',
        'added_as_contact_neutral' => 'int',
        'calendar_event_created' => 'int',
        'chat_messages_alliance' => 'int',
        'chat_messages_constellation' => 'int',
        'chat_messages_corporation' => 'int',
        'chat_messages_fleet' => 'int',
        'chat_messages_region' => 'int',
        'chat_messages_solarsystem' => 'int',
        'chat_messages_warfaction' => 'int',
        'chat_total_message_length' => 'int',
        'direct_trades' => 'int',
        'fleet_broadcasts' => 'int',
        'fleet_joins' => 'int',
        'mails_received' => 'int',
        'mails_sent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_contact_bad' => 'int64',
        'add_contact_good' => 'int64',
        'add_contact_high' => 'int64',
        'add_contact_horrible' => 'int64',
        'add_contact_neutral' => 'int64',
        'add_note' => 'int64',
        'added_as_contact_bad' => 'int64',
        'added_as_contact_good' => 'int64',
        'added_as_contact_high' => 'int64',
        'added_as_contact_horrible' => 'int64',
        'added_as_contact_neutral' => 'int64',
        'calendar_event_created' => 'int64',
        'chat_messages_alliance' => 'int64',
        'chat_messages_constellation' => 'int64',
        'chat_messages_corporation' => 'int64',
        'chat_messages_fleet' => 'int64',
        'chat_messages_region' => 'int64',
        'chat_messages_solarsystem' => 'int64',
        'chat_messages_warfaction' => 'int64',
        'chat_total_message_length' => 'int64',
        'direct_trades' => 'int64',
        'fleet_broadcasts' => 'int64',
        'fleet_joins' => 'int64',
        'mails_received' => 'int64',
        'mails_sent' => 'int64'
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
        'add_contact_bad' => 'add_contact_bad',
        'add_contact_good' => 'add_contact_good',
        'add_contact_high' => 'add_contact_high',
        'add_contact_horrible' => 'add_contact_horrible',
        'add_contact_neutral' => 'add_contact_neutral',
        'add_note' => 'add_note',
        'added_as_contact_bad' => 'added_as_contact_bad',
        'added_as_contact_good' => 'added_as_contact_good',
        'added_as_contact_high' => 'added_as_contact_high',
        'added_as_contact_horrible' => 'added_as_contact_horrible',
        'added_as_contact_neutral' => 'added_as_contact_neutral',
        'calendar_event_created' => 'calendar_event_created',
        'chat_messages_alliance' => 'chat_messages_alliance',
        'chat_messages_constellation' => 'chat_messages_constellation',
        'chat_messages_corporation' => 'chat_messages_corporation',
        'chat_messages_fleet' => 'chat_messages_fleet',
        'chat_messages_region' => 'chat_messages_region',
        'chat_messages_solarsystem' => 'chat_messages_solarsystem',
        'chat_messages_warfaction' => 'chat_messages_warfaction',
        'chat_total_message_length' => 'chat_total_message_length',
        'direct_trades' => 'direct_trades',
        'fleet_broadcasts' => 'fleet_broadcasts',
        'fleet_joins' => 'fleet_joins',
        'mails_received' => 'mails_received',
        'mails_sent' => 'mails_sent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_contact_bad' => 'setAddContactBad',
        'add_contact_good' => 'setAddContactGood',
        'add_contact_high' => 'setAddContactHigh',
        'add_contact_horrible' => 'setAddContactHorrible',
        'add_contact_neutral' => 'setAddContactNeutral',
        'add_note' => 'setAddNote',
        'added_as_contact_bad' => 'setAddedAsContactBad',
        'added_as_contact_good' => 'setAddedAsContactGood',
        'added_as_contact_high' => 'setAddedAsContactHigh',
        'added_as_contact_horrible' => 'setAddedAsContactHorrible',
        'added_as_contact_neutral' => 'setAddedAsContactNeutral',
        'calendar_event_created' => 'setCalendarEventCreated',
        'chat_messages_alliance' => 'setChatMessagesAlliance',
        'chat_messages_constellation' => 'setChatMessagesConstellation',
        'chat_messages_corporation' => 'setChatMessagesCorporation',
        'chat_messages_fleet' => 'setChatMessagesFleet',
        'chat_messages_region' => 'setChatMessagesRegion',
        'chat_messages_solarsystem' => 'setChatMessagesSolarsystem',
        'chat_messages_warfaction' => 'setChatMessagesWarfaction',
        'chat_total_message_length' => 'setChatTotalMessageLength',
        'direct_trades' => 'setDirectTrades',
        'fleet_broadcasts' => 'setFleetBroadcasts',
        'fleet_joins' => 'setFleetJoins',
        'mails_received' => 'setMailsReceived',
        'mails_sent' => 'setMailsSent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_contact_bad' => 'getAddContactBad',
        'add_contact_good' => 'getAddContactGood',
        'add_contact_high' => 'getAddContactHigh',
        'add_contact_horrible' => 'getAddContactHorrible',
        'add_contact_neutral' => 'getAddContactNeutral',
        'add_note' => 'getAddNote',
        'added_as_contact_bad' => 'getAddedAsContactBad',
        'added_as_contact_good' => 'getAddedAsContactGood',
        'added_as_contact_high' => 'getAddedAsContactHigh',
        'added_as_contact_horrible' => 'getAddedAsContactHorrible',
        'added_as_contact_neutral' => 'getAddedAsContactNeutral',
        'calendar_event_created' => 'getCalendarEventCreated',
        'chat_messages_alliance' => 'getChatMessagesAlliance',
        'chat_messages_constellation' => 'getChatMessagesConstellation',
        'chat_messages_corporation' => 'getChatMessagesCorporation',
        'chat_messages_fleet' => 'getChatMessagesFleet',
        'chat_messages_region' => 'getChatMessagesRegion',
        'chat_messages_solarsystem' => 'getChatMessagesSolarsystem',
        'chat_messages_warfaction' => 'getChatMessagesWarfaction',
        'chat_total_message_length' => 'getChatTotalMessageLength',
        'direct_trades' => 'getDirectTrades',
        'fleet_broadcasts' => 'getFleetBroadcasts',
        'fleet_joins' => 'getFleetJoins',
        'mails_received' => 'getMailsReceived',
        'mails_sent' => 'getMailsSent'
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
        $this->container['add_contact_bad'] = isset($data['add_contact_bad']) ? $data['add_contact_bad'] : null;
        $this->container['add_contact_good'] = isset($data['add_contact_good']) ? $data['add_contact_good'] : null;
        $this->container['add_contact_high'] = isset($data['add_contact_high']) ? $data['add_contact_high'] : null;
        $this->container['add_contact_horrible'] = isset($data['add_contact_horrible']) ? $data['add_contact_horrible'] : null;
        $this->container['add_contact_neutral'] = isset($data['add_contact_neutral']) ? $data['add_contact_neutral'] : null;
        $this->container['add_note'] = isset($data['add_note']) ? $data['add_note'] : null;
        $this->container['added_as_contact_bad'] = isset($data['added_as_contact_bad']) ? $data['added_as_contact_bad'] : null;
        $this->container['added_as_contact_good'] = isset($data['added_as_contact_good']) ? $data['added_as_contact_good'] : null;
        $this->container['added_as_contact_high'] = isset($data['added_as_contact_high']) ? $data['added_as_contact_high'] : null;
        $this->container['added_as_contact_horrible'] = isset($data['added_as_contact_horrible']) ? $data['added_as_contact_horrible'] : null;
        $this->container['added_as_contact_neutral'] = isset($data['added_as_contact_neutral']) ? $data['added_as_contact_neutral'] : null;
        $this->container['calendar_event_created'] = isset($data['calendar_event_created']) ? $data['calendar_event_created'] : null;
        $this->container['chat_messages_alliance'] = isset($data['chat_messages_alliance']) ? $data['chat_messages_alliance'] : null;
        $this->container['chat_messages_constellation'] = isset($data['chat_messages_constellation']) ? $data['chat_messages_constellation'] : null;
        $this->container['chat_messages_corporation'] = isset($data['chat_messages_corporation']) ? $data['chat_messages_corporation'] : null;
        $this->container['chat_messages_fleet'] = isset($data['chat_messages_fleet']) ? $data['chat_messages_fleet'] : null;
        $this->container['chat_messages_region'] = isset($data['chat_messages_region']) ? $data['chat_messages_region'] : null;
        $this->container['chat_messages_solarsystem'] = isset($data['chat_messages_solarsystem']) ? $data['chat_messages_solarsystem'] : null;
        $this->container['chat_messages_warfaction'] = isset($data['chat_messages_warfaction']) ? $data['chat_messages_warfaction'] : null;
        $this->container['chat_total_message_length'] = isset($data['chat_total_message_length']) ? $data['chat_total_message_length'] : null;
        $this->container['direct_trades'] = isset($data['direct_trades']) ? $data['direct_trades'] : null;
        $this->container['fleet_broadcasts'] = isset($data['fleet_broadcasts']) ? $data['fleet_broadcasts'] : null;
        $this->container['fleet_joins'] = isset($data['fleet_joins']) ? $data['fleet_joins'] : null;
        $this->container['mails_received'] = isset($data['mails_received']) ? $data['mails_received'] : null;
        $this->container['mails_sent'] = isset($data['mails_sent']) ? $data['mails_sent'] : null;
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
     * Gets add_contact_bad
     *
     * @return int
     */
    public function getAddContactBad()
    {
        return $this->container['add_contact_bad'];
    }

    /**
     * Sets add_contact_bad
     *
     * @param int $add_contact_bad add_contact_bad integer
     *
     * @return $this
     */
    public function setAddContactBad($add_contact_bad)
    {
        $this->container['add_contact_bad'] = $add_contact_bad;

        return $this;
    }

    /**
     * Gets add_contact_good
     *
     * @return int
     */
    public function getAddContactGood()
    {
        return $this->container['add_contact_good'];
    }

    /**
     * Sets add_contact_good
     *
     * @param int $add_contact_good add_contact_good integer
     *
     * @return $this
     */
    public function setAddContactGood($add_contact_good)
    {
        $this->container['add_contact_good'] = $add_contact_good;

        return $this;
    }

    /**
     * Gets add_contact_high
     *
     * @return int
     */
    public function getAddContactHigh()
    {
        return $this->container['add_contact_high'];
    }

    /**
     * Sets add_contact_high
     *
     * @param int $add_contact_high add_contact_high integer
     *
     * @return $this
     */
    public function setAddContactHigh($add_contact_high)
    {
        $this->container['add_contact_high'] = $add_contact_high;

        return $this;
    }

    /**
     * Gets add_contact_horrible
     *
     * @return int
     */
    public function getAddContactHorrible()
    {
        return $this->container['add_contact_horrible'];
    }

    /**
     * Sets add_contact_horrible
     *
     * @param int $add_contact_horrible add_contact_horrible integer
     *
     * @return $this
     */
    public function setAddContactHorrible($add_contact_horrible)
    {
        $this->container['add_contact_horrible'] = $add_contact_horrible;

        return $this;
    }

    /**
     * Gets add_contact_neutral
     *
     * @return int
     */
    public function getAddContactNeutral()
    {
        return $this->container['add_contact_neutral'];
    }

    /**
     * Sets add_contact_neutral
     *
     * @param int $add_contact_neutral add_contact_neutral integer
     *
     * @return $this
     */
    public function setAddContactNeutral($add_contact_neutral)
    {
        $this->container['add_contact_neutral'] = $add_contact_neutral;

        return $this;
    }

    /**
     * Gets add_note
     *
     * @return int
     */
    public function getAddNote()
    {
        return $this->container['add_note'];
    }

    /**
     * Sets add_note
     *
     * @param int $add_note add_note integer
     *
     * @return $this
     */
    public function setAddNote($add_note)
    {
        $this->container['add_note'] = $add_note;

        return $this;
    }

    /**
     * Gets added_as_contact_bad
     *
     * @return int
     */
    public function getAddedAsContactBad()
    {
        return $this->container['added_as_contact_bad'];
    }

    /**
     * Sets added_as_contact_bad
     *
     * @param int $added_as_contact_bad added_as_contact_bad integer
     *
     * @return $this
     */
    public function setAddedAsContactBad($added_as_contact_bad)
    {
        $this->container['added_as_contact_bad'] = $added_as_contact_bad;

        return $this;
    }

    /**
     * Gets added_as_contact_good
     *
     * @return int
     */
    public function getAddedAsContactGood()
    {
        return $this->container['added_as_contact_good'];
    }

    /**
     * Sets added_as_contact_good
     *
     * @param int $added_as_contact_good added_as_contact_good integer
     *
     * @return $this
     */
    public function setAddedAsContactGood($added_as_contact_good)
    {
        $this->container['added_as_contact_good'] = $added_as_contact_good;

        return $this;
    }

    /**
     * Gets added_as_contact_high
     *
     * @return int
     */
    public function getAddedAsContactHigh()
    {
        return $this->container['added_as_contact_high'];
    }

    /**
     * Sets added_as_contact_high
     *
     * @param int $added_as_contact_high added_as_contact_high integer
     *
     * @return $this
     */
    public function setAddedAsContactHigh($added_as_contact_high)
    {
        $this->container['added_as_contact_high'] = $added_as_contact_high;

        return $this;
    }

    /**
     * Gets added_as_contact_horrible
     *
     * @return int
     */
    public function getAddedAsContactHorrible()
    {
        return $this->container['added_as_contact_horrible'];
    }

    /**
     * Sets added_as_contact_horrible
     *
     * @param int $added_as_contact_horrible added_as_contact_horrible integer
     *
     * @return $this
     */
    public function setAddedAsContactHorrible($added_as_contact_horrible)
    {
        $this->container['added_as_contact_horrible'] = $added_as_contact_horrible;

        return $this;
    }

    /**
     * Gets added_as_contact_neutral
     *
     * @return int
     */
    public function getAddedAsContactNeutral()
    {
        return $this->container['added_as_contact_neutral'];
    }

    /**
     * Sets added_as_contact_neutral
     *
     * @param int $added_as_contact_neutral added_as_contact_neutral integer
     *
     * @return $this
     */
    public function setAddedAsContactNeutral($added_as_contact_neutral)
    {
        $this->container['added_as_contact_neutral'] = $added_as_contact_neutral;

        return $this;
    }

    /**
     * Gets calendar_event_created
     *
     * @return int
     */
    public function getCalendarEventCreated()
    {
        return $this->container['calendar_event_created'];
    }

    /**
     * Sets calendar_event_created
     *
     * @param int $calendar_event_created calendar_event_created integer
     *
     * @return $this
     */
    public function setCalendarEventCreated($calendar_event_created)
    {
        $this->container['calendar_event_created'] = $calendar_event_created;

        return $this;
    }

    /**
     * Gets chat_messages_alliance
     *
     * @return int
     */
    public function getChatMessagesAlliance()
    {
        return $this->container['chat_messages_alliance'];
    }

    /**
     * Sets chat_messages_alliance
     *
     * @param int $chat_messages_alliance chat_messages_alliance integer
     *
     * @return $this
     */
    public function setChatMessagesAlliance($chat_messages_alliance)
    {
        $this->container['chat_messages_alliance'] = $chat_messages_alliance;

        return $this;
    }

    /**
     * Gets chat_messages_constellation
     *
     * @return int
     */
    public function getChatMessagesConstellation()
    {
        return $this->container['chat_messages_constellation'];
    }

    /**
     * Sets chat_messages_constellation
     *
     * @param int $chat_messages_constellation chat_messages_constellation integer
     *
     * @return $this
     */
    public function setChatMessagesConstellation($chat_messages_constellation)
    {
        $this->container['chat_messages_constellation'] = $chat_messages_constellation;

        return $this;
    }

    /**
     * Gets chat_messages_corporation
     *
     * @return int
     */
    public function getChatMessagesCorporation()
    {
        return $this->container['chat_messages_corporation'];
    }

    /**
     * Sets chat_messages_corporation
     *
     * @param int $chat_messages_corporation chat_messages_corporation integer
     *
     * @return $this
     */
    public function setChatMessagesCorporation($chat_messages_corporation)
    {
        $this->container['chat_messages_corporation'] = $chat_messages_corporation;

        return $this;
    }

    /**
     * Gets chat_messages_fleet
     *
     * @return int
     */
    public function getChatMessagesFleet()
    {
        return $this->container['chat_messages_fleet'];
    }

    /**
     * Sets chat_messages_fleet
     *
     * @param int $chat_messages_fleet chat_messages_fleet integer
     *
     * @return $this
     */
    public function setChatMessagesFleet($chat_messages_fleet)
    {
        $this->container['chat_messages_fleet'] = $chat_messages_fleet;

        return $this;
    }

    /**
     * Gets chat_messages_region
     *
     * @return int
     */
    public function getChatMessagesRegion()
    {
        return $this->container['chat_messages_region'];
    }

    /**
     * Sets chat_messages_region
     *
     * @param int $chat_messages_region chat_messages_region integer
     *
     * @return $this
     */
    public function setChatMessagesRegion($chat_messages_region)
    {
        $this->container['chat_messages_region'] = $chat_messages_region;

        return $this;
    }

    /**
     * Gets chat_messages_solarsystem
     *
     * @return int
     */
    public function getChatMessagesSolarsystem()
    {
        return $this->container['chat_messages_solarsystem'];
    }

    /**
     * Sets chat_messages_solarsystem
     *
     * @param int $chat_messages_solarsystem chat_messages_solarsystem integer
     *
     * @return $this
     */
    public function setChatMessagesSolarsystem($chat_messages_solarsystem)
    {
        $this->container['chat_messages_solarsystem'] = $chat_messages_solarsystem;

        return $this;
    }

    /**
     * Gets chat_messages_warfaction
     *
     * @return int
     */
    public function getChatMessagesWarfaction()
    {
        return $this->container['chat_messages_warfaction'];
    }

    /**
     * Sets chat_messages_warfaction
     *
     * @param int $chat_messages_warfaction chat_messages_warfaction integer
     *
     * @return $this
     */
    public function setChatMessagesWarfaction($chat_messages_warfaction)
    {
        $this->container['chat_messages_warfaction'] = $chat_messages_warfaction;

        return $this;
    }

    /**
     * Gets chat_total_message_length
     *
     * @return int
     */
    public function getChatTotalMessageLength()
    {
        return $this->container['chat_total_message_length'];
    }

    /**
     * Sets chat_total_message_length
     *
     * @param int $chat_total_message_length chat_total_message_length integer
     *
     * @return $this
     */
    public function setChatTotalMessageLength($chat_total_message_length)
    {
        $this->container['chat_total_message_length'] = $chat_total_message_length;

        return $this;
    }

    /**
     * Gets direct_trades
     *
     * @return int
     */
    public function getDirectTrades()
    {
        return $this->container['direct_trades'];
    }

    /**
     * Sets direct_trades
     *
     * @param int $direct_trades direct_trades integer
     *
     * @return $this
     */
    public function setDirectTrades($direct_trades)
    {
        $this->container['direct_trades'] = $direct_trades;

        return $this;
    }

    /**
     * Gets fleet_broadcasts
     *
     * @return int
     */
    public function getFleetBroadcasts()
    {
        return $this->container['fleet_broadcasts'];
    }

    /**
     * Sets fleet_broadcasts
     *
     * @param int $fleet_broadcasts fleet_broadcasts integer
     *
     * @return $this
     */
    public function setFleetBroadcasts($fleet_broadcasts)
    {
        $this->container['fleet_broadcasts'] = $fleet_broadcasts;

        return $this;
    }

    /**
     * Gets fleet_joins
     *
     * @return int
     */
    public function getFleetJoins()
    {
        return $this->container['fleet_joins'];
    }

    /**
     * Sets fleet_joins
     *
     * @param int $fleet_joins fleet_joins integer
     *
     * @return $this
     */
    public function setFleetJoins($fleet_joins)
    {
        $this->container['fleet_joins'] = $fleet_joins;

        return $this;
    }

    /**
     * Gets mails_received
     *
     * @return int
     */
    public function getMailsReceived()
    {
        return $this->container['mails_received'];
    }

    /**
     * Sets mails_received
     *
     * @param int $mails_received mails_received integer
     *
     * @return $this
     */
    public function setMailsReceived($mails_received)
    {
        $this->container['mails_received'] = $mails_received;

        return $this;
    }

    /**
     * Gets mails_sent
     *
     * @return int
     */
    public function getMailsSent()
    {
        return $this->container['mails_sent'];
    }

    /**
     * Sets mails_sent
     *
     * @param int $mails_sent mails_sent integer
     *
     * @return $this
     */
    public function setMailsSent($mails_sent)
    {
        $this->container['mails_sent'] = $mails_sent;

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


