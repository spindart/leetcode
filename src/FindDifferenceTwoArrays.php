<?php

namespace App\LeetCode;

class FindDifferenceTwoArrays
{

    /**
     * @param array $nums1
     * @param array $nums2
     * @return array
     */
    function findDifference($nums1, $nums2)
    {
        $result[0] = array_unique(array_diff($nums1, $nums2));
        $result[1] = array_unique(array_diff($nums2, $nums1));
        return [
            array_values($result[0]),
            array_values($result[1]),
        ];
    }
}
