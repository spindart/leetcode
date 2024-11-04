<?php

/**
 * 1207. Unique Number of Occurrences
 * https://leetcode.com/problems/unique-number-of-occurrences/
 */

namespace App\LeetCode;

class UniqueOccurrences
{

    /**
     * @param array $arr
     * @return bool
     */
    function uniqueOccurrences($arr)
    {
        $occurrences = array_count_values($arr);
        $occurencesUnique = array_unique($occurrences);
        return count($occurencesUnique) == count($occurrences);
    }
}
