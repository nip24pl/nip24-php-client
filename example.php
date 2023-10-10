<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>NIP24 Client - Example</title>
	</head>

	<body>
		<?php
			// enable debug information
			ini_set('display_errors', 1);
			error_reporting(E_ALL);
			
			// nip24 api
			require_once 'NIP24/NIP24Client.php';
			
			\NIP24\NIP24Client::registerAutoloader();
			
			// Utworzenie obiektu klienta usługi serwisu produkcyjnego
			// id – ciąg znaków reprezentujący identyfikator klucza API
			// key – ciąg znaków reprezentujący klucz API
			// $nip24 = new \NIP24\NIP24Client('id', 'key');
			
			// Utworzenie obiektu klienta usługi serwisu testowego
			$nip24 = new \NIP24\NIP24Client();
			
			$nip = '7171642051';
			$nip_eu = 'PL' . $nip;
			$account_number = '49154000046458439719826658';
            $krs = '0000030897';

			// Sprawdzenie stanu konta
			$account = $nip24->getAccountStatus();

			if ($account) {
				echo '<pre>' . print_r($account, true) . '</pre>';
			}
			else {
				echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			}

			// Sprawdzenie statusu fimy
			$active = $nip24->isActiveExt(\NIP24\Number::NIP, $nip);
			
			if ($active) {
				echo '<p>Firma prowadzi aktywną działalność</p>';
			}
			else {
			    if (!$nip24->getLastError()) {
				    echo '<p>Firma zawiesiła lub zakończyła działalność</p>';
			    }
			    else {
                    echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			    }
			}
			
			// Sprawdzenie statusu firmy w rejestrze VAT
			$vat = $nip24->getVATStatusExt(\NIP24\Number::NIP, $nip);
			
			if ($vat) {
                echo '<pre>' . print_r($vat, true) . '</pre>';
			}
			else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			}
				
			// Wywołanie metody zwracającej dane do faktury
			$invoice = $nip24->getInvoiceDataExt(\NIP24\Number::NIP, $nip);
			
			if ($invoice) {
                echo '<pre>' . print_r($invoice, true) . '</pre>';
			}
			else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			}
			
			// Wywołanie metody zwracającej szczegółowe dane firmy
			$all = $nip24->getAllDataExt(\NIP24\Number::NIP, $nip);
			
			if ($all) {
				echo '<pre>' . print_r($all, true) . '</pre>';
			}
			else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			}
			
			// Wywołanie metody zwracającej dane z systemu VIES
			$vies = $nip24->getVIESData($nip_eu);
				
			if ($vies) {
			    echo '<pre>' . print_r($vies, true) . '</pre>';
			}
			else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			}

			// Wywołanie metody zwracającej informacje o rachunku bankowym
			$iban = $nip24->getIBANStatusExt(\NIP24\Number::NIP, $nip, $account_number);
				
			if ($iban) {
			    echo '<pre>' . print_r($iban, true) . '</pre>';
			}
			else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
			}

            // Wywołanie metody sprawdzającej status podmiotu na białej liście podatników VAT
            $whitelist = $nip24->getWhitelistStatusExt(\NIP24\Number::NIP, $nip, $account_number);

            if ($whitelist) {
                echo '<pre>' . print_r($whitelist, true) . '</pre>';
            }
            else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
            }

            // Wywołanie metody wyszukującej dane w rejestrze VAT
            $result = $nip24->searchVATRegistryExt(\NIP24\Number::NIP, $nip);

            if ($result) {
                echo '<pre>' . print_r($result, true) . '</pre>';
            }
            else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
            }

            // Wywołanie metody pobierającej pełne dane z KRS
            $krs_data = $nip24->getKRSData(\NIP24\Number::KRS, $krs);

            if ($krs_data) {
                echo '<pre>' . print_r($krs_data, true) . '</pre>';
            }
            else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
            }

            // Wywołanie metody pobierającej dane z KRS (tylko dział 1)
            $krs_section = $nip24->getKRSSection(\NIP24\Number::KRS, $krs, 1);

            if ($krs_section) {
                echo '<pre>' . print_r($krs_section, true) . '</pre>';
            }
            else {
                echo '<p>Błąd: ' . $nip24->getLastError() . ' (kod: ' . $nip24->getLastErrorCode() . ')</p>';
            }
		?>
	</body>
</html>
