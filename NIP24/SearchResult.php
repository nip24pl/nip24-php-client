<?php
/**
 * Copyright 2015-2020 NETCAT (www.netcat.pl)
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
 * @copyright 2015-2020 NETCAT (www.netcat.pl)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace NIP24;

/**
 * Search result
 */
class SearchResult
{
    public $uid;

    public $results;
    
    public $id;

    public $date;

    public $source;

    public function __construct()
    {
        $this->results = array();
    }

    /**
     * Get object data as string
     * @return string
     */
    public function __toString()
    {
        return 'SearchResult: [uid = ' . $this->uid
            . ', results = ' . $this->results
            . ', id = ' . $this->id
            . ', date = ' . $this->date
            . ', source = ' . $this->source
            . ']';
    }
}

/* EOF */
