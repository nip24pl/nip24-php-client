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
 * VAT registry entity
 */
class VATEntity
{
    const NOT_REGISTERED = 1;
    const ACTIVE = 2;
    const EXEMPTED = 3;

    public $name;

    public $nip;
    
    public $regon;

    public $krs;

    public $residenceAddress;

    public $workingAddress;

    public $vatStatus;

    public $vatResult;

    public $representatives;

    public $authorizedClerks;

    public $partners;

    public $ibans;

    public $hasVirtualAccounts;

    public $registrationLegalDate;

    public $registrationDenialDate;

    public $registrationDenialBasis;

    public $restorationDate;

    public $restorationBasis;

    public $removalDate;

    public $removalBasis;

    public function __construct()
    {
        $this->representatives = array();
        $this->authorizedClerks = array();
        $this->partners = array();
        $this->ibans = array();
    }

    /**
     * Get object data as string
     * @return string
     */
    public function __toString()
    {
        return 'VATEntity: [name = ' . $this->name
            . ', nip = ' . $this->nip
            . ', regon = ' . $this->regon
            . ', krs = ' . $this->krs
            . ', residenceAddress = ' . $this->residenceAddress
            . ', workingAddress = ' . $this->workingAddress
            . ', vatStatus = ' . $this->vatStatus
            . ', vatResult = ' . $this->vatResult
            . ', representatives = ' . implode(', ', $this->representatives)
            . ', authorizedClerks = ' . implode(', ', $this->authorizedClerks)
            . ', partners = ' . implode(', ', $this->partners)
            . ', ibans = ' . implode(', ', $this->ibans)
            . ', hasVirtualAccounts = ' . ($this->hasVirtualAccounts ? 'true' : 'false')
            . ', registrationLegalDate = ' . $this->registrationLegalDate
            . ', registrationDenialDate = ' . $this->registrationDenialDate
            . ', registrationDenialBasis = ' . $this->registrationDenialBasis
            . ', restorationDate = ' . $this->restorationDate
            . ', restorationBasis = ' . $this->restorationBasis
            . ', removalDate = ' . $this->removalDate
            . ', removalBasis = ' . $this->removalBasis
            . ']';
    }
}

/* EOF */
