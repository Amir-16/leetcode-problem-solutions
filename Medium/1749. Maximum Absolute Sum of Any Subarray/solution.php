<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxAbsoluteSum($nums)
    {
        $maxSum     = 0;
        $minSum     = 0;
        $currentMax = 0;
        $currentMin = 0;

        foreach ($nums as $num) {
            $currentMax = max(0, $currentMax + $num);
            $maxSum     = max($maxSum, $currentMax);

            $currentMin = min(0, $currentMin + $num);
            $minSum     = min($minSum, $currentMin);
        }

        return max(abs($maxSum), abs($minSum));
    }
}

$solution = new Solution();

$nums = [1, -3, 2, 3, -1];

echo $solution->maxAbsoluteSum($nums); // Output: 5
