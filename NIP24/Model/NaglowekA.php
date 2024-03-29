<?php
/**
 * NaglowekA
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
 * NaglowekA Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NaglowekA implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NaglowekA';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rejestr' => '\NIP24\Model\Rejestr',
'numer_krs' => 'string',
'data_czas_odpisu' => 'string',
'stan_z_dnia' => 'string',
'data_rejestracji_wkrs' => 'string',
'numer_ostatniego_wpisu' => 'int',
'data_ostatniego_wpisu' => 'string',
'sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu' => 'string',
'oznaczenie_sadu_dokonujacego_ostatniego_wpisu' => 'string',
'stan_pozycji' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rejestr' => null,
'numer_krs' => null,
'data_czas_odpisu' => null,
'stan_z_dnia' => null,
'data_rejestracji_wkrs' => null,
'numer_ostatniego_wpisu' => 'int32',
'data_ostatniego_wpisu' => null,
'sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu' => null,
'oznaczenie_sadu_dokonujacego_ostatniego_wpisu' => null,
'stan_pozycji' => 'int32'    ];

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
        'rejestr' => 'rejestr',
'numer_krs' => 'numerKRS',
'data_czas_odpisu' => 'dataCzasOdpisu',
'stan_z_dnia' => 'stanZDnia',
'data_rejestracji_wkrs' => 'dataRejestracjiWKRS',
'numer_ostatniego_wpisu' => 'numerOstatniegoWpisu',
'data_ostatniego_wpisu' => 'dataOstatniegoWpisu',
'sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu' => 'sygnaturaAktSprawyDotyczacejOstatniegoWpisu',
'oznaczenie_sadu_dokonujacego_ostatniego_wpisu' => 'oznaczenieSaduDokonujacegoOstatniegoWpisu',
'stan_pozycji' => 'stanPozycji'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rejestr' => 'setRejestr',
'numer_krs' => 'setNumerKrs',
'data_czas_odpisu' => 'setDataCzasOdpisu',
'stan_z_dnia' => 'setStanZDnia',
'data_rejestracji_wkrs' => 'setDataRejestracjiWkrs',
'numer_ostatniego_wpisu' => 'setNumerOstatniegoWpisu',
'data_ostatniego_wpisu' => 'setDataOstatniegoWpisu',
'sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu' => 'setSygnaturaAktSprawyDotyczacejOstatniegoWpisu',
'oznaczenie_sadu_dokonujacego_ostatniego_wpisu' => 'setOznaczenieSaduDokonujacegoOstatniegoWpisu',
'stan_pozycji' => 'setStanPozycji'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rejestr' => 'getRejestr',
'numer_krs' => 'getNumerKrs',
'data_czas_odpisu' => 'getDataCzasOdpisu',
'stan_z_dnia' => 'getStanZDnia',
'data_rejestracji_wkrs' => 'getDataRejestracjiWkrs',
'numer_ostatniego_wpisu' => 'getNumerOstatniegoWpisu',
'data_ostatniego_wpisu' => 'getDataOstatniegoWpisu',
'sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu' => 'getSygnaturaAktSprawyDotyczacejOstatniegoWpisu',
'oznaczenie_sadu_dokonujacego_ostatniego_wpisu' => 'getOznaczenieSaduDokonujacegoOstatniegoWpisu',
'stan_pozycji' => 'getStanPozycji'    ];

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
        $this->container['rejestr'] = isset($data['rejestr']) ? $data['rejestr'] : null;
        $this->container['numer_krs'] = isset($data['numer_krs']) ? $data['numer_krs'] : null;
        $this->container['data_czas_odpisu'] = isset($data['data_czas_odpisu']) ? $data['data_czas_odpisu'] : null;
        $this->container['stan_z_dnia'] = isset($data['stan_z_dnia']) ? $data['stan_z_dnia'] : null;
        $this->container['data_rejestracji_wkrs'] = isset($data['data_rejestracji_wkrs']) ? $data['data_rejestracji_wkrs'] : null;
        $this->container['numer_ostatniego_wpisu'] = isset($data['numer_ostatniego_wpisu']) ? $data['numer_ostatniego_wpisu'] : null;
        $this->container['data_ostatniego_wpisu'] = isset($data['data_ostatniego_wpisu']) ? $data['data_ostatniego_wpisu'] : null;
        $this->container['sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu'] = isset($data['sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu']) ? $data['sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu'] : null;
        $this->container['oznaczenie_sadu_dokonujacego_ostatniego_wpisu'] = isset($data['oznaczenie_sadu_dokonujacego_ostatniego_wpisu']) ? $data['oznaczenie_sadu_dokonujacego_ostatniego_wpisu'] : null;
        $this->container['stan_pozycji'] = isset($data['stan_pozycji']) ? $data['stan_pozycji'] : null;
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
     * Gets rejestr
     *
     * @return \NIP24\Model\Rejestr
     */
    public function getRejestr()
    {
        return $this->container['rejestr'];
    }

    /**
     * Sets rejestr
     *
     * @param \NIP24\Model\Rejestr $rejestr rejestr
     *
     * @return $this
     */
    public function setRejestr($rejestr)
    {
        $this->container['rejestr'] = $rejestr;

        return $this;
    }

    /**
     * Gets numer_krs
     *
     * @return string
     */
    public function getNumerKrs()
    {
        return $this->container['numer_krs'];
    }

    /**
     * Sets numer_krs
     *
     * @param string $numer_krs numer_krs
     *
     * @return $this
     */
    public function setNumerKrs($numer_krs)
    {
        $this->container['numer_krs'] = $numer_krs;

        return $this;
    }

    /**
     * Gets data_czas_odpisu
     *
     * @return string
     */
    public function getDataCzasOdpisu()
    {
        return $this->container['data_czas_odpisu'];
    }

    /**
     * Sets data_czas_odpisu
     *
     * @param string $data_czas_odpisu data_czas_odpisu
     *
     * @return $this
     */
    public function setDataCzasOdpisu($data_czas_odpisu)
    {
        $this->container['data_czas_odpisu'] = $data_czas_odpisu;

        return $this;
    }

    /**
     * Gets stan_z_dnia
     *
     * @return string
     */
    public function getStanZDnia()
    {
        return $this->container['stan_z_dnia'];
    }

    /**
     * Sets stan_z_dnia
     *
     * @param string $stan_z_dnia stan_z_dnia
     *
     * @return $this
     */
    public function setStanZDnia($stan_z_dnia)
    {
        $this->container['stan_z_dnia'] = $stan_z_dnia;

        return $this;
    }

    /**
     * Gets data_rejestracji_wkrs
     *
     * @return string
     */
    public function getDataRejestracjiWkrs()
    {
        return $this->container['data_rejestracji_wkrs'];
    }

    /**
     * Sets data_rejestracji_wkrs
     *
     * @param string $data_rejestracji_wkrs data_rejestracji_wkrs
     *
     * @return $this
     */
    public function setDataRejestracjiWkrs($data_rejestracji_wkrs)
    {
        $this->container['data_rejestracji_wkrs'] = $data_rejestracji_wkrs;

        return $this;
    }

    /**
     * Gets numer_ostatniego_wpisu
     *
     * @return int
     */
    public function getNumerOstatniegoWpisu()
    {
        return $this->container['numer_ostatniego_wpisu'];
    }

    /**
     * Sets numer_ostatniego_wpisu
     *
     * @param int $numer_ostatniego_wpisu numer_ostatniego_wpisu
     *
     * @return $this
     */
    public function setNumerOstatniegoWpisu($numer_ostatniego_wpisu)
    {
        $this->container['numer_ostatniego_wpisu'] = $numer_ostatniego_wpisu;

        return $this;
    }

    /**
     * Gets data_ostatniego_wpisu
     *
     * @return string
     */
    public function getDataOstatniegoWpisu()
    {
        return $this->container['data_ostatniego_wpisu'];
    }

    /**
     * Sets data_ostatniego_wpisu
     *
     * @param string $data_ostatniego_wpisu data_ostatniego_wpisu
     *
     * @return $this
     */
    public function setDataOstatniegoWpisu($data_ostatniego_wpisu)
    {
        $this->container['data_ostatniego_wpisu'] = $data_ostatniego_wpisu;

        return $this;
    }

    /**
     * Gets sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu
     *
     * @return string
     */
    public function getSygnaturaAktSprawyDotyczacejOstatniegoWpisu()
    {
        return $this->container['sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu'];
    }

    /**
     * Sets sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu
     *
     * @param string $sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu
     *
     * @return $this
     */
    public function setSygnaturaAktSprawyDotyczacejOstatniegoWpisu($sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu)
    {
        $this->container['sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu'] = $sygnatura_akt_sprawy_dotyczacej_ostatniego_wpisu;

        return $this;
    }

    /**
     * Gets oznaczenie_sadu_dokonujacego_ostatniego_wpisu
     *
     * @return string
     */
    public function getOznaczenieSaduDokonujacegoOstatniegoWpisu()
    {
        return $this->container['oznaczenie_sadu_dokonujacego_ostatniego_wpisu'];
    }

    /**
     * Sets oznaczenie_sadu_dokonujacego_ostatniego_wpisu
     *
     * @param string $oznaczenie_sadu_dokonujacego_ostatniego_wpisu oznaczenie_sadu_dokonujacego_ostatniego_wpisu
     *
     * @return $this
     */
    public function setOznaczenieSaduDokonujacegoOstatniegoWpisu($oznaczenie_sadu_dokonujacego_ostatniego_wpisu)
    {
        $this->container['oznaczenie_sadu_dokonujacego_ostatniego_wpisu'] = $oznaczenie_sadu_dokonujacego_ostatniego_wpisu;

        return $this;
    }

    /**
     * Gets stan_pozycji
     *
     * @return int
     */
    public function getStanPozycji()
    {
        return $this->container['stan_pozycji'];
    }

    /**
     * Sets stan_pozycji
     *
     * @param int $stan_pozycji stan_pozycji
     *
     * @return $this
     */
    public function setStanPozycji($stan_pozycji)
    {
        $this->container['stan_pozycji'] = $stan_pozycji;

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
