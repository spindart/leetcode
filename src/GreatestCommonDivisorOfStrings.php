<?php

namespace App\LeetCode;

class GreatestCommonDivisorOfStrings
{

    /**
     * @param string|array $str1
     * @param string|array $str2
     * @return string|array
     */
    function gcdOfStrings($str1, $str2)
    {
        if ($str1 . $str2 !== $str2 . $str1) return '';

        $a = strlen($str1);
        $b = strlen($str2);
        $pos = 0;

        while (true) {

            if ($b === 0) {
                $pos = $a;
                break;
            }

            $res = $a;
            $a = $b;
            $b = $res % $b;
        }

        return substr($str1, 0, $pos);
    }
}
