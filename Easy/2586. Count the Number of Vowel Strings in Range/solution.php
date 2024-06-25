<?php
class Solution
{
    /**
     * @param String[] $words
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    public function vowelStrings($words, $left, $right)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        $count = 0;

        for ($i = $left; $i <= $right; $i++) {
            $word = $words[$i];
            $wordLength = strlen($word);

            // Check if the first and last characters are vowels
            if ($wordLength > 0 && in_array($word[0], $vowels) && in_array($word[$wordLength - 1], $vowels)) {
                $count++;
            }
        }

        return $count;
    }

}

$solution = new Solution;

$result = $solution->vowelStrings(["are", "amy", "u"], 0, 2);

print_r($result);
