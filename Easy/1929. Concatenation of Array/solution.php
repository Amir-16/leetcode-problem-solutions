<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function getConcatenation($nums)
    {
        $copyArray = $nums;

        return  array_merge($nums, $copyArray);
    }
}

$solution = new Solution();
$result = $solution->getConcatenation([1, 2, 1]);
print_r($result);