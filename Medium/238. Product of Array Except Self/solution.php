<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function productExceptSelf($nums)
    {
        $n = count($nums);
        $output = [];

        $left = $right = 1;

        for ($i = 0; $i < $n; $i++) {
            $output[$i] = $left;
            $left *= $nums[$i];
        }

        for ($i = $n - 1; $i >= 0; $i--) {
            $output[$i] = $right;
            $right *= $nums[$i];
        }

        return $output;
    }
}

$solution = new Solution();

$nums = [1, 2, 3, 4];

$result = $solution->productExceptSelf($nums);

print_r($result);
