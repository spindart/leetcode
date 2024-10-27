<?php

/**
 * 1431. Kids With the Greatest Number of Candies
 * https://leetcode.com/problems/kids-with-the-greatest-number-of-candies/
 */

namespace App\LeetCode;

class KidsWithSweets
{
    /**
     * @param int[] $candies
     * @param int $extraCandies
     * @return bool[]
     */
    function kidsWithCandies($candies, $extraCandies): array
    {
        $maxCandies = max($candies);
        foreach ($candies as $key  => $candie) $candies[$key] =  $candie + $extraCandies >= $maxCandies;
        return $candies;
    }
}
