<?php

/**
 * 88. Merge Sorted Array
 * https://leetcode.com/problems/merge-sorted-array
 */

namespace App\LeetCode;

class MergeSortedArray
{

    /**
     * @param array $nums1
     * @param int $m
     * @param array $nums2
     * @param int $n
     * @return null
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $midx = $m - 1;
        $nidx = $n - 1;
        $right = $m + $n - 1;

        while ($nidx >= 0) {
            if ($midx >= 0 && $nums1[$midx] > $nums2[$nidx]) {
                $nums1[$right] = $nums1[$midx];
                $midx -= 1;
            } else {
                $nums1[$right] = $nums2[$nidx];
                $nidx -= 1;
            }
            $right -= 1;
        }
    }
}
