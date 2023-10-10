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
 * NIP24 errors
 */
class Error
{
	const NIP_EMPTY				= 1;
	const NIP_UNKNOWN			= 2;
	const GUS_LOGIN				= 3;
	const GUS_CAPTCHA			= 4;
	const GUS_SYNC				= 5;
	const NIP_UPDATE			= 6;
	const NIP_BAD				= 7;
	const CONTENT_SYNTAX		= 8;
	const NIP_NOT_ACTIVE		= 9;
	const INVALID_PATH			= 10;
	const EXCEPTION				= 11;
	const NO_PERMISSION			= 12;
	const GEN_INVOICES			= 13;
	const GEN_SPEC_INV			= 14;
	const SEND_INVOICE			= 15;
	const PREMIUM_FEATURE		= 16;
	const SEND_ANNOUNCEMENT		= 17;
	const INVOICE_PAYMENT		= 18;
	const REGON_BAD				= 19;
	const SEARCH_KEY_EMPTY		= 20;
	const KRS_BAD				= 21;
	const EUVAT_BAD				= 22;
	const VIES_SYNC				= 23;
	const CEIDG_SYNC			= 24;
	const RANDOM_NUMBER			= 25;
	const PLAN_FEATURE			= 26;
	const SEARCH_TYPE			= 27;
	const PPUMF_SYNC			= 28;
	const PPUMF_DIRECT			= 29;
	const NIP_FEATURE			= 30;
	const REGON_FEATURE			= 31;
	const KRS_FEATURE			= 32;
	const TEST_MODE				= 33;
	const ACTIVITY_CHECK		= 34;
	const ACCESS_DENIED			= 35;
	const MAINTENANCE			= 36;
	const BILLING_PLANS			= 37;
	const DOCUMENT_PDF			= 38;
	const EXPORT_PDF			= 39;
	const RANDOM_TYPE			= 40;
	const LEGAL_FORM			= 41;
	const GROUP_CHECKS			= 42;
	const CLIENT_COUNTERS		= 43;
	const URE_SYNC				= 44;
	const URE_DATA				= 45;
	const DKN_BAD				= 46;
	const SEND_REMAINDER		= 47;
	const EXPORT_JPK			= 48;
	const GEN_ORDER_INV			= 49;
	const SEND_EXPIRATION		= 50;
	const IBAN_SYNC				= 51;
	const ORDER_CANCEL          = 52;
	const WHITELIST_CHECK       = 53;
	const AUTH_TIMESTAMP        = 54;
	const AUTH_MAC              = 55;
	const IBAN_BAD              = 56;

	const DB_AUTH_IP			= 101;
	const DB_AUTH_KEY_STATUS	= 102;
	const DB_AUTH_KEY_VALUE		= 103;
	const DB_AUTH_OVER_PLAN		= 104;
	const DB_CLIENT_LOCKED		= 105;
	const DB_CLIENT_TYPE		= 106;
	const DB_CLIENT_NOT_PAID	= 107;
	const DB_AUTH_KEYID_VALUE	= 108;

	const CLI_CONNECT           = 201;
	const CLI_RESPONSE          = 202;
	const CLI_NUMBER            = 203;
	const CLI_NIP               = 204;
	const CLI_REGON             = 205;
	const CLI_KRS               = 206;
	const CLI_EUVAT             = 207;
	const CLI_IBAN              = 208;
	const CLI_EXCEPTION         = 209;
	const CLI_DATEFORMAT        = 210;
	const CLI_INPUT             = 211;

	private static $codes = array(
		self::CLI_CONNECT     => 'Nie udało się nawiązać połączenia z serwisem NIP24',
        self::CLI_RESPONSE    => 'Odpowiedź serwisu NIP24 ma nieprawidłowy format',
        self::CLI_NUMBER      => 'Nieprawidłowy typ numeru',
        self::CLI_NIP         => 'Numer NIP jest nieprawidłowy',
        self::CLI_REGON       => 'Numer REGON jest nieprawidłowy',
        self::CLI_KRS         => 'Numer KRS jest nieprawidłowy',
        self::CLI_EUVAT       => 'Numer EU VAT ID jest nieprawidłowy',
        self::CLI_IBAN        => 'Numer IBAN jest nieprawidłowy',
		self::CLI_EXCEPTION   => 'Funkcja wygenerowała wyjątek',
		self::CLI_DATEFORMAT  => 'Podana data ma nieprawidłowy format',
		self::CLI_INPUT       => 'Nieprawidłowy parametr wejściowy funkcji'
    );

    /**
     * Get error message
     * @param int $code error code
     * @return string error message
     */
	public static function message($code)
	{
	    if ($code < self::CLI_CONNECT || $code > self::CLI_INPUT) {
	        return null;
        }

		return self::$codes[$code];
	}
}

/* EOF */
