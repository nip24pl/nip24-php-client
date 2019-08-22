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
 * KRS verificator
 */
class KRS
{
    /**
     * Normalizes form of the KRS number
     * 
     * @param string $krs
     *            input string
     * @return string|false
     */
    public static function normalize($krs)
    {
        if (is_null($krs) || strlen($krs) == 0) {
            return false;
        }
        
        $krs = trim($krs);
        $krs = str_pad($krs, 10, '0', STR_PAD_LEFT);
        
        if (preg_match('/^[0-9]{10}$/', $krs) != 1) {
            return false;
        }
        
        return $krs;
    }

    /**
     * Checks if specified KRS is valid
     * 
     * @param string $krs
     *            input number
     * @return bool
     */
    public static function isValid($krs)
    {
        if (! ($krs = self::normalize($krs))) {
            return false;
        }
        
        return true;
    }
}

/* EOF */
