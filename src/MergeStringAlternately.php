<?php

namespace App\LeetCode;

class MergeStringAlternately
{

    /**
     * @param string|array $word1
     * @param string|array $word2
     * @return string|array
     */
    function mergeAlternately($word1, $word2): string|array
    {
        $output = '';
        $i = 0;
        while (isset($word1[$i]) || isset($word2[$i])) {
            if (isset($word1[$i])) {
                $output .= $word1[$i];
            }
            if (isset($word2[$i])) {
                $output .= $word2[$i];
            }

            $i++;
        }
        return $output;
    }
}
