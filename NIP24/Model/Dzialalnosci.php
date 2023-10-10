<?php
/**
 * Dzialalnosci
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
 * Dzialalnosci Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dzialalnosci implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dzialalnosci';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opis' => 'string',
'kod_dzial' => 'string',
'kod_klasa' => 'string',
'kod_podklasa' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opis' => null,
'kod_dzial' => null,
'kod_klasa' => null,
'kod_podklasa' => null    ];

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
        'opis' => 'opis',
'kod_dzial' => 'kodDzial',
'kod_klasa' => 'kodKlasa',
'kod_podklasa' => 'kodPodklasa'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opis' => 'setOpis',
'kod_dzial' => 'setKodDzial',
'kod_klasa' => 'setKodKlasa',
'kod_podklasa' => 'setKodPodklasa'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opis' => 'getOpis',
'kod_dzial' => 'getKodDzial',
'kod_klasa' => 'getKodKlasa',
'kod_podklasa' => 'getKodPodklasa'    ];

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
        $this->container['opis'] = isset($data['opis']) ? $data['opis'] : null;
        $this->container['kod_dzial'] = isset($data['kod_dzial']) ? $data['kod_dzial'] : null;
        $this->container['kod_klasa'] = isset($data['kod_klasa']) ? $data['kod_klasa'] : null;
        $this->container['kod_podklasa'] = isset($data['kod_podklasa']) ? $data['kod_podklasa'] : null;
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
     * Gets opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->container['opis'];
    }

    /**
     * Sets opis
     *
     * @param string $opis opis
     *
     * @return $this
     */
    public function setOpis($opis)
    {
        $this->container['opis'] = $opis;

        return $this;
    }

    /**
     * Gets kod_dzial
     *
     * @return string
     */
    public function getKodDzial()
    {
        return $this->container['kod_dzial'];
    }

    /**
     * Sets kod_dzial
     *
     * @param string $kod_dzial kod_dzial
     *
     * @return $this
     */
    public function setKodDzial($kod_dzial)
    {
        $this->container['kod_dzial'] = $kod_dzial;

        return $this;
    }

    /**
     * Gets kod_klasa
     *
     * @return string
     */
    public function getKodKlasa()
    {
        return $this->container['kod_klasa'];
    }

    /**
     * Sets kod_klasa
     *
     * @param string $kod_klasa kod_klasa
     *
     * @return $this
     */
    public function setKodKlasa($kod_klasa)
    {
        $this->container['kod_klasa'] = $kod_klasa;

        return $this;
    }

    /**
     * Gets kod_podklasa
     *
     * @return string
     */
    public function getKodPodklasa()
    {
        return $this->container['kod_podklasa'];
    }

    /**
     * Sets kod_podklasa
     *
     * @param string $kod_podklasa kod_podklasa
     *
     * @return $this
     */
    public function setKodPodklasa($kod_podklasa)
    {
        $this->container['kod_podklasa'] = $kod_podklasa;

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