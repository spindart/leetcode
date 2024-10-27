<?php

/**
 * 151. Reverse Words in a String
 * https://leetcode.com/problems/reverse-words-in-a-string/
 */

namespace App\LeetCode;

class ReverseWordsInString
{

    /**
     * @param string $nums
     * @return string
     */
    function reverseWords($s)
    {
        $arr = array_diff(explode(' ', trim($s)), ['']);
        $arr = array_reverse($arr);

        return implode(' ', $arr);
    }
}
