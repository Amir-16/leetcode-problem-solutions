<?php
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    public function halvesAreAlike($s)
    {
        $vowels               = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $len                  = strlen($s);
        $firstHalfVowelCount  = 0;
        $secondHalfVowelCount = 0;

        for ($i = 0; $i < $len / 2; $i++) {
            if (in_array($s[$i], $vowels)) {
                $firstHalfVowelCount++;
            }
            if (in_array($s[$i + $len / 2], $vowels)) {
                $secondHalfVowelCount++;
            }
        }

        return $firstHalfVowelCount === $secondHalfVowelCount;
    }
}

$solution = new Solution();

$s = "book";

var_dump($solution->halvesAreAlike($s));
