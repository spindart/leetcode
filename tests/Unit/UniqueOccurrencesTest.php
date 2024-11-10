<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\UniqueOccurrences;
use PHPUnit\Framework\TestCase;

class UniqueOccurrencesTest extends TestCase
{
    private $uniqueOccurrences;
    public function setUp(): void
    {
        $this->uniqueOccurrences = new UniqueOccurrences();
    }

    /** 
     * @dataProvider cases
     */
    public function testUniqueOcurrences($arr, $expected)
    {

        $actual = $this->uniqueOccurrences->uniqueOccurrences($arr);
        self::assertEquals($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1ValueExpect = true;
        $case2ValueExpect = false;
        $case3ValueExpect = true;

        $case1 = [1, 2, 2, 1, 1, 3];
        $case2 = [1, 2];
        $case3 = [-3, 0, 1, -3, 1, 1, 1, -3, 10, 0];



        return [
            'Case 1' => [$case1, $case1ValueExpect],
            'Case 2' => [$case2, $case2ValueExpect],
            'Case 3' => [$case3, $case3ValueExpect],
        ];
    }
}
