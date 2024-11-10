<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\MergeSortedArray;
use App\LeetCode\UniqueOccurrences;
use PHPUnit\Framework\TestCase;

class MergeSortedArrayTest extends TestCase
{
    private $mergeSortedArray;
    public function setUp(): void
    {
        $this->mergeSortedArray = new MergeSortedArray();
    }

    /** 
     * @dataProvider cases
     */
    public function testMergeSortedArray($nums1, $m, $nums2, $n, $expected)
    {

        $actual = $this->mergeSortedArray->merge($nums1, $m, $nums2, $n);
        $actual = $nums1;
        self::assertEquals($expected,  $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        // Case 1
        $case1Nums1 = [1, 2, 3, 0, 0, 0];
        $m1 = 3;
        $case1Nums2 = [2, 5, 6];
        $n1 = 3;
        $case1ValueExpect = [1, 2, 2, 3, 5, 6];

        // Case 2
        $case2Nums1 = [1];
        $m2 = 1;
        $case2Nums2 = [];
        $n2 = 0;
        $case2ValueExpect = [1];

        // Case 3
        $case3Nums1 = [0];
        $m3 = 0;
        $case3Nums2 = [1];
        $n3 = 1;
        $case3ValueExpect = [1];


        return [
            'Case 1' => [$case1Nums1, $m1, $case1Nums2, $n1, $case1ValueExpect],
            'Case 2' => [$case2Nums1, $m2, $case2Nums2, $n2, $case2ValueExpect],
            'Case 3' => [$case3Nums1, $m3, $case3Nums2, $n3, $case3ValueExpect],
        ];
    }
}
