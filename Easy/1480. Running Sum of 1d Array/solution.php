<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function runningSum($nums)
    {
        $sum = 0;
        foreach ($nums as &$num) {
            $sum += $num;
            $num = $sum;
        }
        return $nums;

    }
}

$solution = new Solution();

$result = $solution->runningSum([1, 2, 3, 4]);

print_r($result);
