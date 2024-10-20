<?php

namespace App\LeetCode;

class TwoSum
{

    /**
     * @param array $nums
     * @param array $target
     * @return array
     */
    function twoSum($nums, $target)
    {
        $hashMap = [];
        for ($i = 0; $i < count($nums); $i++) {
            $secondIndex  = $target - $nums[$i];
            if (isset($hashMap[$secondIndex])) {
                return [$i, $hashMap[$secondIndex]];
            } else {
                $hashMap[$nums[$i]] = $i;
            }
        }
        return [];
    }
}
