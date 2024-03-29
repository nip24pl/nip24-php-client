<?php
/**
 * SposobPowstaniaPodmiotu
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
 * SposobPowstaniaPodmiotu Class Doc Comment
 *
 * @category Class
 * @description Tylko dla spółki S.A. występuje atrybut
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SposobPowstaniaPodmiotu implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SposobPowstaniaPodmiotu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'okolicznosci_powstania' => 'string',
'opis_sposobu_powstania_informacja_o_uchwale' => 'string',
'nr_data_decyzji_prezesa_uoki_k' => 'string',
'podmioty' => '\NIP24\Model\Podmioty[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'okolicznosci_powstania' => null,
'opis_sposobu_powstania_informacja_o_uchwale' => null,
'nr_data_decyzji_prezesa_uoki_k' => null,
'podmioty' => null    ];

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
        'okolicznosci_powstania' => 'okolicznosciPowstania',
'opis_sposobu_powstania_informacja_o_uchwale' => 'opisSposobuPowstaniaInformacjaOUchwale',
'nr_data_decyzji_prezesa_uoki_k' => 'nrDataDecyzjiPrezesaUOKiK',
'podmioty' => 'podmioty'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'okolicznosci_powstania' => 'setOkolicznosciPowstania',
'opis_sposobu_powstania_informacja_o_uchwale' => 'setOpisSposobuPowstaniaInformacjaOUchwale',
'nr_data_decyzji_prezesa_uoki_k' => 'setNrDataDecyzjiPrezesaUokiK',
'podmioty' => 'setPodmioty'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'okolicznosci_powstania' => 'getOkolicznosciPowstania',
'opis_sposobu_powstania_informacja_o_uchwale' => 'getOpisSposobuPowstaniaInformacjaOUchwale',
'nr_data_decyzji_prezesa_uoki_k' => 'getNrDataDecyzjiPrezesaUokiK',
'podmioty' => 'getPodmioty'    ];

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
        $this->container['okolicznosci_powstania'] = isset($data['okolicznosci_powstania']) ? $data['okolicznosci_powstania'] : null;
        $this->container['opis_sposobu_powstania_informacja_o_uchwale'] = isset($data['opis_sposobu_powstania_informacja_o_uchwale']) ? $data['opis_sposobu_powstania_informacja_o_uchwale'] : null;
        $this->container['nr_data_decyzji_prezesa_uoki_k'] = isset($data['nr_data_decyzji_prezesa_uoki_k']) ? $data['nr_data_decyzji_prezesa_uoki_k'] : null;
        $this->container['podmioty'] = isset($data['podmioty']) ? $data['podmioty'] : null;
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
     * Gets okolicznosci_powstania
     *
     * @return string
     */
    public function getOkolicznosciPowstania()
    {
        return $this->container['okolicznosci_powstania'];
    }

    /**
     * Sets okolicznosci_powstania
     *
     * @param string $okolicznosci_powstania okolicznosci_powstania
     *
     * @return $this
     */
    public function setOkolicznosciPowstania($okolicznosci_powstania)
    {
        $this->container['okolicznosci_powstania'] = $okolicznosci_powstania;

        return $this;
    }

    /**
     * Gets opis_sposobu_powstania_informacja_o_uchwale
     *
     * @return string
     */
    public function getOpisSposobuPowstaniaInformacjaOUchwale()
    {
        return $this->container['opis_sposobu_powstania_informacja_o_uchwale'];
    }

    /**
     * Sets opis_sposobu_powstania_informacja_o_uchwale
     *
     * @param string $opis_sposobu_powstania_informacja_o_uchwale opis_sposobu_powstania_informacja_o_uchwale
     *
     * @return $this
     */
    public function setOpisSposobuPowstaniaInformacjaOUchwale($opis_sposobu_powstania_informacja_o_uchwale)
    {
        $this->container['opis_sposobu_powstania_informacja_o_uchwale'] = $opis_sposobu_powstania_informacja_o_uchwale;

        return $this;
    }

    /**
     * Gets nr_data_decyzji_prezesa_uoki_k
     *
     * @return string
     */
    public function getNrDataDecyzjiPrezesaUokiK()
    {
        return $this->container['nr_data_decyzji_prezesa_uoki_k'];
    }

    /**
     * Sets nr_data_decyzji_prezesa_uoki_k
     *
     * @param string $nr_data_decyzji_prezesa_uoki_k nr_data_decyzji_prezesa_uoki_k
     *
     * @return $this
     */
    public function setNrDataDecyzjiPrezesaUokiK($nr_data_decyzji_prezesa_uoki_k)
    {
        $this->container['nr_data_decyzji_prezesa_uoki_k'] = $nr_data_decyzji_prezesa_uoki_k;

        return $this;
    }

    /**
     * Gets podmioty
     *
     * @return \NIP24\Model\Podmioty[]
     */
    public function getPodmioty()
    {
        return $this->container['podmioty'];
    }

    /**
     * Sets podmioty
     *
     * @param \NIP24\Model\Podmioty[] $podmioty podmioty
     *
     * @return $this
     */
    public function setPodmioty($podmioty)
    {
        $this->container['podmioty'] = $podmioty;

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
