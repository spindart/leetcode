<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\MergeStringAlternately;
use PHPUnit\Framework\TestCase;

class MergeStringAlternatelyTest extends TestCase
{
    private $mergeStringAlternately;
    public function setUp(): void
    {
        $this->mergeStringAlternately = new MergeStringAlternately();
    }

    /** 
     * @dataProvider cases
     */
    public function testMergeStringAlternately($expected, $word)
    {

        $word1 = $word[0];
        $word2 = $word[1];
        $actual = $this->mergeStringAlternately->mergeAlternately($word1, $word2);
        self::assertSame($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = 'apbqcr';
        $case2ValueExpect = 'apbqrs';
        $case3ValueExpect = 'apbqcd';

        $case1 = ['abc', 'pqr'];
        $case2 = ['ab', 'pqrs'];
        $case3 = ['abcd', 'pq'];

        return [
            'Case 1' => [$case1ValueExpect, $case1],
            'Case 2' => [$case2ValueExpect, $case2],
            'Case 3' => [$case3ValueExpect, $case3],
        ];
    }
}
