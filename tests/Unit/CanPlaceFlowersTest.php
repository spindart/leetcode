<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\CanPlaceFlowers;
use PHPUnit\Framework\TestCase;

class CanPlaceFlowersTest extends TestCase
{
    private $canPlaceFlowers;
    public function setUp(): void
    {
        $this->canPlaceFlowers = new CanPlaceFlowers();
    }

    /** 
     * @dataProvider cases
     */
    public function testCanPlaceFlowers($flowerbed, $n, $expected)
    {
        $actual = $this->canPlaceFlowers->canPlaceFlowers($flowerbed, $n);
        self::assertSame($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $n1 =  1;
        $n2 =  2;

        $flowerbed1 = [1, 0, 0, 0, 1];
        $flowerbed2 = [1, 0, 0, 0, 1];

        $expected1 = true;
        $expected2 = false;

        return [
            'Case 1' => [$flowerbed1, $n1, $expected1],
            'Case 2' => [$flowerbed2, $n2, $expected2],
        ];
    }
}
