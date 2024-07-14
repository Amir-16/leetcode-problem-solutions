<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function missingNumber($nums)
    {
        $count = count($nums);

        if ($count <= 1) {
            return $nums[0] == 0? 1 : 0;
        }

        $max = max($nums);

        $min = min($nums);

        $range = range($min, $max);

        $missingNumber = array_diff($range, $nums);

        if (empty($missingNumber)) {

            return $min == 0? $max + 1 : $min - 1;

        }

        return (int) implode(', ', $missingNumber);

    }
}

$solution = new Solution();

$nums = [1,2];

$solution = $solution->missingNumber($nums); // Output: 2

print_r($solution);
