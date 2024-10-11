<?php
class Solution
{
    /**
     * @param String[] $words
     * @return Boolean
     */
    public function makeEqual($words)
    {
        $charCount = [];

        foreach ($words as $word) {
            foreach (str_split($word) as $char) {
                $charCount[$char] = isset($charCount[$char]) ? $charCount[$char] + 1 : 1;
            }
        }

        $wordCount = count($words);

        foreach ($charCount as $char) {
            if ($char % $wordCount !== 0) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution();

$words1 = ["abc", "aabc", "bc"];

$result1 = $solution->makeEqual($words1); // Output: true

$words2 = ["abc", "def", "ghi", "jkl"];

$result2 = $solution->makeEqual($words2); // Output: false

print_r($result1);

//print_r($result2);
