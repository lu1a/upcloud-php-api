<?php
/**
 * StopServer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 * 
 */


namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * StopServer Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 */
class StopServer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'stop_server';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stop_type' => 'string',
        'timeout' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stop_type' => null,
        'timeout' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'stop_type' => 'stop_type',
        'timeout' => 'timeout'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'stop_type' => 'setStopType',
        'timeout' => 'setTimeout'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'stop_type' => 'getStopType',
        'timeout' => 'getTimeout'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STOP_TYPE_SOFT = 'soft';
    const STOP_TYPE_HARD = 'hard';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStopTypeAllowableValues()
    {
        return [
            self::STOP_TYPE_SOFT,
            self::STOP_TYPE_HARD,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['stop_type'] = isset($data['stop_type']) ? $data['stop_type'] : 'soft';
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStopTypeAllowableValues();
        if (!in_array($this->container['stop_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'stop_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 600)) {
            $invalid_properties[] = "invalid value for 'timeout', must be smaller than or equal to 600.";
        }

        if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
            $invalid_properties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getStopTypeAllowableValues();
        if (!in_array($this->container['stop_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['timeout'] > 600) {
            return false;
        }
        if ($this->container['timeout'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets stop_type
     * @return string
     */
    public function getStopType()
    {
        return $this->container['stop_type'];
    }

    /**
     * Sets stop_type
     * @param string $stop_type Type of stop operation performed on the server.
     * @return $this
     */
    public function setStopType($stop_type)
    {
        $allowed_values = $this->getStopTypeAllowableValues();
        if (!is_null($stop_type) && !in_array($stop_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stop_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['stop_type'] = $stop_type;

        return $this;
    }

    /**
     * Gets timeout
     * @return float
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param float $timeout The stop timeout in seconds.
     * @return $this
     */
    public function setTimeout($timeout)
    {

        if (!is_null($timeout) && ($timeout > 600)) {
            throw new \InvalidArgumentException('invalid value for $timeout when calling StopServer., must be smaller than or equal to 600.');
        }
        if (!is_null($timeout) && ($timeout < 1)) {
            throw new \InvalidArgumentException('invalid value for $timeout when calling StopServer., must be bigger than or equal to 1.');
        }

        $this->container['timeout'] = $timeout;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


