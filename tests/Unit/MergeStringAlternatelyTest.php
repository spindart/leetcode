<?php

use App\LeetCode\Php\MergeStringAlternately;
use PHPUnit\Framework\TestCase;

class MergeStringAlternatelyTest extends TestCase
{
    private $mergeStringAlternately;
    public function setUp(): void
    {
        $this->mergeStringAlternately = new MergeStringAlternately();
    }
    public function testMergeStringAlternately()
    {
        $actual = $this->mergeStringAlternately->mergeAlternately("abc", "pqr");
        $expected = "apbqcr";
        self::assertSame($expected, $actual);
    }
}
