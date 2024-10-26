<?php

namespace App\LeetCode\Tests\Unit;

use App\LeetCode\ReverseWordsInString;
use PHPUnit\Framework\TestCase;

class ReverseWordsInStringTest extends TestCase
{
    private $reverseWords;
    public function setUp(): void
    {
        $this->reverseWords = new ReverseWordsInString();
    }

    /** 
     * @dataProvider cases
     */
    public function testReverseWordsInString($string, $expected)
    {

        $actual = $this->reverseWords->reverseWords($string);
        self::assertEquals($expected, $actual);
    }

    /*---------dataProviders---------*/
    public static function cases(): array
    {
        $case1 = "the sky is blue";
        $case2 =  "  hello world  ";
        $case3 = "a good   example";
        $case4 = " gtUGyw       sQ       ZaYYygdFe    Rep6lU  o z      QcspISw       k0b9Ts   KkkRVXY7   OUVxX1zsUL      aQ7iiTy      nKCtoS8       Jp  15uAqvNl   W9Mqf7cep    c      WZJ0M3Z       kX       J     en       wUb6 yY     9v      6eq hQs UmNRei   qEjVjL      xmhQMptz   kT     VBLWqIJXRi       qM      L3jQ78    p    TZH     glfOAYah40   GsaSwLnOs     zIiIXd     YgHsUKFd     i7      0       11lASBGl   LKg3a    LDtzIOvWLt   vPKksW Aa  LFTT      M6FyWJ  y5j02N      lKw sBmxVa1Eh     eLl uM2P  q4    7W8r   GV9    KipYyS0 S pA";

        $case1ValueExpect = "blue is sky the";
        $case2ValueExpect = "world hello";
        $case3ValueExpect =  "example good a";
        $case4ValueExpect =  "pA S KipYyS0 GV9 7W8r q4 uM2P eLl sBmxVa1Eh lKw y5j02N M6FyWJ LFTT Aa vPKksW LDtzIOvWLt LKg3a 11lASBGl 0 i7 YgHsUKFd zIiIXd GsaSwLnOs glfOAYah40 TZH p L3jQ78 qM VBLWqIJXRi kT xmhQMptz qEjVjL UmNRei hQs 6eq 9v yY wUb6 en J kX WZJ0M3Z c W9Mqf7cep 15uAqvNl Jp nKCtoS8 aQ7iiTy OUVxX1zsUL KkkRVXY7 k0b9Ts QcspISw z o Rep6lU ZaYYygdFe sQ gtUGyw";

        return [
            'Case 1' => [$case1, $case1ValueExpect],
            'Case 2' => [$case2, $case2ValueExpect],
            'Case 3' => [$case3, $case3ValueExpect],
            'Case 4' => [$case4, $case4ValueExpect],
        ];
    }
}
