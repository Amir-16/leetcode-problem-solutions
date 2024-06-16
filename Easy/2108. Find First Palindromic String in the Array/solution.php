<?php
class Solution
{
    /**
     * @param String[] $words
     * @return String
     */
    public function firstPalindrome($words)
    {
        foreach ($words as $word) {
            if ($word === strrev($word)) {
                return $word;
            }
        }
        return "";

    }
}

$solution  = new Solution;

echo $solution->firstPalindrome(["def","ghi"]);
