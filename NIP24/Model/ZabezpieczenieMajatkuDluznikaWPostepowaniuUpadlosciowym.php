<?php
/**
 * ZabezpieczenieMajatkuDluznikaWPostepowaniuUpadlosciowym
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
 * ZabezpieczenieMajatkuDluznikaWPostepowaniuUpadlosciowym Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZabezpieczenieMajatkuDluznikaWPostepowaniuUpadlosciowym implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZabezpieczenieMajatkuDluznikaWPostepowaniuUpadlosciowym';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organ_wydajacy' => 'string',
'sygnatura_sprawy' => 'string',
'data_nadania_klauzuli_wykonalnosci' => 'string',
'informacja_o_przedmiocie_zabezpieczenia' => 'string',
'rodzaj_postepowania' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organ_wydajacy' => null,
'sygnatura_sprawy' => null,
'data_nadania_klauzuli_wykonalnosci' => null,
'informacja_o_przedmiocie_zabezpieczenia' => null,
'rodzaj_postepowania' => null    ];

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
        'organ_wydajacy' => 'organWydajacy',
'sygnatura_sprawy' => 'sygnaturaSprawy',
'data_nadania_klauzuli_wykonalnosci' => 'dataNadaniaKlauzuliWykonalnosci',
'informacja_o_przedmiocie_zabezpieczenia' => 'informacjaOPrzedmiocieZabezpieczenia',
'rodzaj_postepowania' => 'rodzajPostepowania'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organ_wydajacy' => 'setOrganWydajacy',
'sygnatura_sprawy' => 'setSygnaturaSprawy',
'data_nadania_klauzuli_wykonalnosci' => 'setDataNadaniaKlauzuliWykonalnosci',
'informacja_o_przedmiocie_zabezpieczenia' => 'setInformacjaOPrzedmiocieZabezpieczenia',
'rodzaj_postepowania' => 'setRodzajPostepowania'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organ_wydajacy' => 'getOrganWydajacy',
'sygnatura_sprawy' => 'getSygnaturaSprawy',
'data_nadania_klauzuli_wykonalnosci' => 'getDataNadaniaKlauzuliWykonalnosci',
'informacja_o_przedmiocie_zabezpieczenia' => 'getInformacjaOPrzedmiocieZabezpieczenia',
'rodzaj_postepowania' => 'getRodzajPostepowania'    ];

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
        $this->container['organ_wydajacy'] = isset($data['organ_wydajacy']) ? $data['organ_wydajacy'] : null;
        $this->container['sygnatura_sprawy'] = isset($data['sygnatura_sprawy']) ? $data['sygnatura_sprawy'] : null;
        $this->container['data_nadania_klauzuli_wykonalnosci'] = isset($data['data_nadania_klauzuli_wykonalnosci']) ? $data['data_nadania_klauzuli_wykonalnosci'] : null;
        $this->container['informacja_o_przedmiocie_zabezpieczenia'] = isset($data['informacja_o_przedmiocie_zabezpieczenia']) ? $data['informacja_o_przedmiocie_zabezpieczenia'] : null;
        $this->container['rodzaj_postepowania'] = isset($data['rodzaj_postepowania']) ? $data['rodzaj_postepowania'] : null;
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
     * Gets organ_wydajacy
     *
     * @return string
     */
    public function getOrganWydajacy()
    {
        return $this->container['organ_wydajacy'];
    }

    /**
     * Sets organ_wydajacy
     *
     * @param string $organ_wydajacy organ_wydajacy
     *
     * @return $this
     */
    public function setOrganWydajacy($organ_wydajacy)
    {
        $this->container['organ_wydajacy'] = $organ_wydajacy;

        return $this;
    }

    /**
     * Gets sygnatura_sprawy
     *
     * @return string
     */
    public function getSygnaturaSprawy()
    {
        return $this->container['sygnatura_sprawy'];
    }

    /**
     * Sets sygnatura_sprawy
     *
     * @param string $sygnatura_sprawy sygnatura_sprawy
     *
     * @return $this
     */
    public function setSygnaturaSprawy($sygnatura_sprawy)
    {
        $this->container['sygnatura_sprawy'] = $sygnatura_sprawy;

        return $this;
    }

    /**
     * Gets data_nadania_klauzuli_wykonalnosci
     *
     * @return string
     */
    public function getDataNadaniaKlauzuliWykonalnosci()
    {
        return $this->container['data_nadania_klauzuli_wykonalnosci'];
    }

    /**
     * Sets data_nadania_klauzuli_wykonalnosci
     *
     * @param string $data_nadania_klauzuli_wykonalnosci data_nadania_klauzuli_wykonalnosci
     *
     * @return $this
     */
    public function setDataNadaniaKlauzuliWykonalnosci($data_nadania_klauzuli_wykonalnosci)
    {
        $this->container['data_nadania_klauzuli_wykonalnosci'] = $data_nadania_klauzuli_wykonalnosci;

        return $this;
    }

    /**
     * Gets informacja_o_przedmiocie_zabezpieczenia
     *
     * @return string
     */
    public function getInformacjaOPrzedmiocieZabezpieczenia()
    {
        return $this->container['informacja_o_przedmiocie_zabezpieczenia'];
    }

    /**
     * Sets informacja_o_przedmiocie_zabezpieczenia
     *
     * @param string $informacja_o_przedmiocie_zabezpieczenia informacja_o_przedmiocie_zabezpieczenia
     *
     * @return $this
     */
    public function setInformacjaOPrzedmiocieZabezpieczenia($informacja_o_przedmiocie_zabezpieczenia)
    {
        $this->container['informacja_o_przedmiocie_zabezpieczenia'] = $informacja_o_przedmiocie_zabezpieczenia;

        return $this;
    }

    /**
     * Gets rodzaj_postepowania
     *
     * @return string
     */
    public function getRodzajPostepowania()
    {
        return $this->container['rodzaj_postepowania'];
    }

    /**
     * Sets rodzaj_postepowania
     *
     * @param string $rodzaj_postepowania rodzaj_postepowania
     *
     * @return $this
     */
    public function setRodzajPostepowania($rodzaj_postepowania)
    {
        $this->container['rodzaj_postepowania'] = $rodzaj_postepowania;

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