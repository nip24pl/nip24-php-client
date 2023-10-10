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
 * Invoice data
 */
class InvoiceData
{
    public $uid;
    
    public $nip;

    public $name;

    public $firstname;

    public $lastname;

    public $street;

    public $streetNumber;

    public $houseNumber;

    public $city;

    public $postCode;

    public $postCity;

    public $phone;

    public $email;

    public $www;
    
    /**
     * Get object data as string
     * @return string
     */
    public function __toString()
    {
        return 'InvoiceData: [uid = ' . $this->uid
            . ', nip = ' . $this->nip
            . ', name = ' . $this->name
            . ', firstName = ' . $this->firstname
            . ', lastName = ' . $this->lastname

            . ', street = ' . $this->street
            . ', streetNumber = ' . $this->streetNumber
            . ', houseNumber = ' . $this->houseNumber
            . ', city = ' . $this->city
            . ', postCode = ' . $this->postCode
            . ', postCity = ' . $this->postCity

            . ', phone = ' . $this->phone
            . ', email = ' . $this->email
            . ', www = ' . $this->www
            . ']';
    }
}

/* EOF */
