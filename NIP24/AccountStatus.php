<?php
/**
 * Copyright 2015-2019 NETCAT (www.netcat.pl)
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
 * @copyright 2015-2019 NETCAT (www.netcat.pl)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace NIP24;

/**
 * Current account status information
 */
class AccountStatus
{
    public $uid;

    public $billing_plan_name;

    public $subscription_price;

    public $item_price;

    public $item_price_status;

    public $item_price_invoice;

    public $item_price_all;
	
	public $item_price_iban;

    public $limit;

    public $request_delay;

    public $domain_limit;

    public $overplan_allowed;

    public $teryt_codes;

    public $excel_addin;
	
	public $jpk_vat;

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

    public $invoice_data_count;

    public $all_data_count;

    public $firm_status_count;

    public $vat_status_count;

    public $vies_status_count;
	
	public $iban_status_count;

    public $total_count;
}

/* EOF */
