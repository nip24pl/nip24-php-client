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
 * NIP verificator
 */
class NIP
{
    /**
     * Normalizes form of the NIP number
     * 
     * @param string $nip
     *            input string
     * @return string|false
     */
    public static function normalize($nip)
    {
        if (is_null($nip) || strlen($nip) == 0) {
            return false;
        }
        
        $nip = str_replace('-', '', $nip);
        $nip = trim($nip);
        
        if (preg_match('/^[0-9]{10}$/', $nip) != 1) {
            return false;
        }
        
        return $nip;
    }

    /**
     * Checks if specified NIP is valid
     * 
     * @param string $nip
     *            input number
     * @return bool
     */
    public static function isValid($nip)
    {
        if (! ($nip = self::normalize($nip))) {
            return false;
        }
        
        $w = array(
            6,
            5,
            7,
            2,
            3,
            4,
            5,
            6,
            7
        );
        
        $sum = 0;
        
        for ($i = 0; $i < count($w); $i ++) {
            $sum += intval($nip[$i]) * $w[$i];
        }
        
        $sum %= 11;
        
        if ($sum != intval($nip[9])) {
            return false;
        }
        
        return true;
    }
}

/* EOF */
