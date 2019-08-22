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
			$iban = '92114020040000340203362212';

			// Sprawdzenie stanu konta
			$account = $nip24->getAccountStatus();

			if ($account) {
				echo '<pre>' . print_r($account, true) . '</pre>';
			}
			else {
				echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
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
			        echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			    }
			}
			
			// Sprawdzenie statusu firmy w rejestrze VAT
			$vat = $nip24->getVATStatusExt(\NIP24\Number::NIP, $nip, true);
			
			if ($vat) {
			    echo '<p>NIP: ' . $vat->nip . '</p>';
			    echo '<p>REGON: ' . $vat->regon . '</p>';
			    echo '<p>Nazwa firmy: ' . $vat->name . '</p>';
			    echo '<p>Status: ' . $vat->status . '</p>';
			    echo '<p>Wynik: ' . $vat->result . '</p>';
			    echo '<p>Data sprawdzenia: ' . $vat->date . '</p>';
			    echo '<p>Źródło: ' . $vat->source . '</p>';
			}
			else {
			    echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			}
				
			// Wywołanie metody zwracającej dane do faktury
			$invoice = $nip24->getInvoiceDataExt(\NIP24\Number::NIP, $nip, false);
			
			if ($invoice) {
				echo '<p>Nazwa: ' . $invoice->name . '</p>';
				echo '<p>Imię i nazwisko: ' . $invoice->firstname . ' ' . $invoice->lastname . '</p>';
				echo '<p>Adres: ' . $invoice->postCode . ' ' . $invoice->postCity . ' ' . $invoice->street
					. ' ' . $invoice->streetNumber . '</p>';
				echo '<p>NIP: ' . $invoice->nip . '</p>';
			}
			else {
				echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			}
			
			// Wywołanie metody zwracającej szczegółowe dane firmy
			$all = $nip24->getAllDataExt(\NIP24\Number::NIP, $nip, false);
			
			if ($all) {
				echo '<pre>' . print_r($all, true) . '</pre>';
			}
			else {
				echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			}
			
			// Wywołanie metody zwracającej dane z systemu VIES
			$vies = $nip24->getVIESData($nip_eu);
				
			if ($vies) {
			    echo '<pre>' . print_r($vies, true) . '</pre>';
			}
			else {
			    echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			}

			// Wywołanie metody zwracającej informacje o rachunku bankowym
			$iban = $nip24->getIBANStatusExt(\NIP24\Number::NIP, $nip, $iban);
				
			if ($iban) {
			    echo '<pre>' . print_r($iban, true) . '</pre>';
			}
			else {
			    echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			}
		?>
	</body>
</html>
