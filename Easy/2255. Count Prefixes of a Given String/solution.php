<?php
class Solution
{
    /**
     * @param String[] $words
     * @param String $s
     * @return Integer
     */
    public function countPrefixes($words, $s)
    {
        $count = 0;

        foreach ($words as $word) {
            if (strpos($s, $word) === 0) {
                $count++;
            }
        }
        return $count;
    }
}

$solution = new Solution;

$words = ["a","b","c","ab","bc","abc"];

$s = "abc";

echo $solution->countPrefixes($words, $s);
