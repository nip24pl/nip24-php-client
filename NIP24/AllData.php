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
 * All firm data
 */
class AllData extends InvoiceData
{
    public $type;

    public $regon;

    public $shortname;

    public $secondname;

    public $streetCode;
    
    public $cityCode;
    
    public $community;
    
    public $communityCode;

    public $county;
    
    public $countyCode;

    public $state;
    
    public $stateCode;

    public $creationDate;

    public $startDate;

    public $registrationDate;

    public $holdDate;

    public $renevalDate;

    public $lastUpdateDate;

    public $endDate;

    public $registryEntityCode;

    public $registryEntityName;

    public $registryCode;

    public $registryName;

    public $recordCreationDate;

    public $recordNumber;

    public $basicLegalFormCode;

    public $basicLegalFormName;

    public $specificLegalFormCode;

    public $specificLegalFormName;

    public $ownershipFormCode;

    public $ownershipFormName;

    public $pkd;

    public function __construct()
    {
        $this->pkd = array();
    }
}

/* EOF */
