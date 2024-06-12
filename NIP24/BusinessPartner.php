<?php
/**
 * Copyright 2015-2024 NETCAT (www.netcat.pl)
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
 * @copyright 2015-2024 NETCAT (www.netcat.pl)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace NIP24;

/**
 * Business partner data
 */
class BusinessPartner
{
    public $regon;

    public $firmName;

    public $firstName;

    public $secondName;

    public $lastName;

    /**
     * Get object data as string
     * @return string
     */
    public function __toString()
    {
        return 'BusinessPartner: [regon = ' . $this->regon
            . ', firmName = ' . $this->firmName
            . ', firstName = ' . $this->firstName
            . ', secondName = ' . $this->secondName
            . ', lastName = ' . $this->lastName
            . ']';
    }
}

/* EOF */
