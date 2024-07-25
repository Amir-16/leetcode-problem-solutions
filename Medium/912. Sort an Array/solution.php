<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortArray($nums)
    {
        sort($nums);

        return $nums;

    }
}

$nums = [5, 2, 3, 1, 4];

$solution = new Solution();

$result = $solution->sortArray($nums);

print_r($result);
