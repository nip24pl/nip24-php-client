<?php
/**
 * Dzial6
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
 * Dzial6 Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dzial6 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dzial6';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postepowanie_upadlosciowe' => '\NIP24\Model\PostepowanieUpadlosciowe[]',
'polaczenie_podzial_przeksztalcenie' => '\NIP24\Model\PolaczeniePodzialPrzeksztalcenie[]',
'likwidacja' => '\NIP24\Model\Likwidacja[]',
'rozwiazanie_uniewaznienie' => '\NIP24\Model\RozwiazanieUniewaznienie[]',
'zawieszenie_wznowienie' => '\NIP24\Model\ZawieszenieWznowienie[]',
'postepowanie_ukladowe' => '\NIP24\Model\PostepowanieUkladowe[]',
'postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja' => '\NIP24\Model\PostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postepowanie_upadlosciowe' => null,
'polaczenie_podzial_przeksztalcenie' => null,
'likwidacja' => null,
'rozwiazanie_uniewaznienie' => null,
'zawieszenie_wznowienie' => null,
'postepowanie_ukladowe' => null,
'postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja' => null    ];

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
        'postepowanie_upadlosciowe' => 'postepowanieUpadlosciowe',
'polaczenie_podzial_przeksztalcenie' => 'polaczeniePodzialPrzeksztalcenie',
'likwidacja' => 'likwidacja',
'rozwiazanie_uniewaznienie' => 'rozwiazanieUniewaznienie',
'zawieszenie_wznowienie' => 'zawieszenieWznowienie',
'postepowanie_ukladowe' => 'postepowanieUkladowe',
'postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja' => 'postepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postepowanie_upadlosciowe' => 'setPostepowanieUpadlosciowe',
'polaczenie_podzial_przeksztalcenie' => 'setPolaczeniePodzialPrzeksztalcenie',
'likwidacja' => 'setLikwidacja',
'rozwiazanie_uniewaznienie' => 'setRozwiazanieUniewaznienie',
'zawieszenie_wznowienie' => 'setZawieszenieWznowienie',
'postepowanie_ukladowe' => 'setPostepowanieUkladowe',
'postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja' => 'setPostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postepowanie_upadlosciowe' => 'getPostepowanieUpadlosciowe',
'polaczenie_podzial_przeksztalcenie' => 'getPolaczeniePodzialPrzeksztalcenie',
'likwidacja' => 'getLikwidacja',
'rozwiazanie_uniewaznienie' => 'getRozwiazanieUniewaznienie',
'zawieszenie_wznowienie' => 'getZawieszenieWznowienie',
'postepowanie_ukladowe' => 'getPostepowanieUkladowe',
'postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja' => 'getPostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja'    ];

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
        $this->container['postepowanie_upadlosciowe'] = isset($data['postepowanie_upadlosciowe']) ? $data['postepowanie_upadlosciowe'] : null;
        $this->container['polaczenie_podzial_przeksztalcenie'] = isset($data['polaczenie_podzial_przeksztalcenie']) ? $data['polaczenie_podzial_przeksztalcenie'] : null;
        $this->container['likwidacja'] = isset($data['likwidacja']) ? $data['likwidacja'] : null;
        $this->container['rozwiazanie_uniewaznienie'] = isset($data['rozwiazanie_uniewaznienie']) ? $data['rozwiazanie_uniewaznienie'] : null;
        $this->container['zawieszenie_wznowienie'] = isset($data['zawieszenie_wznowienie']) ? $data['zawieszenie_wznowienie'] : null;
        $this->container['postepowanie_ukladowe'] = isset($data['postepowanie_ukladowe']) ? $data['postepowanie_ukladowe'] : null;
        $this->container['postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja'] = isset($data['postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja']) ? $data['postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja'] : null;
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
     * Gets postepowanie_upadlosciowe
     *
     * @return \NIP24\Model\PostepowanieUpadlosciowe[]
     */
    public function getPostepowanieUpadlosciowe()
    {
        return $this->container['postepowanie_upadlosciowe'];
    }

    /**
     * Sets postepowanie_upadlosciowe
     *
     * @param \NIP24\Model\PostepowanieUpadlosciowe[] $postepowanie_upadlosciowe postepowanie_upadlosciowe
     *
     * @return $this
     */
    public function setPostepowanieUpadlosciowe($postepowanie_upadlosciowe)
    {
        $this->container['postepowanie_upadlosciowe'] = $postepowanie_upadlosciowe;

        return $this;
    }

    /**
     * Gets polaczenie_podzial_przeksztalcenie
     *
     * @return \NIP24\Model\PolaczeniePodzialPrzeksztalcenie[]
     */
    public function getPolaczeniePodzialPrzeksztalcenie()
    {
        return $this->container['polaczenie_podzial_przeksztalcenie'];
    }

    /**
     * Sets polaczenie_podzial_przeksztalcenie
     *
     * @param \NIP24\Model\PolaczeniePodzialPrzeksztalcenie[] $polaczenie_podzial_przeksztalcenie polaczenie_podzial_przeksztalcenie
     *
     * @return $this
     */
    public function setPolaczeniePodzialPrzeksztalcenie($polaczenie_podzial_przeksztalcenie)
    {
        $this->container['polaczenie_podzial_przeksztalcenie'] = $polaczenie_podzial_przeksztalcenie;

        return $this;
    }

    /**
     * Gets likwidacja
     *
     * @return \NIP24\Model\Likwidacja[]
     */
    public function getLikwidacja()
    {
        return $this->container['likwidacja'];
    }

    /**
     * Sets likwidacja
     *
     * @param \NIP24\Model\Likwidacja[] $likwidacja likwidacja
     *
     * @return $this
     */
    public function setLikwidacja($likwidacja)
    {
        $this->container['likwidacja'] = $likwidacja;

        return $this;
    }

    /**
     * Gets rozwiazanie_uniewaznienie
     *
     * @return \NIP24\Model\RozwiazanieUniewaznienie[]
     */
    public function getRozwiazanieUniewaznienie()
    {
        return $this->container['rozwiazanie_uniewaznienie'];
    }

    /**
     * Sets rozwiazanie_uniewaznienie
     *
     * @param \NIP24\Model\RozwiazanieUniewaznienie[] $rozwiazanie_uniewaznienie rozwiazanie_uniewaznienie
     *
     * @return $this
     */
    public function setRozwiazanieUniewaznienie($rozwiazanie_uniewaznienie)
    {
        $this->container['rozwiazanie_uniewaznienie'] = $rozwiazanie_uniewaznienie;

        return $this;
    }

    /**
     * Gets zawieszenie_wznowienie
     *
     * @return \NIP24\Model\ZawieszenieWznowienie[]
     */
    public function getZawieszenieWznowienie()
    {
        return $this->container['zawieszenie_wznowienie'];
    }

    /**
     * Sets zawieszenie_wznowienie
     *
     * @param \NIP24\Model\ZawieszenieWznowienie[] $zawieszenie_wznowienie zawieszenie_wznowienie
     *
     * @return $this
     */
    public function setZawieszenieWznowienie($zawieszenie_wznowienie)
    {
        $this->container['zawieszenie_wznowienie'] = $zawieszenie_wznowienie;

        return $this;
    }

    /**
     * Gets postepowanie_ukladowe
     *
     * @return \NIP24\Model\PostepowanieUkladowe[]
     */
    public function getPostepowanieUkladowe()
    {
        return $this->container['postepowanie_ukladowe'];
    }

    /**
     * Sets postepowanie_ukladowe
     *
     * @param \NIP24\Model\PostepowanieUkladowe[] $postepowanie_ukladowe postepowanie_ukladowe
     *
     * @return $this
     */
    public function setPostepowanieUkladowe($postepowanie_ukladowe)
    {
        $this->container['postepowanie_ukladowe'] = $postepowanie_ukladowe;

        return $this;
    }

    /**
     * Gets postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja
     *
     * @return \NIP24\Model\PostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja[]
     */
    public function getPostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja()
    {
        return $this->container['postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja'];
    }

    /**
     * Sets postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja
     *
     * @param \NIP24\Model\PostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja[] $postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja
     *
     * @return $this
     */
    public function setPostepowanieRestrukturyzacyjneNaprawczePrzymusowaRestrukturyzacja($postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja)
    {
        $this->container['postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja'] = $postepowanie_restrukturyzacyjne_naprawcze_przymusowa_restrukturyzacja;

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
