<?php
class Solution
{

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */

    //optimize solution
    public function findWordsContaining($words, $x)
    {

        return array_keys(array_filter($words, fn($word) =>
            strpos($word, $x) !== false));

    }
}

$solution = new Solution;

$result = $solution->findWordsContaining(["leet", "code"], "e");

print_r($result);
