<?php
/**
 * MovieItem
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
 * Swagger Codegen version: 3.0.14
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
 * MovieItem Class Doc Comment
 *
 * @category Class
 * @package  kinoheld\GenericProviderClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MovieItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MovieItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'title' => 'string',
'released' => 'string',
'duration' => 'int',
'description' => 'string',
'distributor' => 'string',
'thumbUrl' => 'string',
'trailerUrl' => 'string',
'icaaId' => 'int',
'rentrakId' => 'int',
'ageClassification' => 'string',
'genres' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'title' => null,
'released' => null,
'duration' => null,
'description' => null,
'distributor' => null,
'thumbUrl' => 'uri',
'trailerUrl' => 'uri',
'icaaId' => null,
'rentrakId' => null,
'ageClassification' => null,
'genres' => null    ];

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
'title' => 'title',
'released' => 'released',
'duration' => 'duration',
'description' => 'description',
'distributor' => 'distributor',
'thumbUrl' => 'thumbUrl',
'trailerUrl' => 'trailerUrl',
'icaaId' => 'icaaId',
'rentrakId' => 'rentrakId',
'ageClassification' => 'ageClassification',
'genres' => 'genres'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'title' => 'setTitle',
'released' => 'setReleased',
'duration' => 'setDuration',
'description' => 'setDescription',
'distributor' => 'setDistributor',
'thumbUrl' => 'setThumbUrl',
'trailerUrl' => 'setTrailerUrl',
'icaaId' => 'setIcaaId',
'rentrakId' => 'setRentrakId',
'ageClassification' => 'setAgeClassification',
'genres' => 'setGenres'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'title' => 'getTitle',
'released' => 'getReleased',
'duration' => 'getDuration',
'description' => 'getDescription',
'distributor' => 'getDistributor',
'thumbUrl' => 'getThumbUrl',
'trailerUrl' => 'getTrailerUrl',
'icaaId' => 'getIcaaId',
'rentrakId' => 'getRentrakId',
'ageClassification' => 'getAgeClassification',
'genres' => 'getGenres'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['released'] = isset($data['released']) ? $data['released'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['distributor'] = isset($data['distributor']) ? $data['distributor'] : null;
        $this->container['thumbUrl'] = isset($data['thumbUrl']) ? $data['thumbUrl'] : null;
        $this->container['trailerUrl'] = isset($data['trailerUrl']) ? $data['trailerUrl'] : null;
        $this->container['icaaId'] = isset($data['icaaId']) ? $data['icaaId'] : null;
        $this->container['rentrakId'] = isset($data['rentrakId']) ? $data['rentrakId'] : null;
        $this->container['ageClassification'] = isset($data['ageClassification']) ? $data['ageClassification'] : null;
        $this->container['genres'] = isset($data['genres']) ? $data['genres'] : null;
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
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['released'] === null) {
            $invalidProperties[] = "'released' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['distributor'] === null) {
            $invalidProperties[] = "'distributor' can't be null";
        }
        if ($this->container['thumbUrl'] === null) {
            $invalidProperties[] = "'thumbUrl' can't be null";
        }
        if ($this->container['trailerUrl'] === null) {
            $invalidProperties[] = "'trailerUrl' can't be null";
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
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets released
     *
     * @return string
     */
    public function getReleased()
    {
        return $this->container['released'];
    }

    /**
     * Sets released
     *
     * @param string $released released
     *
     * @return $this
     */
    public function setReleased($released)
    {
        $this->container['released'] = $released;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets distributor
     *
     * @return string
     */
    public function getDistributor()
    {
        return $this->container['distributor'];
    }

    /**
     * Sets distributor
     *
     * @param string $distributor distributor
     *
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->container['distributor'] = $distributor;

        return $this;
    }

    /**
     * Gets thumbUrl
     *
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->container['thumbUrl'];
    }

    /**
     * Sets thumbUrl
     *
     * @param string $thumbUrl thumbUrl
     *
     * @return $this
     */
    public function setThumbUrl($thumbUrl)
    {
        $this->container['thumbUrl'] = $thumbUrl;

        return $this;
    }

    /**
     * Gets trailerUrl
     *
     * @return string
     */
    public function getTrailerUrl()
    {
        return $this->container['trailerUrl'];
    }

    /**
     * Sets trailerUrl
     *
     * @param string $trailerUrl trailerUrl
     *
     * @return $this
     */
    public function setTrailerUrl($trailerUrl)
    {
        $this->container['trailerUrl'] = $trailerUrl;

        return $this;
    }

    /**
     * Gets icaaId
     *
     * @return int
     */
    public function getIcaaId()
    {
        return $this->container['icaaId'];
    }

    /**
     * Sets icaaId
     *
     * @param int $icaaId icaaId
     *
     * @return $this
     */
    public function setIcaaId($icaaId)
    {
        $this->container['icaaId'] = $icaaId;

        return $this;
    }

    /**
     * Gets rentrakId
     *
     * @return int
     */
    public function getRentrakId()
    {
        return $this->container['rentrakId'];
    }

    /**
     * Sets rentrakId
     *
     * @param int $rentrakId rentrakId
     *
     * @return $this
     */
    public function setRentrakId($rentrakId)
    {
        $this->container['rentrakId'] = $rentrakId;

        return $this;
    }

    /**
     * Gets ageClassification
     *
     * @return string
     */
    public function getAgeClassification()
    {
        return $this->container['ageClassification'];
    }

    /**
     * Sets ageClassification
     *
     * @param string $ageClassification ageClassification
     *
     * @return $this
     */
    public function setAgeClassification($ageClassification)
    {
        $this->container['ageClassification'] = $ageClassification;

        return $this;
    }

    /**
     * Gets genres
     *
     * @return string[]
     */
    public function getGenres()
    {
        return $this->container['genres'];
    }

    /**
     * Sets genres
     *
     * @param string[] $genres genres
     *
     * @return $this
     */
    public function setGenres($genres)
    {
        $this->container['genres'] = $genres;

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
