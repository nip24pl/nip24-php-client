<?php
/**
 * Copyright 2015-2023 NETCAT (www.netcat.pl)
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
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
 * Current account status information
 */
class AccountStatus
{
    public $uid;

    public $type;

    public $valid_to;

    public $billing_plan_name;

    public $subscription_price;

    public $item_price;

    public $item_price_status;

    public $item_price_invoice;

    public $item_price_all;
	
	public $item_price_iban;

    public $item_price_whitelist;

    public $item_price_search_vat;

    public $item_price_krs_data;

    public $item_price_krs_section;

    public $limit;

    public $request_delay;

    public $domain_limit;

    public $overplan_allowed;

    public $teryt_codes;

    public $excel_addin;
	
	public $jpk_vat;

    public $cli;

    public $stats;

    public $nip_monitor;

    public $search_by_nip;

    public $search_by_regon;

    public $search_by_krs;

    public $func_is_active;

    public $func_get_invoice_data;

    public $func_get_all_data;

    public $func_get_vies_data;

    public $func_get_vat_status;
	
	public $func_get_iban_status;

    public $func_get_whitelist_status;

    public $func_search_vat;

    public $func_get_krs_data;

    public $func_get_krs_section;

    public $invoice_data_count;

    public $all_data_count;

    public $firm_status_count;

    public $vat_status_count;

    public $vies_status_count;
	
	public $iban_status_count;

	public $whitelist_status_count;

	public $search_vat_count;

    public $krs_data_count;

    public $krs_section_count;

    public $total_count;

    /**
     * Get object data as string
     * @return string
     */
    public function __toString()
    {
        return 'AccountStatus: [uid = ' . $this->uid
            . ', type = ' . $this->type
            . ', validTo = ' . $this->valid_to
            . ', billingPlanName = ' . $this->billing_plan_name

            . ', subscriptionPrice = ' . $this->subscription_price
            . ', itemPrice = ' . $this->item_price
            . ', itemPriceStatus = ' . $this->item_price_status
            . ', itemPriceInvoice = ' . $this->item_price_invoice
            . ', itemPriceAll = ' . $this->item_price_all
            . ', itemPriceIBAN = ' . $this->item_price_iban
            . ', itemPriceWhitelist = ' . $this->item_price_whitelist
            . ', itemPriceSearchVAT = ' . $this->item_price_search_vat
            . ', itemPriceKRSData = ' . $this->item_price_krs_data
            . ', itemPriceKRSSection = ' . $this->item_price_krs_section

            . ', limit = ' . $this->limit
            . ', requestDelay = ' . $this->request_delay
            . ', domainLimit = ' . $this->domain_limit

            . ', overPlanAllowed = ' . $this->overplan_allowed
            . ', terytCodes = ' . $this->teryt_codes
            . ', excelAddIn = ' . $this->excel_addin
            . ', jpkVat = ' . $this->jpk_vat
            . ', cli = ' . $this->cli
            . ', stats = ' . $this->stats
            . ', NIPMonitor = ' . $this->nip_monitor

            . ', searchByNIP = ' . $this->search_by_nip
            . ', searchByREGON = ' . $this->search_by_regon
            . ', searchByKRS = ' . $this->search_by_krs

            . ', funcIsActive = ' . $this->func_is_active
            . ', funcGetInvoiceData = ' . $this->func_get_invoice_data
            . ', funcGetAllData = ' . $this->func_get_all_data
            . ', funcGetVIESData = ' . $this->func_get_vies_data
            . ', funcGetVATStatus = ' . $this->func_get_vat_status
            . ', funcGetIBANStatus = ' . $this->func_get_iban_status
            . ', funcGetWhitelistStatus = ' . $this->func_get_whitelist_status
            . ', funcSearchVAT = ' . $this->func_search_vat
            . ', funcGetKRSData = ' . $this->func_get_krs_data
            . ', funcGetKRSSection = ' . $this->func_get_krs_section

            . ', invoiceDataCount = ' . $this->invoice_data_count
            . ', allDataCount = ' . $this->all_data_count
            . ', firmStatusCount = ' . $this->firm_status_count
            . ', VATStatusCount = ' . $this->vat_status_count
            . ', VIESStatusCount = ' . $this->vies_status_count
            . ', IBANStatusCount = ' . $this->iban_status_count
            . ', whitelistStatusCount = ' . $this->whitelist_status_count
            . ', searchVATCount = ' . $this->search_vat_count
            . ', KRSDataCount = ' . $this->krs_data_count
            . ', KRSSectionCount = ' . $this->krs_section_count
            . ', totalCount = ' . $this->total_count
            . ']';
    }
}

/* EOF */
