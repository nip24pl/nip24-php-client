<?php
/**
 * Dzial1
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
 * Dzial1 Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dzial1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dzial1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organ_sprawujacy_nadzor' => '\NIP24\Model\OrganSprawujacyNadzor',
'dane_podmiotu' => '\NIP24\Model\DanePodmiotu',
'siedziba_i_adres' => '\NIP24\Model\SiedzibaIAdres',
'jednostki_terenowe_oddzialy' => '\NIP24\Model\JednostkiTerenoweOddzialy[]',
'umowa_statut' => '\NIP24\Model\UmowaStatut',
'pozostale_informacje' => '\NIP24\Model\PozostaleInformacje',
'wspolnicy_spzoo' => '\NIP24\Model\WspolnicySpzoo[]',
'jedyny_akcjonariusz' => '\NIP24\Model\JedynyAkcjonariusz[]',
'sposob_powstania_podmiotu' => '\NIP24\Model\SposobPowstaniaPodmiotu',
'kapital' => '\NIP24\Model\Kapital',
'emisje_akcji' => '\NIP24\Model\EmisjeAkcji[]',
'wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych' => '\NIP24\Model\WzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych',
'wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych' => '\NIP24\Model\WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organ_sprawujacy_nadzor' => null,
'dane_podmiotu' => null,
'siedziba_i_adres' => null,
'jednostki_terenowe_oddzialy' => null,
'umowa_statut' => null,
'pozostale_informacje' => null,
'wspolnicy_spzoo' => null,
'jedyny_akcjonariusz' => null,
'sposob_powstania_podmiotu' => null,
'kapital' => null,
'emisje_akcji' => null,
'wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych' => null,
'wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych' => null    ];

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
        'organ_sprawujacy_nadzor' => 'organSprawujacyNadzor',
'dane_podmiotu' => 'danePodmiotu',
'siedziba_i_adres' => 'siedzibaIAdres',
'jednostki_terenowe_oddzialy' => 'jednostkiTerenoweOddzialy',
'umowa_statut' => 'umowaStatut',
'pozostale_informacje' => 'pozostaleInformacje',
'wspolnicy_spzoo' => 'wspolnicySpzoo',
'jedyny_akcjonariusz' => 'jedynyAkcjonariusz',
'sposob_powstania_podmiotu' => 'sposobPowstaniaPodmiotu',
'kapital' => 'kapital',
'emisje_akcji' => 'emisjeAkcji',
'wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych' => 'wzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych',
'wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych' => 'wzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organ_sprawujacy_nadzor' => 'setOrganSprawujacyNadzor',
'dane_podmiotu' => 'setDanePodmiotu',
'siedziba_i_adres' => 'setSiedzibaIAdres',
'jednostki_terenowe_oddzialy' => 'setJednostkiTerenoweOddzialy',
'umowa_statut' => 'setUmowaStatut',
'pozostale_informacje' => 'setPozostaleInformacje',
'wspolnicy_spzoo' => 'setWspolnicySpzoo',
'jedyny_akcjonariusz' => 'setJedynyAkcjonariusz',
'sposob_powstania_podmiotu' => 'setSposobPowstaniaPodmiotu',
'kapital' => 'setKapital',
'emisje_akcji' => 'setEmisjeAkcji',
'wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych' => 'setWzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych',
'wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych' => 'setWzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organ_sprawujacy_nadzor' => 'getOrganSprawujacyNadzor',
'dane_podmiotu' => 'getDanePodmiotu',
'siedziba_i_adres' => 'getSiedzibaIAdres',
'jednostki_terenowe_oddzialy' => 'getJednostkiTerenoweOddzialy',
'umowa_statut' => 'getUmowaStatut',
'pozostale_informacje' => 'getPozostaleInformacje',
'wspolnicy_spzoo' => 'getWspolnicySpzoo',
'jedyny_akcjonariusz' => 'getJedynyAkcjonariusz',
'sposob_powstania_podmiotu' => 'getSposobPowstaniaPodmiotu',
'kapital' => 'getKapital',
'emisje_akcji' => 'getEmisjeAkcji',
'wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych' => 'getWzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych',
'wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych' => 'getWzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych'    ];

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
        $this->container['organ_sprawujacy_nadzor'] = isset($data['organ_sprawujacy_nadzor']) ? $data['organ_sprawujacy_nadzor'] : null;
        $this->container['dane_podmiotu'] = isset($data['dane_podmiotu']) ? $data['dane_podmiotu'] : null;
        $this->container['siedziba_i_adres'] = isset($data['siedziba_i_adres']) ? $data['siedziba_i_adres'] : null;
        $this->container['jednostki_terenowe_oddzialy'] = isset($data['jednostki_terenowe_oddzialy']) ? $data['jednostki_terenowe_oddzialy'] : null;
        $this->container['umowa_statut'] = isset($data['umowa_statut']) ? $data['umowa_statut'] : null;
        $this->container['pozostale_informacje'] = isset($data['pozostale_informacje']) ? $data['pozostale_informacje'] : null;
        $this->container['wspolnicy_spzoo'] = isset($data['wspolnicy_spzoo']) ? $data['wspolnicy_spzoo'] : null;
        $this->container['jedyny_akcjonariusz'] = isset($data['jedyny_akcjonariusz']) ? $data['jedyny_akcjonariusz'] : null;
        $this->container['sposob_powstania_podmiotu'] = isset($data['sposob_powstania_podmiotu']) ? $data['sposob_powstania_podmiotu'] : null;
        $this->container['kapital'] = isset($data['kapital']) ? $data['kapital'] : null;
        $this->container['emisje_akcji'] = isset($data['emisje_akcji']) ? $data['emisje_akcji'] : null;
        $this->container['wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych'] = isset($data['wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych']) ? $data['wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych'] : null;
        $this->container['wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych'] = isset($data['wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych']) ? $data['wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych'] : null;
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
     * Gets organ_sprawujacy_nadzor
     *
     * @return \NIP24\Model\OrganSprawujacyNadzor
     */
    public function getOrganSprawujacyNadzor()
    {
        return $this->container['organ_sprawujacy_nadzor'];
    }

    /**
     * Sets organ_sprawujacy_nadzor
     *
     * @param \NIP24\Model\OrganSprawujacyNadzor $organ_sprawujacy_nadzor organ_sprawujacy_nadzor
     *
     * @return $this
     */
    public function setOrganSprawujacyNadzor($organ_sprawujacy_nadzor)
    {
        $this->container['organ_sprawujacy_nadzor'] = $organ_sprawujacy_nadzor;

        return $this;
    }

    /**
     * Gets dane_podmiotu
     *
     * @return \NIP24\Model\DanePodmiotu
     */
    public function getDanePodmiotu()
    {
        return $this->container['dane_podmiotu'];
    }

    /**
     * Sets dane_podmiotu
     *
     * @param \NIP24\Model\DanePodmiotu $dane_podmiotu dane_podmiotu
     *
     * @return $this
     */
    public function setDanePodmiotu($dane_podmiotu)
    {
        $this->container['dane_podmiotu'] = $dane_podmiotu;

        return $this;
    }

    /**
     * Gets siedziba_i_adres
     *
     * @return \NIP24\Model\SiedzibaIAdres
     */
    public function getSiedzibaIAdres()
    {
        return $this->container['siedziba_i_adres'];
    }

    /**
     * Sets siedziba_i_adres
     *
     * @param \NIP24\Model\SiedzibaIAdres $siedziba_i_adres siedziba_i_adres
     *
     * @return $this
     */
    public function setSiedzibaIAdres($siedziba_i_adres)
    {
        $this->container['siedziba_i_adres'] = $siedziba_i_adres;

        return $this;
    }

    /**
     * Gets jednostki_terenowe_oddzialy
     *
     * @return \NIP24\Model\JednostkiTerenoweOddzialy[]
     */
    public function getJednostkiTerenoweOddzialy()
    {
        return $this->container['jednostki_terenowe_oddzialy'];
    }

    /**
     * Sets jednostki_terenowe_oddzialy
     *
     * @param \NIP24\Model\JednostkiTerenoweOddzialy[] $jednostki_terenowe_oddzialy jednostki_terenowe_oddzialy
     *
     * @return $this
     */
    public function setJednostkiTerenoweOddzialy($jednostki_terenowe_oddzialy)
    {
        $this->container['jednostki_terenowe_oddzialy'] = $jednostki_terenowe_oddzialy;

        return $this;
    }

    /**
     * Gets umowa_statut
     *
     * @return \NIP24\Model\UmowaStatut
     */
    public function getUmowaStatut()
    {
        return $this->container['umowa_statut'];
    }

    /**
     * Sets umowa_statut
     *
     * @param \NIP24\Model\UmowaStatut $umowa_statut umowa_statut
     *
     * @return $this
     */
    public function setUmowaStatut($umowa_statut)
    {
        $this->container['umowa_statut'] = $umowa_statut;

        return $this;
    }

    /**
     * Gets pozostale_informacje
     *
     * @return \NIP24\Model\PozostaleInformacje
     */
    public function getPozostaleInformacje()
    {
        return $this->container['pozostale_informacje'];
    }

    /**
     * Sets pozostale_informacje
     *
     * @param \NIP24\Model\PozostaleInformacje $pozostale_informacje pozostale_informacje
     *
     * @return $this
     */
    public function setPozostaleInformacje($pozostale_informacje)
    {
        $this->container['pozostale_informacje'] = $pozostale_informacje;

        return $this;
    }

    /**
     * Gets wspolnicy_spzoo
     *
     * @return \NIP24\Model\WspolnicySpzoo[]
     */
    public function getWspolnicySpzoo()
    {
        return $this->container['wspolnicy_spzoo'];
    }

    /**
     * Sets wspolnicy_spzoo
     *
     * @param \NIP24\Model\WspolnicySpzoo[] $wspolnicy_spzoo wspolnicy_spzoo
     *
     * @return $this
     */
    public function setWspolnicySpzoo($wspolnicy_spzoo)
    {
        $this->container['wspolnicy_spzoo'] = $wspolnicy_spzoo;

        return $this;
    }

    /**
     * Gets jedyny_akcjonariusz
     *
     * @return \NIP24\Model\JedynyAkcjonariusz[]
     */
    public function getJedynyAkcjonariusz()
    {
        return $this->container['jedyny_akcjonariusz'];
    }

    /**
     * Sets jedyny_akcjonariusz
     *
     * @param \NIP24\Model\JedynyAkcjonariusz[] $jedyny_akcjonariusz jedyny_akcjonariusz
     *
     * @return $this
     */
    public function setJedynyAkcjonariusz($jedyny_akcjonariusz)
    {
        $this->container['jedyny_akcjonariusz'] = $jedyny_akcjonariusz;

        return $this;
    }

    /**
     * Gets sposob_powstania_podmiotu
     *
     * @return \NIP24\Model\SposobPowstaniaPodmiotu
     */
    public function getSposobPowstaniaPodmiotu()
    {
        return $this->container['sposob_powstania_podmiotu'];
    }

    /**
     * Sets sposob_powstania_podmiotu
     *
     * @param \NIP24\Model\SposobPowstaniaPodmiotu $sposob_powstania_podmiotu sposob_powstania_podmiotu
     *
     * @return $this
     */
    public function setSposobPowstaniaPodmiotu($sposob_powstania_podmiotu)
    {
        $this->container['sposob_powstania_podmiotu'] = $sposob_powstania_podmiotu;

        return $this;
    }

    /**
     * Gets kapital
     *
     * @return \NIP24\Model\Kapital
     */
    public function getKapital()
    {
        return $this->container['kapital'];
    }

    /**
     * Sets kapital
     *
     * @param \NIP24\Model\Kapital $kapital kapital
     *
     * @return $this
     */
    public function setKapital($kapital)
    {
        $this->container['kapital'] = $kapital;

        return $this;
    }

    /**
     * Gets emisje_akcji
     *
     * @return \NIP24\Model\EmisjeAkcji[]
     */
    public function getEmisjeAkcji()
    {
        return $this->container['emisje_akcji'];
    }

    /**
     * Sets emisje_akcji
     *
     * @param \NIP24\Model\EmisjeAkcji[] $emisje_akcji emisje_akcji
     *
     * @return $this
     */
    public function setEmisjeAkcji($emisje_akcji)
    {
        $this->container['emisje_akcji'] = $emisje_akcji;

        return $this;
    }

    /**
     * Gets wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych
     *
     * @return \NIP24\Model\WzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych
     */
    public function getWzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych()
    {
        return $this->container['wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych'];
    }

    /**
     * Sets wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych
     *
     * @param \NIP24\Model\WzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych $wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych
     *
     * @return $this
     */
    public function setWzmiankaOPodjeciuUchwalyOEmisjachObligacjiZamiennych($wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych)
    {
        $this->container['wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych'] = $wzmianka_o_podjeciu_uchwaly_o_emisjach_obligacji_zamiennych;

        return $this;
    }

    /**
     * Gets wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych
     *
     * @return \NIP24\Model\WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych
     */
    public function getWzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych()
    {
        return $this->container['wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych'];
    }

    /**
     * Sets wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych
     *
     * @param \NIP24\Model\WzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych $wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych
     *
     * @return $this
     */
    public function setWzmiankaOUpowaznieniuDoEmisjiWarrantowSubskrypcyjnych($wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych)
    {
        $this->container['wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych'] = $wzmianka_o_upowaznieniu_do_emisji_warrantow_subskrypcyjnych;

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