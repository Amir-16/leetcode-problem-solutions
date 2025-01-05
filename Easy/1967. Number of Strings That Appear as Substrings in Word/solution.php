<?php
class Solution
{
    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    public function numOfStrings($patterns, $word)
    {
        $count = 0;

        foreach ($patterns as $pattern) {
            if (strpos($word, needle: $pattern) !== false) {
                $count++;
            }
        }
        return $count;
    }
}

$patterns = ["a", "b", "c"];

$word = "aaaaabbbbb";

$solution = new Solution();

echo $solution->numOfStrings($patterns, $word);
