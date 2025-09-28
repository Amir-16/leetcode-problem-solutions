<?php
class Solution
{
    public function largestPerimeter(array $nums)
    {
        rsort($nums);

        $length = count($nums);

        for ($i = 0; $i < $length - 2; $i++) {
            if (($nums[$i]   + $nums[$i + 1] > $nums[$i + 2])
                && ($nums[$i]   + $nums[$i + 2] > $nums[$i + 1])
                && ($nums[$i + 1] + $nums[$i + 2] > $nums[$i])
            ) {
                return $nums[$i] + $nums[$i + 1] + $nums[$i + 2];
            }
        }
        return 0;
    }
}

$solution = new Solution;

$solution->largestPerimeter([3, 6, 2, 3]);
