<?php
/**
 * CartItem
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
 * Swagger Codegen version: 3.0.23
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
 * CartItem Class Doc Comment
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'priceAreaId' => 'int',
'priceCategoryId' => 'int',
'count' => 'int',
'seatIds' => 'int[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'priceAreaId' => null,
'priceCategoryId' => null,
'count' => null,
'seatIds' => null    ];

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
        'priceAreaId' => 'priceAreaId',
'priceCategoryId' => 'priceCategoryId',
'count' => 'count',
'seatIds' => 'seatIds'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'priceAreaId' => 'setPriceAreaId',
'priceCategoryId' => 'setPriceCategoryId',
'count' => 'setCount',
'seatIds' => 'setSeatIds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'priceAreaId' => 'getPriceAreaId',
'priceCategoryId' => 'getPriceCategoryId',
'count' => 'getCount',
'seatIds' => 'getSeatIds'    ];

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
        $this->container['priceAreaId'] = isset($data['priceAreaId']) ? $data['priceAreaId'] : null;
        $this->container['priceCategoryId'] = isset($data['priceCategoryId']) ? $data['priceCategoryId'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['seatIds'] = isset($data['seatIds']) ? $data['seatIds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['priceAreaId'] === null) {
            $invalidProperties[] = "'priceAreaId' can't be null";
        }
        if ($this->container['priceCategoryId'] === null) {
            $invalidProperties[] = "'priceCategoryId' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
     * @param int $priceAreaId The price area the seats/tickets should be selected for.
     *
     * @return $this
     */
    public function setPriceAreaId($priceAreaId)
    {
        $this->container['priceAreaId'] = $priceAreaId;

        return $this;
    }

    /**
     * Gets priceCategoryId
     *
     * @return int
     */
    public function getPriceCategoryId()
    {
        return $this->container['priceCategoryId'];
    }

    /**
     * Sets priceCategoryId
     *
     * @param int $priceCategoryId The price category the seats/tickets should be selected for.
     *
     * @return $this
     */
    public function setPriceCategoryId($priceCategoryId)
    {
        $this->container['priceCategoryId'] = $priceCategoryId;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The amount of seats/tickets that should be selected for the given price category.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets seatIds
     *
     * @return int[]
     */
    public function getSeatIds()
    {
        return $this->container['seatIds'];
    }

    /**
     * Sets seatIds
     *
     * @param int[] $seatIds If the cart is attached to a show/event with seat selection, this field is required and will contain the seat IDs that have been selected by the user for the given price category.
     *
     * @return $this
     */
    public function setSeatIds($seatIds)
    {
        $this->container['seatIds'] = $seatIds;

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
