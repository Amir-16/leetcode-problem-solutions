<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    public function sortColors(&$nums)
    {
        sort($nums);

        return $nums;
    }
}

$solution = new Solution();

$nums = [2, 0, 2, 1, 1, 0];

$result = $solution->sortColors($nums);

print_r($result);


