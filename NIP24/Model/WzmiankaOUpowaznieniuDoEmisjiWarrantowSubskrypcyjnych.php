<?php
/**
 * WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych
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
 * WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych' => null    ];

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
        'czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych' => 'czyZarzadJestUprawnionyDoEmisjiWarrantowSubskrypcyjnych'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych' => 'setCzyZarzadJestUprawnionyDoEmisjiWarrantowSubskrypcyjnych'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych' => 'getCzyZarzadJestUprawnionyDoEmisjiWarrantowSubskrypcyjnych'    ];

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
        $this->container['czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych'] = isset($data['czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych']) ? $data['czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych'] : null;
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
     * Gets czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych
     *
     * @return bool
     */
    public function getCzyZarzadJestUprawnionyDoEmisjiWarrantowSubskrypcyjnych()
    {
        return $this->container['czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych'];
    }

    /**
     * Sets czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych
     *
     * @param bool $czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych
     *
     * @return $this
     */
    public function setCzyZarzadJestUprawnionyDoEmisjiWarrantowSubskrypcyjnych($czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych)
    {
        $this->container['czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych'] = $czy_zarzad_jest_uprawniony_do_emisji_warrantow_subskrypcyjnych;

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
