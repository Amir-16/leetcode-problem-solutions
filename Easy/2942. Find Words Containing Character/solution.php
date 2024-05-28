<?php
class Solution
{

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    public function findWordsContaining($words, $x)
    {
        $positions = [];

        foreach ($words as $index => $word) {

            if (strpos($word, $x) !== false) {
                $positions[] = $index;
            }
        }
        return $positions;

    }
}

$solution = new Solution;

$result = $solution->findWordsContaining(["leet", "code"], "e");

print_r($result);
