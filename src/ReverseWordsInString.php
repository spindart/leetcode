<?php

namespace App\LeetCode;

class ReverseWordsInString
{

    /**
     * @param string $nums
     * @return string
     */
    function reverseWords($s)
    {
        $words = explode(" ", $s);
        $newWord = [];
        for ($i = 0; $i < count($words); $i++) {
            if ($words[$i] === "") {
                continue;
            }

            $newWord[] = preg_replace('/\s+/', ' ', $words[$i]);
        }

        $reverse = array_reverse($newWord);

        $s = implode(" ", $reverse);

        return $s;
    }
}
