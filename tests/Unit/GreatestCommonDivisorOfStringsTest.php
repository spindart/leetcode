<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\GreatestCommonDivisorOfStrings;
use PHPUnit\Framework\TestCase;

class GreatestCommonDivisorOfStringsTest extends TestCase
{
    private $greatestCommonDivisorOfStrings;
    public function setUp(): void
    {
        $this->greatestCommonDivisorOfStrings = new GreatestCommonDivisorOfStrings();
    }

    /** 
     * @dataProvider cases
     */
    public function testGreatestCommonDivisorOfString($expected, $case)
    {
        $actual = $this->greatestCommonDivisorOfStrings->gcdOfStrings($case[0], $case[1]);
        self::assertSame($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = 'ABC';
        $case2ValueExpect = 'AB';
        $case3ValueExpect = '';

        $case1 = ['ABCABC', 'ABC'];
        $case2 = ['ABABAB', 'ABAB'];
        $case3 = ['LEET', 'COODE'];

        return [
            'Case 1' => [$case1ValueExpect, $case1],
            'Case 2' => [$case2ValueExpect, $case2],
            'Case 3' => [$case3ValueExpect, $case3],
        ];
    }
}
