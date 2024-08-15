<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxProductDifference($nums)
    {
        sort($nums);

         $maxProduct = $nums[count($nums) - 1] * $nums[count($nums) - 2];

         $minProduct = $nums[0] * $nums[1];

         return $maxProduct - $minProduct;

    }
}

$solution = new Solution();

$nums = [5, 6, 2, 7, 4];

$result = $solution->maxProductDifference($nums);

print_r($result);
