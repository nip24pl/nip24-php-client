<?php
/**
 * PozostaleInformacje
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
 * PozostaleInformacje Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PozostaleInformacje implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PozostaleInformacje';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'czas_na_jaki_utworzony_zostal_podmiot' => 'string',
'informacja_o_liczbie_udzialow' => 'string',
'czy_umowa_statut_przyznaje_uprawnienia_osobiste' => 'bool',
'czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'czas_na_jaki_utworzony_zostal_podmiot' => null,
'informacja_o_liczbie_udzialow' => null,
'czy_umowa_statut_przyznaje_uprawnienia_osobiste' => null,
'czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku' => null    ];

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
        'czas_na_jaki_utworzony_zostal_podmiot' => 'czasNaJakiUtworzonyZostalPodmiot',
'informacja_o_liczbie_udzialow' => 'informacjaOLiczbieUdzialow',
'czy_umowa_statut_przyznaje_uprawnienia_osobiste' => 'czyUmowaStatutPrzyznajeUprawnieniaOsobiste',
'czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku' => 'czyObligatoriuszeMajaPrawoDoUdzialuWZysku'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'czas_na_jaki_utworzony_zostal_podmiot' => 'setCzasNaJakiUtworzonyZostalPodmiot',
'informacja_o_liczbie_udzialow' => 'setInformacjaOLiczbieUdzialow',
'czy_umowa_statut_przyznaje_uprawnienia_osobiste' => 'setCzyUmowaStatutPrzyznajeUprawnieniaOsobiste',
'czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku' => 'setCzyObligatoriuszeMajaPrawoDoUdzialuWZysku'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'czas_na_jaki_utworzony_zostal_podmiot' => 'getCzasNaJakiUtworzonyZostalPodmiot',
'informacja_o_liczbie_udzialow' => 'getInformacjaOLiczbieUdzialow',
'czy_umowa_statut_przyznaje_uprawnienia_osobiste' => 'getCzyUmowaStatutPrzyznajeUprawnieniaOsobiste',
'czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku' => 'getCzyObligatoriuszeMajaPrawoDoUdzialuWZysku'    ];

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
        $this->container['czas_na_jaki_utworzony_zostal_podmiot'] = isset($data['czas_na_jaki_utworzony_zostal_podmiot']) ? $data['czas_na_jaki_utworzony_zostal_podmiot'] : null;
        $this->container['informacja_o_liczbie_udzialow'] = isset($data['informacja_o_liczbie_udzialow']) ? $data['informacja_o_liczbie_udzialow'] : null;
        $this->container['czy_umowa_statut_przyznaje_uprawnienia_osobiste'] = isset($data['czy_umowa_statut_przyznaje_uprawnienia_osobiste']) ? $data['czy_umowa_statut_przyznaje_uprawnienia_osobiste'] : null;
        $this->container['czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku'] = isset($data['czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku']) ? $data['czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku'] : null;
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
     * Gets czas_na_jaki_utworzony_zostal_podmiot
     *
     * @return string
     */
    public function getCzasNaJakiUtworzonyZostalPodmiot()
    {
        return $this->container['czas_na_jaki_utworzony_zostal_podmiot'];
    }

    /**
     * Sets czas_na_jaki_utworzony_zostal_podmiot
     *
     * @param string $czas_na_jaki_utworzony_zostal_podmiot czas_na_jaki_utworzony_zostal_podmiot
     *
     * @return $this
     */
    public function setCzasNaJakiUtworzonyZostalPodmiot($czas_na_jaki_utworzony_zostal_podmiot)
    {
        $this->container['czas_na_jaki_utworzony_zostal_podmiot'] = $czas_na_jaki_utworzony_zostal_podmiot;

        return $this;
    }

    /**
     * Gets informacja_o_liczbie_udzialow
     *
     * @return string
     */
    public function getInformacjaOLiczbieUdzialow()
    {
        return $this->container['informacja_o_liczbie_udzialow'];
    }

    /**
     * Sets informacja_o_liczbie_udzialow
     *
     * @param string $informacja_o_liczbie_udzialow informacja_o_liczbie_udzialow
     *
     * @return $this
     */
    public function setInformacjaOLiczbieUdzialow($informacja_o_liczbie_udzialow)
    {
        $this->container['informacja_o_liczbie_udzialow'] = $informacja_o_liczbie_udzialow;

        return $this;
    }

    /**
     * Gets czy_umowa_statut_przyznaje_uprawnienia_osobiste
     *
     * @return bool
     */
    public function getCzyUmowaStatutPrzyznajeUprawnieniaOsobiste()
    {
        return $this->container['czy_umowa_statut_przyznaje_uprawnienia_osobiste'];
    }

    /**
     * Sets czy_umowa_statut_przyznaje_uprawnienia_osobiste
     *
     * @param bool $czy_umowa_statut_przyznaje_uprawnienia_osobiste czy_umowa_statut_przyznaje_uprawnienia_osobiste
     *
     * @return $this
     */
    public function setCzyUmowaStatutPrzyznajeUprawnieniaOsobiste($czy_umowa_statut_przyznaje_uprawnienia_osobiste)
    {
        $this->container['czy_umowa_statut_przyznaje_uprawnienia_osobiste'] = $czy_umowa_statut_przyznaje_uprawnienia_osobiste;

        return $this;
    }

    /**
     * Gets czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku
     *
     * @return bool
     */
    public function getCzyObligatoriuszeMajaPrawoDoUdzialuWZysku()
    {
        return $this->container['czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku'];
    }

    /**
     * Sets czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku
     *
     * @param bool $czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku
     *
     * @return $this
     */
    public function setCzyObligatoriuszeMajaPrawoDoUdzialuWZysku($czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku)
    {
        $this->container['czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku'] = $czy_obligatoriusze_maja_prawo_do_udzialu_w_zysku;

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
