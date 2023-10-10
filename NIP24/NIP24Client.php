<?php
/**
 * Copyright 2015-2023 NETCAT (www.netcat.pl)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * @author NETCAT <firma@netcat.pl>
 * @copyright 2015-2023 NETCAT (www.netcat.pl)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace NIP24;

/**
 * NIP24 service client
 */
class NIP24Client
{
    const VERSION = '1.4.0';

    const PRODUCTION_URL = 'https://www.nip24.pl/api';
    const TEST_URL = 'https://www.nip24.pl/api-test';
    
    const TEST_ID = 'test_id';
    const TEST_KEY = 'test_key';

    private $url;
    private $id;
    private $key;
    private $app;

    private $errcode;
    private $err;

    /**
     * NIP24 PSR-0 autoloader
     */
    public static function autoload($className)
    {
        $className = str_replace('NIP24\\', '', $className);
        $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

        if (file_exists($path)) {
            require $path;
        }
    }

    /**
     * Register NIP24's PSR-0 autoloader
     */
    public static function registerAutoloader()
    {
        $files = array(
            'Error.php',
            'PKD.php',
            'AccountStatus.php',
            'InvoiceData.php',
            'AllData.php',
            'VIESData.php',
            'VATStatus.php',
            'IBANStatus.php',
            'WLStatus.php',
            'SearchResult.php',
            'VATEntity.php',
            'VATPerson.php',
            'NIP.php',
            'EUVAT.php',
            'REGON.php',
            'KRS.php',
            'IBAN.php',
            'Number.php'
        );

        foreach ($files as $file) {
            $path = __DIR__ . DIRECTORY_SEPARATOR . $file;

            if (file_exists($path)) {
                require_once $path;
            }
        }

        spl_autoload_register(__NAMESPACE__ . '\\NIP24Client::autoload');
    }

    /**
     * Construct new service client object
     * 
     * @param string $id
     *            NIP24 key identifier
     * @param string $key
     *            NIP24 key
     */
    public function __construct($id = null, $key = null)
    {
        $this->url = self::TEST_URL;
        $this->id = self::TEST_ID;
        $this->key = self::TEST_KEY;
        
        if (!empty($id) && !empty($key)) {
            $this->url = self::PRODUCTION_URL;
            $this->id = $id;
            $this->key = $key;
        }
        
        $this->app = '';
        $this->clear();
        
        date_default_timezone_set('Europe/Warsaw');
    }

    /**
     * Set non default service URL
     * 
     * @param string $url
     *            service URL
     */
    public function setURL($url)
    {
        $this->url = $url;
    }

    /**
     * Set application info
     * 
     * @param string $app
     *            app info
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * Check frim activity
     *
     * @param string $nip
     *            NIP number
     * @return true|false
     */
    public function isActive($nip)
    {
        return $this->isActiveExt(Number::NIP, $nip);
    }
    
    /**
     * Check frim activity
     * 
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @return true|false
     */
    public function isActiveExt($type, $number)
    {
        // clear error
        $this->clear();
        
        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }
        
        // prepare url
        $url = ($this->url . '/check/firm/' . $suffix);
        
        // send request
        $res = $this->get($url);
        
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
        
        // parse response
        $doc = simplexml_load_string($res);
        
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
        
        $code = $this->xpath($doc, '/result/error/code/text()');
        
        if (strlen($code) > 0) {
            if ($code == 9) {
                // not active
                $this->clear();
                return false;
            }
            else {
                $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
                return false;
            }
        }
        
        // ok
        return true;
    }
    
    /**
     * Get invoice data for specified NIP number
     *
     * @param string $nip
     *            NIP number
     * @param bool $force
     *            ignored, left for backward compatibility
     * @return InvoiceData|false
     */
    public function getInvoiceData($nip, $force = true)
    {
        return $this->getInvoiceDataExt(Number::NIP, $nip, $force);
    }

    /**
     * Get invoice data for specified number type
     * 
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param bool $force
     *            ignored, left for backward compatibility
     * @return InvoiceData|false
     */
    public function getInvoiceDataExt($type, $number, $force = true)
    {
        // clear error
        $this->clear();
        
        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }
        
        $url = ($this->url . '/get/invoice/' . $suffix);
        
        // send request
        $res = $this->get($url);
        
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
        
        // parse response
        $doc = simplexml_load_string($res);
        
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
        
        $code = $this->xpath($doc, '/result/error/code/text()');
        
        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }
        
        $invoice = new InvoiceData();
        
        $invoice->uid = $this->xpath($doc, '/result/firm/uid/text()');
        $invoice->nip = $this->xpath($doc, '/result/firm/nip/text()');
        
        $invoice->name = $this->xpath($doc, '/result/firm/name/text()');
        $invoice->firstname = $this->xpath($doc, '/result/firm/firstname/text()');
        $invoice->lastname = $this->xpath($doc, '/result/firm/lastname/text()');
        
        $invoice->street = $this->xpath($doc, '/result/firm/street/text()');
        $invoice->streetNumber = $this->xpath($doc, '/result/firm/streetNumber/text()');
        $invoice->houseNumber = $this->xpath($doc, '/result/firm/houseNumber/text()');
        $invoice->city = $this->xpath($doc, '/result/firm/city/text()');
        $invoice->postCode = $this->xpath($doc, '/result/firm/postCode/text()');
        $invoice->postCity = $this->xpath($doc, '/result/firm/postCity/text()');
        
        $invoice->phone = $this->xpath($doc, '/result/firm/phone/text()');
        $invoice->email = $this->xpath($doc, '/result/firm/email/text()');
        $invoice->www = $this->xpath($doc, '/result/firm/www/text()');
        
        return $invoice;
    }
    
    /**
     * Get all data for specified NIP number
     *
     * @param string $nip
     *            NIP number
     * @param bool $force
     *            ignored, left for backward compatibility
     * @return AllData|false
     */
    public function getAllData($nip, $force = true)
    {
        return $this->getAllDataExt(Number::NIP, $nip, $force);
    }

    /**
     * Get all data for specified number type
     * 
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param bool $force
     *            ignored, left for backward compatibility
     * @return AllData|false
     */
    public function getAllDataExt($type, $number, $force = true)
    {
        // clear error
        $this->clear();
        
        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }
        
        $url = ($this->url . '/get/all/' . $suffix);
        
        // send request
        $res = $this->get($url);
        
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
        
        // parse response
        $doc = simplexml_load_string($res);
        
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
        
        $code = $this->xpath($doc, '/result/error/code/text()');
        
        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }
        
        $data = new AllData();
        
        $data->uid = $this->xpath($doc, '/result/firm/uid/text()');
        $data->type = $this->xpath($doc, '/result/firm/type/text()');
        $data->nip = $this->xpath($doc, '/result/firm/nip/text()');
        $data->regon = $this->xpath($doc, '/result/firm/regon/text()');
        
        $data->name = $this->xpath($doc, '/result/firm/name/text()');
        $data->shortname = $this->xpath($doc, '/result/firm/shortname/text()');
        $data->firstname = $this->xpath($doc, '/result/firm/firstname/text()');
        $data->secondname = $this->xpath($doc, '/result/firm/secondname/text()');
        $data->lastname = $this->xpath($doc, '/result/firm/lastname/text()');
        
        $data->street = $this->xpath($doc, '/result/firm/street/text()');
        $data->streetCode = $this->xpath($doc, '/result/firm/streetCode/text()');
        $data->streetNumber = $this->xpath($doc, '/result/firm/streetNumber/text()');
        $data->houseNumber = $this->xpath($doc, '/result/firm/houseNumber/text()');
        $data->city = $this->xpath($doc, '/result/firm/city/text()');
        $data->cityCode = $this->xpath($doc, '/result/firm/cityCode/text()');
        $data->community = $this->xpath($doc, '/result/firm/community/text()');
        $data->communityCode = $this->xpath($doc, '/result/firm/communityCode/text()');
        $data->county = $this->xpath($doc, '/result/firm/county/text()');
        $data->countyCode = $this->xpath($doc, '/result/firm/countyCode/text()');
        $data->state = $this->xpath($doc, '/result/firm/state/text()');
        $data->stateCode = $this->xpath($doc, '/result/firm/stateCode/text()');
        $data->postCode = $this->xpath($doc, '/result/firm/postCode/text()');
        $data->postCity = $this->xpath($doc, '/result/firm/postCity/text()');
        
        $data->phone = $this->xpath($doc, '/result/firm/phone/text()');
        $data->email = $this->xpath($doc, '/result/firm/email/text()');
        $data->www = $this->xpath($doc, '/result/firm/www/text()');
        
        $data->creationDate = $this->xpathDateTime($doc, '/result/firm/creationDate/text()');
        $data->startDate = $this->xpathDateTime($doc, '/result/firm/startDate/text()');
        $data->registrationDate = $this->xpathDateTime($doc, '/result/firm/registrationDate/text()');
        $data->holdDate = $this->xpathDateTime($doc, '/result/firm/holdDate/text()');
        $data->renevalDate = $this->xpathDateTime($doc, '/result/firm/renevalDate/text()');
        $data->lastUpdateDate = $this->xpathDateTime($doc, '/result/firm/lastUpdateDate/text()');
        $data->endDate = $this->xpathDateTime($doc, '/result/firm/endDate/text()');
        
        $data->registryEntityCode = $this->xpath($doc, '/result/firm/registryEntity/code/text()');
        $data->registryEntityName = $this->xpath($doc, '/result/firm/registryEntity/name/text()');
        
        $data->registryCode = $this->xpath($doc, '/result/firm/registry/code/text()');
        $data->registryName = $this->xpath($doc, '/result/firm/registry/name/text()');
        
        $data->recordCreationDate = $this->xpathDateTime($doc, '/result/firm/record/created/text()');
        $data->recordNumber = $this->xpath($doc, '/result/firm/record/number/text()');
        
        $data->basicLegalFormCode = $this->xpath($doc, '/result/firm/basicLegalForm/code/text()');
        $data->basicLegalFormName = $this->xpath($doc, '/result/firm/basicLegalForm/name/text()');
        
        $data->specificLegalFormCode = $this->xpath($doc, '/result/firm/specificLegalForm/code/text()');
        $data->specificLegalFormName = $this->xpath($doc, '/result/firm/specificLegalForm/name/text()');
        
        $data->ownershipFormCode = $this->xpath($doc, '/result/firm/ownershipForm/code/text()');
        $data->ownershipFormName = $this->xpath($doc, '/result/firm/ownershipForm/name/text()');
        
        for ($i = 1;; $i ++) {
            $code = $this->xpath($doc, '/result/firm/PKDs/PKD[' . $i . ']/code/text()');
            
            if (! $code) {
                break;
            }
            
            $descr = $this->xpath($doc, '/result/firm/PKDs/PKD[' . $i . ']/description/text()');
            $pri = $this->xpath($doc, '/result/firm/PKDs/PKD[' . $i . ']/primary/text()');
            
            $pkd = new PKD();
            
            $pkd->code = $code;
            $pkd->description = $descr;
            $pkd->primary = ($pri == 'true' ? true : false);
            
            array_push($data->pkd, $pkd);
        }
        
        return $data;
    }

    /**
     * Get VIES data for specified number
     *
     * @param string $euvat
     *            EU VAT number with 2-letter country prefix
     * @return VIESData|false
     */
    public function getVIESData($euvat)
    {
        // clear error
        $this->clear();
    
        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix(Number::EUVAT, $euvat))) {
            return false;
        }
    
        $url = ($this->url . '/get/vies/' . $suffix);
    
        // send request
        $res = $this->get($url);
    
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
    
        // parse response
        $doc = simplexml_load_string($res);
    
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
    
        $code = $this->xpath($doc, '/result/error/code/text()');
    
        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }
    
        $vies = new VIESData();
    
        $vies->uid = $this->xpath($doc, '/result/vies/uid/text()');
        $vies->countryCode = $this->xpath($doc, '/result/vies/countryCode/text()');
        $vies->vatNumber = $this->xpath($doc, '/result/vies/vatNumber/text()');
        
        $vies->valid = ($this->xpath($doc, '/result/vies/valid/text()') == 'true' ? true : false);
        
        $vies->traderName = $this->xpath($doc, '/result/vies/traderName/text()');
        $vies->traderCompanyType = $this->xpath($doc, '/result/vies/traderCompanyType/text()');
        $vies->traderAddress = $this->xpath($doc, '/result/vies/traderAddress/text()');
        
        $vies->id = $this->xpath($doc, '/result/vies/id/text()');
        $vies->date = $this->xpathDate($doc, '/result/vies/date/text()');
        $vies->source = $this->xpath($doc, '/result/vies/source/text()');

		return $vies;
    }
    
    /**
     * Check if firm is an active VAT payer
     *
     * @param string $nip
     *            NIP number
     * @return VATStatus|false
     */
    public function getVATStatus($nip)
    {
        return $this->getVATStatusExt(Number::NIP, $nip, true);
    }
    
    /**
     * Check if firm is an active VAT payer
     * 
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param bool $direct
     *            ignored, left for backward compatibility
     * @return VATStatus|false
     */
    public function getVATStatusExt($type, $number, $direct = true)
    {
        // clear error
        $this->clear();
    
        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }
    
        $url = ($this->url . '/check/vat/direct/' . $suffix);
    
        // send request
        $res = $this->get($url);
    
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
    
        // parse response
        $doc = simplexml_load_string($res);
    
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
    
        $code = $this->xpath($doc, '/result/error/code/text()');
    
        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }
    
        $vs = new VATStatus();
    
        $vs->uid = $this->xpath($doc, '/result/vat/uid/text()');
        $vs->nip = $this->xpath($doc, '/result/vat/nip/text()');
        $vs->regon = $this->xpath($doc, '/result/vat/regon/text()');
        $vs->name = $this->xpath($doc, '/result/vat/name/text()');
        
        $vs->status = intval($this->xpath($doc, '/result/vat/status/text()'));
        $vs->result = $this->xpath($doc, '/result/vat/result/text()');

        $vs->id = $this->xpath($doc, '/result/vat/id/text()');
        $vs->date = $this->xpathDate($doc, '/result/vat/date/text()');
        $vs->source = $this->xpath($doc, '/result/vat/source/text()');
        
        return $vs;
    }
    
    /**
     * Check if firm owns bank account number
     *
     * @param string $nip
     *            NIP number
     * @param string $iban
     *            bank account IBAN (for polish numbers PL prefix may be omitted)
     * @param string $date
     *            date in format 'yyyy-mm-dd' (null - current day)
     * @return IBANStatus|false
     */
    public function getIBANStatus($nip, $iban, $date = null)
    {
        return $this->getIBANStatusExt(Number::NIP, $nip, $iban, $date);
    }
    
    /**
     * Check if firm owns bank account number
     * 
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param string $iban
     *            bank account IBAN (for polish numbers PL prefix may be omitted)
     * @param string $date
     *            date in format 'yyyy-mm-dd' (null - current day)
     * @return IBANStatus|false
     */
    public function getIBANStatusExt($type, $number, $iban, $date = null)
    {
        // clear error
        $this->clear();
    
        // validate number and construct path
		if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }
    
		if (! IBAN::isValid($iban)) {
			$iban = ('PL' . $iban);
			
			if (! IBAN::isValid($iban)) {
				$this->set(Error::CLI_IBAN);
				return false;
			}
		}
		
		if (! $date) {
			$date = date('Y-m-d');
		}

		$url = ($this->url . '/check/iban/' . $suffix . '/' . IBAN::normalize($iban) . '/'
			. date('Y-m-d', strtotime($date)));
    
        // send request
        $res = $this->get($url);
    
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
    
        // parse response
        $doc = simplexml_load_string($res);
    
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
    
        $code = $this->xpath($doc, '/result/error/code/text()');
    
        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }
    
        $is = new IBANStatus();
    
        $is->uid = $this->xpath($doc, '/result/iban/uid/text()');
        $is->nip = $this->xpath($doc, '/result/iban/nip/text()');
        $is->regon = $this->xpath($doc, '/result/iban/regon/text()');
        $is->iban = $this->xpath($doc, '/result/iban/iban/text()');
        
		$is->valid = ($this->xpath($doc, '/result/iban/valid/text()') == 'true' ? true : false);

		$is->id = $this->xpath($doc, '/result/iban/id/text()');
        $is->date = $this->xpathDate($doc, '/result/iban/date/text()');
        $is->source = $this->xpath($doc, '/result/iban/source/text()');
        
        return $is;
    }

    /**
     * Check bank account status and VAT status using whitelist file
     *
     * @param string $nip
     *            NIP number
     * @param string $iban
     *            bank account IBAN (for polish numbers PL prefix may be omitted)
     * @param string $date
     *            date in format 'yyyy-mm-dd' (null - current day)
     * @return WLStatus|false
     */
    public function getWhitelistStatus($nip, $iban, $date = null)
    {
        return $this->getWhitelistStatusExt(Number::NIP, $nip, $iban, $date);
    }

    /**
     * Check bank account status and VAT status using whitelist file
     *
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param string $iban
     *            bank account IBAN (for polish numbers PL prefix may be omitted)
     * @param string $date
     *            date in format 'yyyy-mm-dd' (null - current day)
     * @return WLStatus|false
     */
    public function getWhitelistStatusExt($type, $number, $iban, $date = null)
    {
        // clear error
        $this->clear();

        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }

        if (! IBAN::isValid($iban)) {
            $iban = ('PL' . $iban);

            if (! IBAN::isValid($iban)) {
                $this->set(Error::CLI_IBAN);
                return false;
            }
        }

        if (! $date) {
            $date = date('Y-m-d');
        }

        $url = ($this->url . '/check/whitelist/' . $suffix . '/' . IBAN::normalize($iban) . '/'
            . date('Y-m-d', strtotime($date)));

        // send request
        $res = $this->get($url);

        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }

        // parse response
        $doc = simplexml_load_string($res);

        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }

        $code = $this->xpath($doc, '/result/error/code/text()');

        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }

        $wl = new WLStatus();

        $wl->uid = $this->xpath($doc, '/result/whitelist/uid/text()');

        $wl->nip = $this->xpath($doc, '/result/whitelist/nip/text()');
        $wl->iban = $this->xpath($doc, '/result/whitelist/iban/text()');

        $wl->valid = ($this->xpath($doc, '/result/whitelist/valid/text()') == 'true' ? true : false);
        $wl->virtual = ($this->xpath($doc, '/result/whitelist/virtual/text()') == 'true' ? true : false);

        $wl->vatStatus = intval($this->xpath($doc, '/result/whitelist/vatStatus/text()'));
        $wl->vatResult = $this->xpath($doc, '/result/whitelist/vatResult/text()');

        $wl->hashIndex = intval($this->xpath($doc, '/result/whitelist/hashIndex/text()'));
        $wl->maskIndex = intval($this->xpath($doc, '/result/whitelist/maskIndex/text()'));
        $wl->date = $this->xpathDate($doc, '/result/whitelist/date/text()');
        $wl->source = $this->xpath($doc, '/result/whitelist/source/text()');

        return $wl;
    }

    /**
     * Search data in VAT registry
     *
     * @param string $nip
     *            NIP number
     * @param string $date
     *            date in format 'yyyy-mm-dd' (null - current day)
     * @return SearchResult|false
     */
    public function searchVATRegistry($nip, $date = null)
    {
        return $this->searchVATRegistryExt(Number::NIP, $nip, $date);
    }

    /**
     * Search data in VAT registry
     *
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param string $date
     *            date in format 'yyyy-mm-dd' (null - current day)
     * @return SearchResult|false
     */
    public function searchVATRegistryExt($type, $number, $date = null)
    {
        // clear error
        $this->clear();

        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }

        if (! $date) {
            $date = date('Y-m-d');
        }

        $url = ($this->url . '/search/vat/' . $suffix . '/' . date('Y-m-d', strtotime($date)));

        // send request
        $res = $this->get($url);

        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }

        // parse response
        $doc = simplexml_load_string($res);

        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }

        $code = $this->xpath($doc, '/result/error/code/text()');

        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }

        $sr = new SearchResult();

        $sr->uid = $this->xpath($doc, '/result/search/uid/text()');

        for ($i = 1; ; $i++) {
            $nip = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/nip/text()');

            if (! $nip) {
                break;
            }

            $ve = new VATEntity();

            $ve->name = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/name/text()');
            $ve->nip = $nip;
            $ve->regon = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/regon/text()');
            $ve->krs = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/krs/text()');
            $ve->residenceAddress = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/residenceAddress/text()');
            $ve->workingAddress = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/workingAddress/text()');
            $ve->vatStatus = intval($this->xpath($doc, '/result/search/entities/entity[' . $i . ']/vat/status/text()'));
            $ve->vatResult = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/vat/result/text()');

            $this->xpathVATPerson($doc, '/result/search/entities/entity[' . $i . ']/representatives', $ve->representatives);
            $this->xpathVATPerson($doc, '/result/search/entities/entity[' . $i . ']/authorizedClerks', $ve->authorizedClerks);
            $this->xpathVATPerson($doc, '/result/search/entities/entity[' . $i . ']/partners', $ve->partners);

            for ($k = 1; ; $k++) {
                $iban = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/ibans/iban[' . $k . ']/text()');

                if (! $iban) {
                    break;
                }

                array_push($ve->ibans, $iban);
            }

            $ve->hasVirtualAccounts = ($this->xpath($doc, '/result/search/entities/entity[' . $i . ']/hasVirtualAccounts/text()') == 'true' ? true : false);
            $ve->registrationLegalDate = $this->xpathDate($doc, '/result/search/entities/entity[' . $i . ']/registrationLegalDate/text()');
            $ve->registrationDenialDate = $this->xpathDate($doc, '/result/search/entities/entity[' . $i . ']/registrationDenialDate/text()');
            $ve->registrationDenialBasis = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/registrationDenialBasis/text()');
            $ve->restorationDate = $this->xpathDate($doc, '/result/search/entities/entity[' . $i . ']/restorationDate/text()');
            $ve->restorationBasis = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/restorationBasis/text()');
            $ve->removalDate = $this->xpathDate($doc, '/result/search/entities/entity[' . $i . ']/removalDate/text()');
            $ve->removalBasis = $this->xpath($doc, '/result/search/entities/entity[' . $i . ']/removalBasis/text()');

            array_push($sr->results, $ve);
        }

        $sr->id = $this->xpath($doc, '/result/search/id/text()');
        $sr->date = $this->xpathDate($doc, '/result/search/date/text()');
        $sr->source = $this->xpath($doc, '/result/search/source/text()');

        return $sr;
    }

    /**
     * Get all data from KRS registry
     *
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @return \NIP24\Model\KRSData|false
     */
    public function getKRSData($type, $number)
    {
        return $this->getKRSSection($type, $number, 0);
    }

    /**
     * Get data of one specific section from KRS registry
     *
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @param int $section
     *            number of section to get [1-6]
     * @return \NIP24\Model\KRSData|false
     */
    public function getKRSSection($type, $number, $section)
    {
        // clear error
        $this->clear();

        // validate number and construct path
        if (! ($suffix = $this->getPathSuffix($type, $number))) {
            return false;
        }

        if ($section < 0 || $section > 6) {
            $this->set(Error::CLI_INPUT);
            return false;
        }

        $url = ($this->url . '/get/krs/current/' . $suffix . '/' . $section);

        // send request
        $res = $this->get($url, 'application/json');

        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }

        // parse response
        $doc = json_decode($res);

        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }

        if (isset($doc->error) && isset($doc->error->code)) {
            $this->set(intval($doc->error->code), $doc->error->description);
            return false;
        }

        // parse response
        $kd = ObjectSerializer::deserialize($doc->krs, '\NIP24\Model\KRSData');

        if ($kd == null) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }

        return $kd;
    }

    /**
     * Get current account status
     * 
     * @return AccountStatus|false
     */
    public function getAccountStatus()
    {
        // clear error
        $this->clear();
    
        // construct path
        $url = ($this->url . '/check/account/status');
    
        // send request
        $res = $this->get($url);
    
        if (! $res) {
            $this->set(Error::CLI_CONNECT);
            return false;
        }
    
        // parse response
        $doc = simplexml_load_string($res);
    
        if (! $doc) {
            $this->set(Error::CLI_RESPONSE);
            return false;
        }
    
        $code = $this->xpath($doc, '/result/error/code/text()');
    
        if (strlen($code) > 0) {
            $this->set(intval($code), $this->xpath($doc, '/result/error/description/text()'));
            return false;
        }
    
        $as = new AccountStatus();
    
        $as->uid = $this->xpath($doc, '/result/account/uid/text()');
        $as->type = $this->xpath($doc, '/result/account/type/text()');
        $as->valid_to = $this->xpathDateTime($doc, '/result/account/validTo/text()');
		$as->billing_plan_name = $this->xpath($doc, '/result/account/billingPlan/name/text()');
		
		$as->subscription_price = floatval($this->xpath($doc, '/result/account/billingPlan/subscriptionPrice/text()'));
		$as->item_price = floatval($this->xpath($doc, '/result/account/billingPlan/itemPrice/text()'));
		$as->item_price_status = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceCheckStatus/text()'));
		$as->item_price_invoice = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceInvoiceData/text()'));
		$as->item_price_all = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceAllData/text()'));
		$as->item_price_iban = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceIBANStatus/text()'));
        $as->item_price_whitelist = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceWLStatus/text()'));
        $as->item_price_search_vat = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceSearchVAT/text()'));
        $as->item_price_krs_data = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceKRSData/text()'));
        $as->item_price_krs_section = floatval($this->xpath($doc, '/result/account/billingPlan/itemPriceKRSSection/text()'));
		
		$as->limit = intval($this->xpath($doc, '/result/account/billingPlan/limit/text()'));
		$as->request_delay = intval($this->xpath($doc, '/result/account/billingPlan/requestDelay/text()'));
		$as->domain_limit = intval($this->xpath($doc, '/result/account/billingPlan/domainLimit/text()'));
		
		$as->overplan_allowed = ($this->xpath($doc, '/result/account/billingPlan/overplanAllowed/text()') == 'true' ? true : false);
		$as->teryt_codes = ($this->xpath($doc, '/result/account/billingPlan/terytCodes/text()') == 'true' ? true : false);
		$as->excel_addin = ($this->xpath($doc, '/result/account/billingPlan/excelAddin/text()') == 'true' ? true : false);
		$as->jpk_vat = ($this->xpath($doc, '/result/account/billingPlan/jpkVat/text()') == 'true' ? true : false);
        $as->cli = ($this->xpath($doc, '/result/account/billingPlan/cli/text()') == 'true' ? true : false);
		$as->stats = ($this->xpath($doc, '/result/account/billingPlan/stats/text()') == 'true' ? true : false);
		$as->nip_monitor = ($this->xpath($doc, '/result/account/billingPlan/nipMonitor/text()') == 'true' ? true : false);
		
		$as->search_by_nip = ($this->xpath($doc, '/result/account/billingPlan/searchByNip/text()') == 'true' ? true : false);
		$as->search_by_regon = ($this->xpath($doc, '/result/account/billingPlan/searchByRegon/text()') == 'true' ? true : false);
		$as->search_by_krs = ($this->xpath($doc, '/result/account/billingPlan/searchByKrs/text()') == 'true' ? true : false);
		
		$as->func_is_active = ($this->xpath($doc, '/result/account/billingPlan/funcIsActive/text()') == 'true' ? true : false);
		$as->func_get_invoice_data = ($this->xpath($doc, '/result/account/billingPlan/funcGetInvoiceData/text()') == 'true' ? true : false);
		$as->func_get_all_data = ($this->xpath($doc, '/result/account/billingPlan/funcGetAllData/text()') == 'true' ? true : false);
		$as->func_get_vies_data =($this->xpath($doc, '/result/account/billingPlan/funcGetVIESData/text()') == 'true' ? true : false);
		$as->func_get_vat_status = ($this->xpath($doc, '/result/account/billingPlan/funcGetVATStatus/text()') == 'true' ? true : false);
		$as->func_get_iban_status = ($this->xpath($doc, '/result/account/billingPlan/funcGetIBANStatus/text()') == 'true' ? true : false);
        $as->func_get_whitelist_status = ($this->xpath($doc, '/result/account/billingPlan/funcGetWLStatus/text()') == 'true' ? true : false);
        $as->func_search_vat = ($this->xpath($doc, '/result/account/billingPlan/funcSearchVAT/text()') == 'true' ? true : false);
        $as->func_get_krs_data = ($this->xpath($doc, '/result/account/billingPlan/funcGetKRSData/text()') == 'true' ? true : false);
        $as->func_get_krs_section = ($this->xpath($doc, '/result/account/billingPlan/funcGetKRSSection/text()') == 'true' ? true : false);
		
		$as->invoice_data_count = intval($this->xpath($doc, '/result/account/requests/invoiceData/text()'));
		$as->all_data_count = intval($this->xpath($doc, '/result/account/requests/allData/text()'));
		$as->firm_status_count = intval($this->xpath($doc, '/result/account/requests/firmStatus/text()'));
		$as->vat_status_count = intval($this->xpath($doc, '/result/account/requests/vatStatus/text()'));
		$as->vies_status_count = intval($this->xpath($doc, '/result/account/requests/viesStatus/text()'));
		$as->iban_status_count = intval($this->xpath($doc, '/result/account/requests/ibanStatus/text()'));
        $as->whitelist_status_count = intval($this->xpath($doc, '/result/account/requests/wlStatus/text()'));
        $as->search_vat_count = intval($this->xpath($doc, '/result/account/requests/searchVAT/text()'));
        $as->krs_data_count = intval($this->xpath($doc, '/result/account/requests/krsData/text()'));
        $as->krs_section_count = intval($this->xpath($doc, '/result/account/requests/krsSection/text()'));
		$as->total_count = intval($this->xpath($doc, '/result/account/requests/total/text()'));
        
        return $as;
    }

	/**
     * Get last error code
     * 
     * @return int error code
     */
    public function getLastErrorCode()
    {
        return $this->errcode;
    }

    /**
     * Get last error message
     *
     * @return string error message
     */
    public function getLastError()
    {
        return $this->err;
    }

    /**
     * Clear error
     */
    private function clear()
    {
        $this->errcode = 0;
        $this->err = '';
    }

    /**
     * Set error details
     *
     * @param int $code error code
     * @param string $err error message
     */
    private function set($code, $err = null)
    {
        $this->errcode = $code;
        $this->err = (empty($err) ? Error::message($code) : $err);
    }

    /**
     * Prepare authorization header content
     * 
     * @param string $method
     *            HTTP method
     * @param string $url
     *            target URL
     * @return string|false
     */
    private function auth($method, $url)
    {
        // parse url
        $u = parse_url($url);
        
        if (! array_key_exists('port', $u)) {
            $u['port'] = ($u['scheme'] == 'https' ? '443' : '80');
        }
        
        // prepare auth header
        $nonce = bin2hex(openssl_random_pseudo_bytes(4));
        $ts = time();
        
        $str = "" . $ts . "\n"
            . $nonce . "\n"
            . $method . "\n"
            . $u['path'] . "\n"
            . $u['host'] . "\n"
            . $u['port'] . "\n"
            . "\n";
        
        $mac = base64_encode(hash_hmac('sha256', $str, $this->key, true));
        
        if (! $mac) {
            return false;
        }
        
        return 'Authorization: MAC id="' . $this->id . '", ts="' . $ts . '", nonce="' . $nonce . '", mac="' . $mac . '"';
    }

    /**
     * Prepare user agent information header content
     * 
     * @return string
     */
    private function userAgent()
    {
        return 'User-Agent: ' . (! empty($this->app) ? $this->app . ' ' : '') . 'NIP24Client/' . self::VERSION
            . ' PHP/' . phpversion();
    }

    /**
     * Set some common CURL options
     * 
     * @param resource $curl
     */
    private function setCurlOpt($curl)
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
            // curl on a windows does not know where to look for certificates
            // use local info downloaded from https://curl.haxx.se/docs/caextract.html
            curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cacert.pem');
        }
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    }

    /**
     * Get result of HTTP GET request
     * 
     * @param string $url
     *            target URL
     * @param string $mimetype
     *            requested response MIME type (application/xml or application/json)
     * @return string|false
     */
    private function get($url, $mimetype = 'application/xml')
    {
        // auth
        $auth = $this->auth('GET', $url);
        
        if (! $auth) {
            return false;
        }
        
        // headers
        $headers = array(
            'Accept: ' . $mimetype,
            $auth,
            $this->userAgent()
        );
        
        // send request
        $curl = curl_init();
        
        if (! $curl) {
            return false;
        }
        
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $this->setCurlOpt($curl);
        
        $res = curl_exec($curl);
        
        if (! $res) {
            return false;
        }
        
        curl_close($curl);
        
        return $res;
    }

    /**
     * Get element content as text
     * 
     * @param \SimpleXMLElement $doc
     *            XML document
     * @param string $path
     *            xpath string
     * @return string
     */
    private function xpath($doc, $path)
    {
        $a = $doc->xpath($path);
        
        if (! $a) {
            return '';
        }
        
        if (count($a) != 1) {
            return '';
        }
        
        return trim($a[0]);
    }

    /**
     * Get element content as date in format yyyy-mm-dd
     * 
     * @param \SimpleXMLElement $doc
     *            XML document
     * @param string $path
     *            xpath string
     * @return string output date
     */
    private function xpathDate($doc, $path)
    {
        $val = $this->xpath($doc, $path);
        
        if (empty($val)) {
            return '';
        }
        
        return date('Y-m-d', strtotime($val));
    }

    /**
     * Get element content as date and time in format yyyy-mm-dd hh:mm:ss
     *
     * @param \SimpleXMLElement $doc
     *            XML document
     * @param string $path
     *            xpath string
     * @return string output date time
     */
    private function xpathDateTime($doc, $path)
    {
        $val = $this->xpath($doc, $path);

        if (empty($val)) {
            return '';
        }

        return date('Y-m-d H:i:s', strtotime($val));
    }

    /**
     * Get element content as VAT person object
     *
     * @param \SimpleXMLElement $doc XML document
     * @param string $path xpath string
     * @param array $a VAT persons array reference
     */
    private function xpathVATPerson($doc, $path, &$a)
    {
        for ($i = 1; ; $i++) {
            $nip = $this->xpath($doc, $path . '/person[' . $i . ']/nip/text()');

            if (! $nip) {
                break;
            }

            $vp = new VATPerson();

            $vp->nip = NIP::normalize($nip);
            $vp->companyName = $this->xpath($doc, $path . '/person[' . $i . ']/companyName/text()');
            $vp->firstName = $this->xpath($doc, $path . '/person[' . $i . ']/firstName/text()');
            $vp->lastName = $this->xpath($doc, $path . '/person[' . $i . ']/lastName/text()');

            array_push($a, $vp);
        }
    }

    /**
     * Get path suffix
     *
     * @param int $type
     *            search number type as Number::xxx value
     * @param string $number
     *            search number value
     * @return string|false
     */
    private function getPathSuffix($type, $number)
    {
        if ($type == Number::NIP) {
            if (! NIP::isValid($number)) {
                $this->set(Error::CLI_NIP);
                return false;
            }
        
            $path = 'nip/' . NIP::normalize($number);
        } else if ($type == Number::REGON) {
            if (! REGON::isValid($number)) {
                $this->set(Error::CLI_REGON);
                return false;
            }
        
            $path = 'regon/' . REGON::normalize($number);
        } else if ($type == Number::KRS) {
            if (! KRS::isValid($number)) {
                $this->set(Error::CLI_KRS);
                return false;
            }
        
            $path = 'krs/' . KRS::normalize($number);
        } else if ($type == Number::EUVAT) {
            if (! EUVAT::isValid($number)) {
                $this->set(Error::CLI_EUVAT);
                return false;
            }
        
            $path = 'euvat/' . EUVAT::normalize($number);
        } else if ($type == Number::IBAN) {
            if (! IBAN::isValid($number)) {
                $number = 'PL' . $number;

                if (! IBAN::isValid($number)) {
                    $this->set(Error::CLI_IBAN);
                    return false;
                }
            }

            $path = 'iban/' . IBAN::normalize($number);
        } else {
            $this->set(Error::CLI_NUMBER);
            return false;
        }
        
        return $path;
    }
}

/* EOF */
