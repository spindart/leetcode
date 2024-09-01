<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\KidsWithSweets;
use PHPUnit\Framework\TestCase;

class KidsWithSweetsTest extends TestCase
{
    private $kidsWithSweets;
    public function setUp(): void
    {
        $this->kidsWithSweets = new KidsWithSweets();
    }

    /** 
     * @dataProvider cases
     */
    public function testKidsWithSweetsTest($expected, $candies, $extraCandies)
    {
        $actual = $this->kidsWithSweets->kidsWithCandies($candies, $extraCandies);
        self::assertSame($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = [true, true, true, false, true];
        $case2ValueExpect = [true, false, false, false, false];
        $case3ValueExpect = [true, false, true];

        $candies1 = [2, 3, 5, 1, 3];
        $candies2 = [4, 2, 1, 1, 2];
        $candies3 = [12, 1, 2,];

        $extraCandies1 = 3;
        $extraCandies2 = 1;
        $extraCandies3 = 10;


        return [
            'Case 1' => [$case1ValueExpect, $candies1, $extraCandies1],
            'Case 2' => [$case2ValueExpect, $candies2, $extraCandies2],
            'Case 3' => [$case3ValueExpect, $candies3, $extraCandies3],
        ];
    }
}
