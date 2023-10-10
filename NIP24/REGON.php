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
 * REGON verificator 
 */
class REGON
{
    /**
     * Normalizes form of the REGON number
     * 
     * @param string $regon
     *            input string
     * @return string|false
     */
    public static function normalize($regon)
    {
        if (is_null($regon) || strlen($regon) == 0) {
            return false;
        }
        
        $regon = trim($regon);
        
        if (preg_match('/^[0-9]{9,14}$/', $regon) != 1) {
            return false;
        }
        
        if (strlen($regon) != 9 && strlen($regon) != 14) {
            return false;
        }
        
        return $regon;
    }

    /**
     * Checks if specified REGON is valid
     * 
     * @param string $regon
     *            input number
     * @return true|false
     */
    public static function isValid($regon)
    {
        $regon = self::normalize($regon);
        
        if (! $regon) {
            return false;
        }
        
        if (strlen($regon) == 9) {
            return self::isValidR9($regon);
        } else {
            if (! self::isValidR9(substr($regon, 0, 9))) {
                return false;
            }
            
            return self::isValidR14($regon);
        }
    }

    /**
     * Check 9-digit REGON number
     * 
     * @param string $regon
     *            input number
     * @return true|false
     */
    private static function isValidR9($regon)
    {
        $w = array(
            8,
            9,
            2,
            3,
            4,
            5,
            6,
            7
        );
        
        $sum = 0;
        
        for ($i = 0; $i < count($w); $i ++) {
            $sum += intval($regon[$i]) * $w[$i];
        }
        
        $sum %= 11;
        
        if ($sum == 10) {
            $sum = 0;
        }
        
        if ($sum != intval($regon[8])) {
            return false;
        }
        
        return true;
    }

    /**
     * Check 14-digit REGON number
     * 
     * @param string $regon
     *            input number
     * @return true|false
     */
    private static function isValidR14($regon)
    {
        $w = array(
            2,
            4,
            8,
            5,
            0,
            9,
            7,
            3,
            6,
            1,
            2,
            4,
            8
        );
        
        $sum = 0;
        
        for ($i = 0; $i < count($w); $i ++) {
            $sum += intval($regon[$i]) * $w[$i];
        }
        
        $sum %= 11;
        
        if ($sum == 10) {
            $sum = 0;
        }
        
        if ($sum != intval($regon[13])) {
            return false;
        }
        
        return true;
    }
}

/* EOF */
