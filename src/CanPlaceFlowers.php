<?php

/**
 * 605. Can Place Flowers
 * https://leetcode.com/problems/can-place-flowers/
 */

namespace App\LeetCode;

class CanPlaceFlowers
{

    /**
     * @param int[] $flowerbed
     * @param int $n
     * @return bool
     */
    function canPlaceFlowers($flowerbed, $n): bool
    {

        $count = 0;
        for ($i = 0; $i < count($flowerbed); $i++) {
            # Check if the current plot is empty.
            if ($flowerbed[$i] == 0) {
                # Check if the left and right plots are empty.
                $emptyLeftPlot = ($i == 0) || ($flowerbed[$i - 1] == 0);
                $emptyRightPlot = ($i == count($flowerbed) - 1) || ($flowerbed[$i + 1] == 0);

                # If both plots are empty, we can plant a flower here.
                if ($emptyLeftPlot && $emptyRightPlot) {
                    $flowerbed[$i] = 1;
                    $count += 1;
                }
            }
        }
        return $count >= $n;
    }
}