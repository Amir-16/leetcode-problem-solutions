<?php
class Solution
{
    /**
     * @param String[] $words1
     * @param String[] $words2
     * @return Integer
     */
    public function countWords($words1, $words2)
    {

        $countFirstWord = array_count_values($words1);

        $countSecondWord = array_count_values($words2);

        $uniqueWord1 = array_filter($countFirstWord, function ($count) {
            return $count === 1;
        });

        $uniqueWord2 = array_filter($countSecondWord, function ($count) {
            return $count === 1;
        });

        $uniqueWord1 = array_keys($uniqueWord1);

        $uniqueWord2 = array_keys($uniqueWord2);

        $data = array_intersect($uniqueWord1, $uniqueWord2);

        return count($data);
    }
}
$solution = new Solution();

$result = $solution->countWords(["leetcode", "is", "amazing", "as", "is"], ["amazing", "leetcode", "is"]);

print_r($result);
