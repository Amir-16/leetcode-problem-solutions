<?php
class Solution
{
    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    public function uncommonFromSentences($s1, $s2)
    {
        $str1 = explode(" ", $s1);

        $str2 = explode(" ", $s2);

        $words = array_merge($str1, $str2);

        $wordCount = array_count_values($words);

        $uncommonWords = array_filter($wordCount, function ($count) {
            return $count === 1;
        });

        return array_keys($uncommonWords);

    }
}

// Test

$s1 = "this apple is sweet";
$s2 = "this apple is sour";

$solution = new Solution();
$result = $solution->uncommonFromSentences($s1, $s2);

print_r($result);
