<?php
/**
 * VATEntity
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
 * VATEntity Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VATEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VATEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'nip' => 'string',
'regon' => 'string',
'krs' => 'string',
'residence_address' => 'string',
'working_address' => 'string',
'vat' => '\NIP24\Model\VATEntityStatus',
'representatives' => '\NIP24\Model\VATPerson[]',
'authorized_clerks' => '\NIP24\Model\VATPerson[]',
'partners' => '\NIP24\Model\VATPerson[]',
'ibans' => 'string[]',
'has_virtual_accounts' => 'bool',
'registration_legal_date' => '\DateTime',
'registration_denial_date' => '\DateTime',
'registration_denial_basis' => 'string',
'restoration_date' => '\DateTime',
'restoration_basis' => 'string',
'removal_date' => '\DateTime',
'removal_basis' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'nip' => null,
'regon' => null,
'krs' => null,
'residence_address' => null,
'working_address' => null,
'vat' => null,
'representatives' => null,
'authorized_clerks' => null,
'partners' => null,
'ibans' => null,
'has_virtual_accounts' => null,
'registration_legal_date' => 'date',
'registration_denial_date' => 'date',
'registration_denial_basis' => null,
'restoration_date' => 'date',
'restoration_basis' => null,
'removal_date' => 'date',
'removal_basis' => null    ];

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
        'name' => 'name',
'nip' => 'nip',
'regon' => 'regon',
'krs' => 'krs',
'residence_address' => 'residenceAddress',
'working_address' => 'workingAddress',
'vat' => 'vat',
'representatives' => 'representatives',
'authorized_clerks' => 'authorizedClerks',
'partners' => 'partners',
'ibans' => 'ibans',
'has_virtual_accounts' => 'hasVirtualAccounts',
'registration_legal_date' => 'registrationLegalDate',
'registration_denial_date' => 'registrationDenialDate',
'registration_denial_basis' => 'registrationDenialBasis',
'restoration_date' => 'restorationDate',
'restoration_basis' => 'restorationBasis',
'removal_date' => 'removalDate',
'removal_basis' => 'removalBasis'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'nip' => 'setNip',
'regon' => 'setRegon',
'krs' => 'setKrs',
'residence_address' => 'setResidenceAddress',
'working_address' => 'setWorkingAddress',
'vat' => 'setVat',
'representatives' => 'setRepresentatives',
'authorized_clerks' => 'setAuthorizedClerks',
'partners' => 'setPartners',
'ibans' => 'setIbans',
'has_virtual_accounts' => 'setHasVirtualAccounts',
'registration_legal_date' => 'setRegistrationLegalDate',
'registration_denial_date' => 'setRegistrationDenialDate',
'registration_denial_basis' => 'setRegistrationDenialBasis',
'restoration_date' => 'setRestorationDate',
'restoration_basis' => 'setRestorationBasis',
'removal_date' => 'setRemovalDate',
'removal_basis' => 'setRemovalBasis'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'nip' => 'getNip',
'regon' => 'getRegon',
'krs' => 'getKrs',
'residence_address' => 'getResidenceAddress',
'working_address' => 'getWorkingAddress',
'vat' => 'getVat',
'representatives' => 'getRepresentatives',
'authorized_clerks' => 'getAuthorizedClerks',
'partners' => 'getPartners',
'ibans' => 'getIbans',
'has_virtual_accounts' => 'getHasVirtualAccounts',
'registration_legal_date' => 'getRegistrationLegalDate',
'registration_denial_date' => 'getRegistrationDenialDate',
'registration_denial_basis' => 'getRegistrationDenialBasis',
'restoration_date' => 'getRestorationDate',
'restoration_basis' => 'getRestorationBasis',
'removal_date' => 'getRemovalDate',
'removal_basis' => 'getRemovalBasis'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nip'] = isset($data['nip']) ? $data['nip'] : null;
        $this->container['regon'] = isset($data['regon']) ? $data['regon'] : null;
        $this->container['krs'] = isset($data['krs']) ? $data['krs'] : null;
        $this->container['residence_address'] = isset($data['residence_address']) ? $data['residence_address'] : null;
        $this->container['working_address'] = isset($data['working_address']) ? $data['working_address'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['representatives'] = isset($data['representatives']) ? $data['representatives'] : null;
        $this->container['authorized_clerks'] = isset($data['authorized_clerks']) ? $data['authorized_clerks'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['ibans'] = isset($data['ibans']) ? $data['ibans'] : null;
        $this->container['has_virtual_accounts'] = isset($data['has_virtual_accounts']) ? $data['has_virtual_accounts'] : null;
        $this->container['registration_legal_date'] = isset($data['registration_legal_date']) ? $data['registration_legal_date'] : null;
        $this->container['registration_denial_date'] = isset($data['registration_denial_date']) ? $data['registration_denial_date'] : null;
        $this->container['registration_denial_basis'] = isset($data['registration_denial_basis']) ? $data['registration_denial_basis'] : null;
        $this->container['restoration_date'] = isset($data['restoration_date']) ? $data['restoration_date'] : null;
        $this->container['restoration_basis'] = isset($data['restoration_basis']) ? $data['restoration_basis'] : null;
        $this->container['removal_date'] = isset($data['removal_date']) ? $data['removal_date'] : null;
        $this->container['removal_basis'] = isset($data['removal_basis']) ? $data['removal_basis'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['nip'] === null) {
            $invalidProperties[] = "'nip' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['ibans'] === null) {
            $invalidProperties[] = "'ibans' can't be null";
        }
        if ($this->container['has_virtual_accounts'] === null) {
            $invalidProperties[] = "'has_virtual_accounts' can't be null";
        }
        if ($this->container['registration_legal_date'] === null) {
            $invalidProperties[] = "'registration_legal_date' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->container['nip'];
    }

    /**
     * Sets nip
     *
     * @param string $nip nip
     *
     * @return $this
     */
    public function setNip($nip)
    {
        $this->container['nip'] = $nip;

        return $this;
    }

    /**
     * Gets regon
     *
     * @return string
     */
    public function getRegon()
    {
        return $this->container['regon'];
    }

    /**
     * Sets regon
     *
     * @param string $regon regon
     *
     * @return $this
     */
    public function setRegon($regon)
    {
        $this->container['regon'] = $regon;

        return $this;
    }

    /**
     * Gets krs
     *
     * @return string
     */
    public function getKrs()
    {
        return $this->container['krs'];
    }

    /**
     * Sets krs
     *
     * @param string $krs krs
     *
     * @return $this
     */
    public function setKrs($krs)
    {
        $this->container['krs'] = $krs;

        return $this;
    }

    /**
     * Gets residence_address
     *
     * @return string
     */
    public function getResidenceAddress()
    {
        return $this->container['residence_address'];
    }

    /**
     * Sets residence_address
     *
     * @param string $residence_address residence_address
     *
     * @return $this
     */
    public function setResidenceAddress($residence_address)
    {
        $this->container['residence_address'] = $residence_address;

        return $this;
    }

    /**
     * Gets working_address
     *
     * @return string
     */
    public function getWorkingAddress()
    {
        return $this->container['working_address'];
    }

    /**
     * Sets working_address
     *
     * @param string $working_address working_address
     *
     * @return $this
     */
    public function setWorkingAddress($working_address)
    {
        $this->container['working_address'] = $working_address;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \NIP24\Model\VATEntityStatus
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \NIP24\Model\VATEntityStatus $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets representatives
     *
     * @return \NIP24\Model\VATPerson[]
     */
    public function getRepresentatives()
    {
        return $this->container['representatives'];
    }

    /**
     * Sets representatives
     *
     * @param \NIP24\Model\VATPerson[] $representatives representatives
     *
     * @return $this
     */
    public function setRepresentatives($representatives)
    {
        $this->container['representatives'] = $representatives;

        return $this;
    }

    /**
     * Gets authorized_clerks
     *
     * @return \NIP24\Model\VATPerson[]
     */
    public function getAuthorizedClerks()
    {
        return $this->container['authorized_clerks'];
    }

    /**
     * Sets authorized_clerks
     *
     * @param \NIP24\Model\VATPerson[] $authorized_clerks authorized_clerks
     *
     * @return $this
     */
    public function setAuthorizedClerks($authorized_clerks)
    {
        $this->container['authorized_clerks'] = $authorized_clerks;

        return $this;
    }

    /**
     * Gets partners
     *
     * @return \NIP24\Model\VATPerson[]
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     *
     * @param \NIP24\Model\VATPerson[] $partners partners
     *
     * @return $this
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets ibans
     *
     * @return string[]
     */
    public function getIbans()
    {
        return $this->container['ibans'];
    }

    /**
     * Sets ibans
     *
     * @param string[] $ibans ibans
     *
     * @return $this
     */
    public function setIbans($ibans)
    {
        $this->container['ibans'] = $ibans;

        return $this;
    }

    /**
     * Gets has_virtual_accounts
     *
     * @return bool
     */
    public function getHasVirtualAccounts()
    {
        return $this->container['has_virtual_accounts'];
    }

    /**
     * Sets has_virtual_accounts
     *
     * @param bool $has_virtual_accounts has_virtual_accounts
     *
     * @return $this
     */
    public function setHasVirtualAccounts($has_virtual_accounts)
    {
        $this->container['has_virtual_accounts'] = $has_virtual_accounts;

        return $this;
    }

    /**
     * Gets registration_legal_date
     *
     * @return \DateTime
     */
    public function getRegistrationLegalDate()
    {
        return $this->container['registration_legal_date'];
    }

    /**
     * Sets registration_legal_date
     *
     * @param \DateTime $registration_legal_date registration_legal_date
     *
     * @return $this
     */
    public function setRegistrationLegalDate($registration_legal_date)
    {
        $this->container['registration_legal_date'] = $registration_legal_date;

        return $this;
    }

    /**
     * Gets registration_denial_date
     *
     * @return \DateTime
     */
    public function getRegistrationDenialDate()
    {
        return $this->container['registration_denial_date'];
    }

    /**
     * Sets registration_denial_date
     *
     * @param \DateTime $registration_denial_date registration_denial_date
     *
     * @return $this
     */
    public function setRegistrationDenialDate($registration_denial_date)
    {
        $this->container['registration_denial_date'] = $registration_denial_date;

        return $this;
    }

    /**
     * Gets registration_denial_basis
     *
     * @return string
     */
    public function getRegistrationDenialBasis()
    {
        return $this->container['registration_denial_basis'];
    }

    /**
     * Sets registration_denial_basis
     *
     * @param string $registration_denial_basis registration_denial_basis
     *
     * @return $this
     */
    public function setRegistrationDenialBasis($registration_denial_basis)
    {
        $this->container['registration_denial_basis'] = $registration_denial_basis;

        return $this;
    }

    /**
     * Gets restoration_date
     *
     * @return \DateTime
     */
    public function getRestorationDate()
    {
        return $this->container['restoration_date'];
    }

    /**
     * Sets restoration_date
     *
     * @param \DateTime $restoration_date restoration_date
     *
     * @return $this
     */
    public function setRestorationDate($restoration_date)
    {
        $this->container['restoration_date'] = $restoration_date;

        return $this;
    }

    /**
     * Gets restoration_basis
     *
     * @return string
     */
    public function getRestorationBasis()
    {
        return $this->container['restoration_basis'];
    }

    /**
     * Sets restoration_basis
     *
     * @param string $restoration_basis restoration_basis
     *
     * @return $this
     */
    public function setRestorationBasis($restoration_basis)
    {
        $this->container['restoration_basis'] = $restoration_basis;

        return $this;
    }

    /**
     * Gets removal_date
     *
     * @return \DateTime
     */
    public function getRemovalDate()
    {
        return $this->container['removal_date'];
    }

    /**
     * Sets removal_date
     *
     * @param \DateTime $removal_date removal_date
     *
     * @return $this
     */
    public function setRemovalDate($removal_date)
    {
        $this->container['removal_date'] = $removal_date;

        return $this;
    }

    /**
     * Gets removal_basis
     *
     * @return string
     */
    public function getRemovalBasis()
    {
        return $this->container['removal_basis'];
    }

    /**
     * Sets removal_basis
     *
     * @param string $removal_basis removal_basis
     *
     * @return $this
     */
    public function setRemovalBasis($removal_basis)
    {
        $this->container['removal_basis'] = $removal_basis;

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