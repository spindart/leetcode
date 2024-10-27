<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\FindDifferenceTwoArrays;
use PHPUnit\Framework\TestCase;

class FindDifferenceTwoArraysTest extends TestCase
{
    private $findDifferenceTwoArrays;
    public function setUp(): void
    {
        $this->findDifferenceTwoArrays = new FindDifferenceTwoArrays();
    }

    /** 
     * @dataProvider cases
     */
    public function testFindDifferenceTwoArrays($nums, $expected)
    {
        $nums1 = $nums['nums1'];
        $nums2 = $nums['nums2'];

        $actual = $this->findDifferenceTwoArrays->findDifference($nums1, $nums2);
        self::assertEquals($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = [[1, 3], [4, 6]];
        $case2ValueExpect = [[3], []];

        $case1 = [
            'nums1' => [1, 2, 3],
            'nums2' => [2, 4, 6]
        ];
        $case2 = [
            'nums1' => [1, 2, 3, 3],
            'nums2' => [1, 1, 2, 2]
        ];


        return [
            'Case 1' => [$case1,  $case1ValueExpect],
            'Case 2' => [$case2,  $case2ValueExpect],
        ];
    }
}
