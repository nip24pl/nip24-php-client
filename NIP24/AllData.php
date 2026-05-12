<?php
/**
 * Copyright 2015-2026 NETCAT (www.netcat.pl)
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
 * @copyright 2015-2026 NETCAT (www.netcat.pl)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace NIP24;

/**
 * All firm data
 */
class AllData extends InvoiceData
{
    public ?string $type;

    public ?string $regon;

    public ?string $shortname;

    public ?string $secondname;

    public ?string $streetCode;
    
    public ?string $cityCode;
    
    public ?string $community;
    
    public ?string $communityCode;

    public ?string $county;
    
    public ?string $countyCode;

    public ?string $state;
    
    public ?string $stateCode;

    public ?string $creationDate;

    public ?string $startDate;

    public ?string $registrationDate;

    public ?string $holdDate;

    public ?string $renevalDate;

    public ?string $lastUpdateDate;

    public ?string $bankruptcyDate;

    public ?string $endOfBankruptcyProceedingsDate;

    public ?string $endDate;

    public ?string $deletionDate;

    public ?string $registryEntityCode;

    public ?string $registryEntityName;

    public ?string $registryCode;

    public ?string $registryName;

    public ?string $recordCreationDate;

    public ?string $recordNumber;

    public ?string $basicLegalFormCode;

    public ?string $basicLegalFormName;

    public ?string $specificLegalFormCode;

    public ?string $specificLegalFormName;

    public ?string $ownershipFormCode;

    public ?string $ownershipFormName;

    public array $businessPartner;

    public array $pkd;

    public function __construct()
    {
        $this->businessPartner = array();
        $this->pkd = array();
    }
    
    /**
     * Get object data as string
     * @return string
     */
    public function __toString()
    {
        return 'AllData: [uid = ' . $this->uid
            . ', nip = ' . $this->nip
            . ', regon = ' . $this->regon
            . ', type = ' . $this->type

            . ', name = ' . $this->name
            . ', shortName = ' . $this->shortname
            . ', firstName = ' . $this->firstname
            . ', secondName = ' . $this->secondname
            . ', lastName = ' . $this->lastname

            . ', street = ' . $this->street
            . ', streetCode = ' . $this->streetCode
            . ', streetNumber = ' . $this->streetNumber
            . ', houseNumber = ' . $this->houseNumber
            . ', city = ' . $this->city
            . ', cityCode = ' . $this->cityCode
            . ', community = ' . $this->community
            . ', communityCode = ' . $this->communityCode
            . ', county = ' . $this->county
            . ', countyCode = ' . $this->countyCode
            . ', state = ' . $this->state
            . ', stateCode = ' . $this->stateCode
            . ', postCode = ' . $this->postCode
            . ', postCity = ' . $this->postCity

            . ', phone = ' . $this->phone
            . ', email = ' . $this->email
            . ', www = ' . $this->www

            . ', creationDate = ' . $this->creationDate
            . ', startDate = ' . $this->startDate
            . ', registrationDate = ' . $this->registrationDate
            . ', holdDate = ' . $this->holdDate
            . ', renevalDate = ' . $this->renevalDate
            . ', lastUpdateDate = ' . $this->lastUpdateDate
            . ', bankruptcyDate = ' . $this->bankruptcyDate
            . ', endOfBankruptcyProceedingsDate = ' . $this->endOfBankruptcyProceedingsDate
            . ', endDate = ' . $this->endDate
            . ', deletionDate = ' . $this->deletionDate

            . ', registryEntityCode = ' . $this->registryEntityCode
            . ', registryEntityName = ' . $this->registryEntityName

            . ', registryCode = ' . $this->registryCode
            . ', registryName = ' . $this->registryName

            . ', recordCreationDate = ' . $this->recordCreationDate
            . ', recordNumber = ' . $this->recordNumber

            . ', basicLegalFormCode = ' . $this->basicLegalFormCode
            . ', basicLegalFormName = ' . $this->basicLegalFormName

            . ', specificLegalFormCode = ' . $this->specificLegalFormCode
            . ', specificLegalFormName = ' . $this->specificLegalFormName

            . ', ownershipFormCode = ' . $this->ownershipFormCode
            . ', ownershipFormName = ' . $this->ownershipFormName

            . ', businessPartner = ' . implode(', ', $this->businessPartner)
            . ', pkd = ' . implode(', ', $this->pkd)
            . ']';
    }
}

/* EOF */
