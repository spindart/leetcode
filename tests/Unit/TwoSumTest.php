<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    private $twoSum;
    public function setUp(): void
    {
        $this->twoSum = new TwoSum();
    }

    /** 
     * @dataProvider cases
     */
    public function testTwoSum($expected, $nums, $target)
    {

        $actual = $this->twoSum->twoSum($nums, $target);
        sort($expected);
        sort($actual);
        self::assertEquals($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = [0, 1];
        $case2ValueExpect = [1, 2];
        $case3ValueExpect = [0, 1];

        $case1 = [2, 7, 11, 15];
        $case2 = [3, 2, 4];
        $case3 = [3, 3];

        $case1Target = 9;
        $case2Target = 6;
        $case3Target = 6;


        return [
            'Case 1' => [$case1ValueExpect, $case1, $case1Target],
            'Case 2' => [$case2ValueExpect, $case2, $case2Target],
            'Case 3' => [$case3ValueExpect, $case3, $case3Target],
        ];
    }
}
