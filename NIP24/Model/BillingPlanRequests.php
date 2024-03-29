<?php
/**
 * BillingPlanRequests
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
 * BillingPlanRequests Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingPlanRequests implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BillingPlanRequests';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_data' => 'int',
'all_data' => 'int',
'firm_status' => 'int',
'vat_status' => 'int',
'vies_status' => 'int',
'iban_status' => 'int',
'wl_status' => 'int',
'search_vat' => 'int',
'total' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_data' => 'int32',
'all_data' => 'int32',
'firm_status' => 'int32',
'vat_status' => 'int32',
'vies_status' => 'int32',
'iban_status' => 'int32',
'wl_status' => 'int32',
'search_vat' => 'int32',
'total' => 'int32'    ];

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
        'invoice_data' => 'invoiceData',
'all_data' => 'allData',
'firm_status' => 'firmStatus',
'vat_status' => 'vatStatus',
'vies_status' => 'viesStatus',
'iban_status' => 'ibanStatus',
'wl_status' => 'wlStatus',
'search_vat' => 'searchVAT',
'total' => 'total'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_data' => 'setInvoiceData',
'all_data' => 'setAllData',
'firm_status' => 'setFirmStatus',
'vat_status' => 'setVatStatus',
'vies_status' => 'setViesStatus',
'iban_status' => 'setIbanStatus',
'wl_status' => 'setWlStatus',
'search_vat' => 'setSearchVat',
'total' => 'setTotal'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_data' => 'getInvoiceData',
'all_data' => 'getAllData',
'firm_status' => 'getFirmStatus',
'vat_status' => 'getVatStatus',
'vies_status' => 'getViesStatus',
'iban_status' => 'getIbanStatus',
'wl_status' => 'getWlStatus',
'search_vat' => 'getSearchVat',
'total' => 'getTotal'    ];

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
        $this->container['invoice_data'] = isset($data['invoice_data']) ? $data['invoice_data'] : null;
        $this->container['all_data'] = isset($data['all_data']) ? $data['all_data'] : null;
        $this->container['firm_status'] = isset($data['firm_status']) ? $data['firm_status'] : null;
        $this->container['vat_status'] = isset($data['vat_status']) ? $data['vat_status'] : null;
        $this->container['vies_status'] = isset($data['vies_status']) ? $data['vies_status'] : null;
        $this->container['iban_status'] = isset($data['iban_status']) ? $data['iban_status'] : null;
        $this->container['wl_status'] = isset($data['wl_status']) ? $data['wl_status'] : null;
        $this->container['search_vat'] = isset($data['search_vat']) ? $data['search_vat'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoice_data'] === null) {
            $invalidProperties[] = "'invoice_data' can't be null";
        }
        if ($this->container['all_data'] === null) {
            $invalidProperties[] = "'all_data' can't be null";
        }
        if ($this->container['firm_status'] === null) {
            $invalidProperties[] = "'firm_status' can't be null";
        }
        if ($this->container['vat_status'] === null) {
            $invalidProperties[] = "'vat_status' can't be null";
        }
        if ($this->container['vies_status'] === null) {
            $invalidProperties[] = "'vies_status' can't be null";
        }
        if ($this->container['iban_status'] === null) {
            $invalidProperties[] = "'iban_status' can't be null";
        }
        if ($this->container['wl_status'] === null) {
            $invalidProperties[] = "'wl_status' can't be null";
        }
        if ($this->container['search_vat'] === null) {
            $invalidProperties[] = "'search_vat' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets invoice_data
     *
     * @return int
     */
    public function getInvoiceData()
    {
        return $this->container['invoice_data'];
    }

    /**
     * Sets invoice_data
     *
     * @param int $invoice_data invoice_data
     *
     * @return $this
     */
    public function setInvoiceData($invoice_data)
    {
        $this->container['invoice_data'] = $invoice_data;

        return $this;
    }

    /**
     * Gets all_data
     *
     * @return int
     */
    public function getAllData()
    {
        return $this->container['all_data'];
    }

    /**
     * Sets all_data
     *
     * @param int $all_data all_data
     *
     * @return $this
     */
    public function setAllData($all_data)
    {
        $this->container['all_data'] = $all_data;

        return $this;
    }

    /**
     * Gets firm_status
     *
     * @return int
     */
    public function getFirmStatus()
    {
        return $this->container['firm_status'];
    }

    /**
     * Sets firm_status
     *
     * @param int $firm_status firm_status
     *
     * @return $this
     */
    public function setFirmStatus($firm_status)
    {
        $this->container['firm_status'] = $firm_status;

        return $this;
    }

    /**
     * Gets vat_status
     *
     * @return int
     */
    public function getVatStatus()
    {
        return $this->container['vat_status'];
    }

    /**
     * Sets vat_status
     *
     * @param int $vat_status vat_status
     *
     * @return $this
     */
    public function setVatStatus($vat_status)
    {
        $this->container['vat_status'] = $vat_status;

        return $this;
    }

    /**
     * Gets vies_status
     *
     * @return int
     */
    public function getViesStatus()
    {
        return $this->container['vies_status'];
    }

    /**
     * Sets vies_status
     *
     * @param int $vies_status vies_status
     *
     * @return $this
     */
    public function setViesStatus($vies_status)
    {
        $this->container['vies_status'] = $vies_status;

        return $this;
    }

    /**
     * Gets iban_status
     *
     * @return int
     */
    public function getIbanStatus()
    {
        return $this->container['iban_status'];
    }

    /**
     * Sets iban_status
     *
     * @param int $iban_status iban_status
     *
     * @return $this
     */
    public function setIbanStatus($iban_status)
    {
        $this->container['iban_status'] = $iban_status;

        return $this;
    }

    /**
     * Gets wl_status
     *
     * @return int
     */
    public function getWlStatus()
    {
        return $this->container['wl_status'];
    }

    /**
     * Sets wl_status
     *
     * @param int $wl_status wl_status
     *
     * @return $this
     */
    public function setWlStatus($wl_status)
    {
        $this->container['wl_status'] = $wl_status;

        return $this;
    }

    /**
     * Gets search_vat
     *
     * @return int
     */
    public function getSearchVat()
    {
        return $this->container['search_vat'];
    }

    /**
     * Sets search_vat
     *
     * @param int $search_vat search_vat
     *
     * @return $this
     */
    public function setSearchVat($search_vat)
    {
        $this->container['search_vat'] = $search_vat;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
