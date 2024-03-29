<?php
/**
 * Dane
 *
 * PHP version 5
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * NIP24 Service
 *
 * NIP24 Service
 *
 * OpenAPI spec version: 1.3.5
 * Contact: kontakt@nip24.pl
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NIP24\Model;

use \ArrayAccess;
use \NIP24\ObjectSerializer;

/**
 * Dane Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dane implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dane';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dzial1' => '\NIP24\Model\Dzial1',
'dzial2' => '\NIP24\Model\Dzial2',
'dzial3' => '\NIP24\Model\Dzial3',
'dzial4' => '\NIP24\Model\Dzial4',
'dzial5' => '\NIP24\Model\Dzial5',
'dzial6' => '\NIP24\Model\Dzial6'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dzial1' => null,
'dzial2' => null,
'dzial3' => null,
'dzial4' => null,
'dzial5' => null,
'dzial6' => null    ];

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
        'dzial1' => 'dzial1',
'dzial2' => 'dzial2',
'dzial3' => 'dzial3',
'dzial4' => 'dzial4',
'dzial5' => 'dzial5',
'dzial6' => 'dzial6'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dzial1' => 'setDzial1',
'dzial2' => 'setDzial2',
'dzial3' => 'setDzial3',
'dzial4' => 'setDzial4',
'dzial5' => 'setDzial5',
'dzial6' => 'setDzial6'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dzial1' => 'getDzial1',
'dzial2' => 'getDzial2',
'dzial3' => 'getDzial3',
'dzial4' => 'getDzial4',
'dzial5' => 'getDzial5',
'dzial6' => 'getDzial6'    ];

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
        $this->container['dzial1'] = isset($data['dzial1']) ? $data['dzial1'] : null;
        $this->container['dzial2'] = isset($data['dzial2']) ? $data['dzial2'] : null;
        $this->container['dzial3'] = isset($data['dzial3']) ? $data['dzial3'] : null;
        $this->container['dzial4'] = isset($data['dzial4']) ? $data['dzial4'] : null;
        $this->container['dzial5'] = isset($data['dzial5']) ? $data['dzial5'] : null;
        $this->container['dzial6'] = isset($data['dzial6']) ? $data['dzial6'] : null;
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
     * Gets dzial1
     *
     * @return \NIP24\Model\Dzial1
     */
    public function getDzial1()
    {
        return $this->container['dzial1'];
    }

    /**
     * Sets dzial1
     *
     * @param \NIP24\Model\Dzial1 $dzial1 dzial1
     *
     * @return $this
     */
    public function setDzial1($dzial1)
    {
        $this->container['dzial1'] = $dzial1;

        return $this;
    }

    /**
     * Gets dzial2
     *
     * @return \NIP24\Model\Dzial2
     */
    public function getDzial2()
    {
        return $this->container['dzial2'];
    }

    /**
     * Sets dzial2
     *
     * @param \NIP24\Model\Dzial2 $dzial2 dzial2
     *
     * @return $this
     */
    public function setDzial2($dzial2)
    {
        $this->container['dzial2'] = $dzial2;

        return $this;
    }

    /**
     * Gets dzial3
     *
     * @return \NIP24\Model\Dzial3
     */
    public function getDzial3()
    {
        return $this->container['dzial3'];
    }

    /**
     * Sets dzial3
     *
     * @param \NIP24\Model\Dzial3 $dzial3 dzial3
     *
     * @return $this
     */
    public function setDzial3($dzial3)
    {
        $this->container['dzial3'] = $dzial3;

        return $this;
    }

    /**
     * Gets dzial4
     *
     * @return \NIP24\Model\Dzial4
     */
    public function getDzial4()
    {
        return $this->container['dzial4'];
    }

    /**
     * Sets dzial4
     *
     * @param \NIP24\Model\Dzial4 $dzial4 dzial4
     *
     * @return $this
     */
    public function setDzial4($dzial4)
    {
        $this->container['dzial4'] = $dzial4;

        return $this;
    }

    /**
     * Gets dzial5
     *
     * @return \NIP24\Model\Dzial5
     */
    public function getDzial5()
    {
        return $this->container['dzial5'];
    }

    /**
     * Sets dzial5
     *
     * @param \NIP24\Model\Dzial5 $dzial5 dzial5
     *
     * @return $this
     */
    public function setDzial5($dzial5)
    {
        $this->container['dzial5'] = $dzial5;

        return $this;
    }

    /**
     * Gets dzial6
     *
     * @return \NIP24\Model\Dzial6
     */
    public function getDzial6()
    {
        return $this->container['dzial6'];
    }

    /**
     * Sets dzial6
     *
     * @param \NIP24\Model\Dzial6 $dzial6 dzial6
     *
     * @return $this
     */
    public function setDzial6($dzial6)
    {
        $this->container['dzial6'] = $dzial6;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
