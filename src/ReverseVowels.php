<?php

/**
 * 345. Reverse Vowels of a String
 * https://leetcode.com/problems/reverse-vowels-of-a-string/description/
 */

namespace App\LeetCode;

class ReverseVowels
{

    /**
     * @param string $s
     * @return string
     */
    function reverseVowels($s)
    {
        $vowels = ['A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u'];
        $vowelPositions = [];
        $extractedVowels = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $vowels)) {
                $vowelPositions[] = $i;
                $extractedVowels[] = $s[$i];
            }
        }

        $extractedVowels = array_reverse($extractedVowels);

        foreach ($vowelPositions as $index => $position) {
            $s[$position] = $extractedVowels[$index];
        }

        return $s;
    }
}