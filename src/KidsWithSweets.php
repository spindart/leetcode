<?php

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
