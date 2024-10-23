<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\ReverseVowels;
use PHPUnit\Framework\TestCase;

class ReverseVowelsTest extends TestCase
{
    private $reverseVowels;
    public function setUp(): void
    {
        $this->reverseVowels = new ReverseVowels();
    }

    /** 
     * @dataProvider cases
     */
    public function testReverseVowels($string, $expected)
    {

        $actual = $this->reverseVowels->reverseVowels($string);
        self::assertSame($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = "AceCreIm";
        $case2ValueExpect = "leotcede";

        $case1 = "IceCreAm";
        $case2 = "leetcode";

        return [
            'Case 1' => [$case1, $case1ValueExpect],
            'Case 2' => [$case2, $case2ValueExpect],
        ];
    }
}
