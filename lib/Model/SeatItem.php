<?php
/**
 * SeatItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * cinema
 *
 * cinema movie
 *
 * OpenAPI spec version: 1.0.0
 * Contact: sm@kinoheld.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace kinoheld\GenericProviderClient\Model;

use \ArrayAccess;
use \kinoheld\GenericProviderClient\ObjectSerializer;

/**
 * SeatItem Class Doc Comment
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SeatItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SeatItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'priceAreaId' => 'int',
'type' => 'string',
'rank' => 'string',
'number' => 'string',
'status' => 'string',
'x' => 'int',
'y' => 'int',
'groupId' => 'int',
'leftSeatId' => 'int',
'rightSeatId' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'priceAreaId' => null,
'type' => null,
'rank' => null,
'number' => null,
'status' => null,
'x' => null,
'y' => null,
'groupId' => null,
'leftSeatId' => null,
'rightSeatId' => null    ];

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
        'id' => 'id',
'name' => 'name',
'priceAreaId' => 'priceAreaId',
'type' => 'type',
'rank' => 'rank',
'number' => 'number',
'status' => 'status',
'x' => 'x',
'y' => 'y',
'groupId' => 'groupId',
'leftSeatId' => 'leftSeatId',
'rightSeatId' => 'rightSeatId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'priceAreaId' => 'setPriceAreaId',
'type' => 'setType',
'rank' => 'setRank',
'number' => 'setNumber',
'status' => 'setStatus',
'x' => 'setX',
'y' => 'setY',
'groupId' => 'setGroupId',
'leftSeatId' => 'setLeftSeatId',
'rightSeatId' => 'setRightSeatId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'priceAreaId' => 'getPriceAreaId',
'type' => 'getType',
'rank' => 'getRank',
'number' => 'getNumber',
'status' => 'getStatus',
'x' => 'getX',
'y' => 'getY',
'groupId' => 'getGroupId',
'leftSeatId' => 'getLeftSeatId',
'rightSeatId' => 'getRightSeatId'    ];

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

    const TYPE_NORMAL = 'NORMAL';
const TYPE_LOVESEAT_RIGHT = 'LOVESEAT-RIGHT';
const TYPE_LOVESEAT_LEFT = 'LOVESEAT-LEFT';
const TYPE_WHEELCHAIR = 'WHEELCHAIR';
const TYPE_HOUSESEAT = 'HOUSESEAT';
const TYPE_REMOVABLE_SPARE = 'REMOVABLE-SPARE';
const TYPE_DOUBLE_SEAT = 'DOUBLE-SEAT';
const TYPE_TRIPLE_SEAT = 'TRIPLE-SEAT';
const STATUS_FREE = 'SEAT_FREE';
const STATUS_NOTED = 'SEAT_NOTED';
const STATUS_BLOCKED = 'SEAT_BLOCKED';
const STATUS_SOLD = 'SEAT_SOLD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
self::TYPE_LOVESEAT_RIGHT,
self::TYPE_LOVESEAT_LEFT,
self::TYPE_WHEELCHAIR,
self::TYPE_HOUSESEAT,
self::TYPE_REMOVABLE_SPARE,
self::TYPE_DOUBLE_SEAT,
self::TYPE_TRIPLE_SEAT,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FREE,
self::STATUS_NOTED,
self::STATUS_BLOCKED,
self::STATUS_SOLD,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['priceAreaId'] = isset($data['priceAreaId']) ? $data['priceAreaId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'NORMAL';
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'SEAT_FREE';
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['leftSeatId'] = isset($data['leftSeatId']) ? $data['leftSeatId'] : null;
        $this->container['rightSeatId'] = isset($data['rightSeatId']) ? $data['rightSeatId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['priceAreaId'] === null) {
            $invalidProperties[] = "'priceAreaId' can't be null";
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

        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets priceAreaId
     *
     * @return int
     */
    public function getPriceAreaId()
    {
        return $this->container['priceAreaId'];
    }

    /**
     * Sets priceAreaId
     *
     * @param int $priceAreaId priceAreaId
     *
     * @return $this
     */
    public function setPriceAreaId($priceAreaId)
    {
        $this->container['priceAreaId'] = $priceAreaId;

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
     * @param string $type type
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
     * Gets rank
     *
     * @return string
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param string $rank rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status SEAT_NOTED are the seats which are marked to booking by the user, SEAT_BLOCKED are unavailable seats
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param int $groupId groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets leftSeatId
     *
     * @return int
     */
    public function getLeftSeatId()
    {
        return $this->container['leftSeatId'];
    }

    /**
     * Sets leftSeatId
     *
     * @param int $leftSeatId leftSeatId
     *
     * @return $this
     */
    public function setLeftSeatId($leftSeatId)
    {
        $this->container['leftSeatId'] = $leftSeatId;

        return $this;
    }

    /**
     * Gets rightSeatId
     *
     * @return int
     */
    public function getRightSeatId()
    {
        return $this->container['rightSeatId'];
    }

    /**
     * Sets rightSeatId
     *
     * @param int $rightSeatId rightSeatId
     *
     * @return $this
     */
    public function setRightSeatId($rightSeatId)
    {
        $this->container['rightSeatId'] = $rightSeatId;

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
