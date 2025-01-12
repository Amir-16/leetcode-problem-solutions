<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function majorityElement($nums)
    {
        $count = count($nums);

        $majority = floor($count / 2);

        $numMap = array_count_values($nums);

        foreach ($numMap as $key => $value) {
            if ($value > $majority) {
                return $key;
            }
        }
        return null;
    }
}

// Test cases

$solution = new Solution();

$nums1 = [3, 2, 3];

$result = $solution->majorityElement($nums1);

print_r(value: $result);
