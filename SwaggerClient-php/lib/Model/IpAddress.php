<?php
/**
 * IpAddress
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
 * IpAddress Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 */
class IpAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ip_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access' => 'string',
        'family' => 'string',
        'server' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access' => null,
        'family' => null,
        'server' => 'uuid'
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
        'access' => 'access',
        'family' => 'family',
        'server' => 'server'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'access' => 'setAccess',
        'family' => 'setFamily',
        'server' => 'setServer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'access' => 'getAccess',
        'family' => 'getFamily',
        'server' => 'getServer'
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

    const ACCESS__PUBLIC = 'public';
    const ACCESS__PRIVATE = 'private';
    const FAMILY_I_PV4 = 'IPv4';
    const FAMILY_I_PV6 = 'IPv6';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS__PUBLIC,
            self::ACCESS__PRIVATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFamilyAllowableValues()
    {
        return [
            self::FAMILY_I_PV4,
            self::FAMILY_I_PV6,
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
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['family'] = isset($data['family']) ? $data['family'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getAccessAllowableValues();
        if (!in_array($this->container['access'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'access', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getFamilyAllowableValues();
        if (!in_array($this->container['family'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'family', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getAccessAllowableValues();
        if (!in_array($this->container['access'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getFamilyAllowableValues();
        if (!in_array($this->container['family'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets access
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     * @param string $access Is address for private or public network.
     * @return $this
     */
    public function setAccess($access)
    {
        $allowed_values = $this->getAccessAllowableValues();
        if (!is_null($access) && !in_array($access, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'access', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets family
     * @return string
     */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
     * Sets family
     * @param string $family The address family of new IP address.
     * @return $this
     */
    public function setFamily($family)
    {
        $allowed_values = $this->getFamilyAllowableValues();
        if (!is_null($family) && !in_array($family, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'family', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['family'] = $family;

        return $this;
    }

    /**
     * Gets server
     * @return string
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     * @param string $server Server id
     * @return $this
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

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


